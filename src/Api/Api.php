<?php

namespace m4l700\AcPhpWrapper\Api;

use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * API Wrapper Class
 * 
 * This class provides a centralized interface for making HTTP requests to external APIs.
 * It handles authentication, request building, response parsing, and error handling.
 * 
 * @package Ac\PhpWrapper\Api
 * @author David Holleman
 * 
 */
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

        if ($response === false) {                                                                                                              
            $error = curl_error($ch);                                                                                                           
            unset($ch);                                                                                                                    
            throw new \Exception('cURL request failed: ' . $error);                                                                             
        }                                                                                                                                       
                                                                                                                                                
        unset($ch);                                                                                                                        
                                                                                                                                                
        $decoded = json_decode($response, true);                                                                                                
                                                                                                                                                
        if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {                                                                       
            throw new \Exception('Failed to decode JSON response: ' . json_last_error_msg());                                                   
        }                                                                                                                                       
                                                                                                                                                
        return $decoded ?? []; 
    }
}