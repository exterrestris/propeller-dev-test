<?php

namespace App\PropellerApi;

use App\Model\EnquiryDto;
use App\Model\ListDto;
use App\Model\SubscriberDto;
use OpenAPI\Client\Api\EnquiriesApi;
use OpenAPI\Client\Api\SubscribersApi;
use OpenAPI\Client\Api\SubscriberListsApi;
use OpenAPI\Client\Model\CreateEnquiryForSubscriberRequest;
use OpenAPI\Client\Model\CreateOrUpdateSubscriberRequest;
use OpenAPI\Client\Model\Enquiry;
use OpenAPI\Client\Model\ModelList;
use OpenAPI\Client\Model\Subscriber;

class Client
{
    public function __construct(
        private readonly SubscribersApi $subscribersApi,
        private readonly SubscriberListsApi $subscriberListsApi,
        private readonly EnquiriesApi $enquiriesApi,
    )
    {
    }

    /**
     * @param SubscriberDto $subscriberDto
     * @param ListDto[] $listDtos
     * @return Subscriber
     * @throws \OpenAPI\Client\ApiException
     */
    public function addSubscriber(
        SubscriberDto $subscriberDto,
        array $listDtos = [],
    ): Subscriber
    {
        $request = new CreateOrUpdateSubscriberRequest();
        $request->setEmailAddress($subscriberDto->emailAddress);
        $request->setFirstName($subscriberDto->firstName);
        $request->setLastName($subscriberDto->lastName);
        $request->setDateOfBirth($subscriberDto->dateOfBirth->format('Y-m-d'));
        $request->setMarketingConsent($subscriberDto->marketingConsent);

        if ($subscriberDto->marketingConsent && $listDtos) {
            $lists = $this->getLists();

            $lists = array_filter($lists, function (ModelList $list) use ($listDtos) {
                return in_array($list->getName(), $listDtos);
            });

            $request->setLists(array_map(static fn(ModelList $list) => $list->getId(), $lists));
        }

        $response = $this->subscribersApi->createOrUpdateSubscriber($request);

        return $response->getSubscriber();
    }

    /**
     * @return ModelList[]
     */
    public function getLists(): array
    {
        $response = $this->subscriberListsApi->getAllLists();

        return $response->getLists();
    }

    public function createEnquiry(
        Subscriber $subscriber,
        EnquiryDto $enquiryDto,
    ): Enquiry
    {
        $request = new CreateEnquiryForSubscriberRequest();
        $request->setMessage($enquiryDto->message);

        $result = $this->enquiriesApi->createEnquiryForSubscriber($subscriber->getId(), $request);

        return $result->getEnquiry();
    }
}
