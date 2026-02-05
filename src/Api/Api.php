<?php

namespace m4l700\AcPhpWrapper\Api;

class Api
{
    /**
     * @param string $url
     * @param string $apiKey
     * 
     * @return array
     */
    public function connect(string $url, string $apiKey): array
    {
        // Connection logic here
        $headers = [
            'Api-Token: ' . $apiKey,
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