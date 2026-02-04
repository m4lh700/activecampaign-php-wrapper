<?php

namespace m4l700\AcPhpWrapper\Api\Addresses;

use GuzzleHttp\Client;

/**
 * [Description Addresses]
 */
class Addresses
{
    protected string $apiUrl;
    protected string $apiKey;

    public function __construct(Object $config)
    {
        $this->apiUrl = $config->apiUrl;
        $this->apiKey = $config->apiKey;
    }

    public function createAddress()
    {
        $client = new Client();

        $response = $client->request('POST', $this->apiUrl, [
        'headers' => [
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'Api-Token' => $this->apiKey,
        ],
        ]);

        echo $response->getBody();
    }
}