<?php

namespace m4l700\AcPhpWrapper\Api;

use m4l700\AcPhpWrapper\Enums\MethodEnums;

class Api
{
    /**
     * @param string $url
     * @param string $apiKey
     * @param string $method
     * @param array|null $data
     * 
     * @return array
     */
    public function connect(string $url, string $apiKey, $method = MethodEnums::GET, $data = null): array
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
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        if ($data !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        
        $response = curl_exec($ch);

        return json_decode($response, true);
    }
}