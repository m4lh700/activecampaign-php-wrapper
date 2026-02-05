<?php

namespace m4l700\AcPhpWrapper\Api\Addresses;

use GuzzleHttp\Client;

/**
 * [Description Addresses]
 */
class Addresses
{
    /**
     * @var string
     */
    private string $apiUrl;
    /**
     * @var string
     */
    private string $apiKey;

    /**
     * @param Object $config
     */
    public function __construct(Object $config)
    {
        $this->apiUrl = $config->apiUrl;
        $this->apiKey = $config->apiKey;
    }

    /**
     * @return [type]
     */
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