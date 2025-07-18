<?php

namespace App\PropellerApi;

use GuzzleHttp\Client as GuzzleClient;
use OpenAPI\Client\Api\EnquiriesApi;
use OpenAPI\Client\Api\SubscriberListsApi;
use OpenAPI\Client\Api\SubscribersApi;
use OpenAPI\Client\Configuration;

readonly class ClientFactory
{
    public function __construct(
        private string $apiToken,
    ) {
    }

    public function createClient(): Client
    {
        $config = new Configuration();
        $config->setAccessToken($this->apiToken);

        $guzzle = new GuzzleClient();

        return new Client(
            new SubscribersApi($guzzle, $config),
            new SubscriberListsApi($guzzle, $config),
            new EnquiriesApi($guzzle, $config),
        );
    }
}
