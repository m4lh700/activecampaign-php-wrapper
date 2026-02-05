<?php

namespace m4l700\AcPhpWrapper;

/**
 * ApiClient
 *
 * Handles HTTP requests and communication with external APIs.
 * Provides methods for making API calls, managing authentication,
 * and processing API responses.
 *
 * @package AcPhpWrapper
 * @author David Holleman
 * @version 0.0.1
 */
class ApiClient extends Configuration
{
    /**
     * @param string $apiUrl
     * @param string $apiKey
     */
    public function __construct(string $apiUrl, string $apiKey) {
        parent::__construct($apiUrl, $apiKey);
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return [
            'Api-Token: ' . $this->apiKey,
            'Content-Type: application/json',
        ];
    }
}