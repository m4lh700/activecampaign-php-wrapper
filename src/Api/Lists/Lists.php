<?php

namespace m4l700\AcPhpWrapper\Api\Lists;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;

class Lists
{
    /**
     * @var string
     */
    protected string $apiUrl;
    /**
     * @var string
     */
    protected string $apiKey;

    /**
     * @param Object $config
     */
    public function __construct(Object $config)
    {
        $this->apiUrl = $config->apiUrl;
        $this->apiKey = $config->apiKey;
    }

    /**
     * @return array
     */
    public function getLists(): array
    {
        $endpoint = EndpointEnums::LISTS;
        $url = $this->apiUrl . $endpoint;

        $headers = [
            'Api-Token: ' . $this->apiKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, TRUE);

        $response = curl_exec($ch);

        return json_decode($response, true);
    }
}
