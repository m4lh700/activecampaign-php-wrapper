<?php

namespace m4l700\AcPhpWrapper\Api;

use m4l700\AcPhpWrapper\Enums\MethodEnums;

class Api
{
    protected string $apiUrl;
    protected string $apiKey;

    public function __construct(object $config)
    {
        $this->apiUrl = $config->apiUrl;
        $this->apiKey = $config->apiKey;
    }

    /**
     * @param string $url
     * @param string $method
     * @param array|null $data
     *
     * @return array
     * @throws \Exception
     */
    public function connect(string $url, $method = MethodEnums::GET, $data = null): array
    {
        $headers = [
            'Api-Token: ' . $this->apiKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init($url);
        if ($ch === false) {
            throw new \Exception('Failed to initialize cURL');
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, TRUE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        if ($data !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        
        $response = curl_exec($ch);

        return json_decode($response, true);
    }
}