<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\NewEnquiryDto;
use App\PropellerApi\Client;
use App\PropellerApi\ClientFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

class CreateEnquiryController extends AbstractController
{
    private Client $client;

    public function __construct(ClientFactory $clientFactory)
    {
        $this->client = $clientFactory->createClient();
    }

    #[Route('/api/create-enquiry', methods: ['POST'], format: 'json')]
    public function createEnquiry(
        #[MapRequestPayload] NewEnquiryDto $newEnquiryDto,
    ): Response
    {
        $subscriber = $this->client->addSubscriber($newEnquiryDto->subscriber, $newEnquiryDto->lists);

        $enquiry = $this->client->createEnquiry($subscriber, $newEnquiryDto->enquiry);

        return $this->json($enquiry);
    }
}
