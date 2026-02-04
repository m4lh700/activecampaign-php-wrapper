<?php

namespace m4l700\AcPhpWrapper;

/**
 * [Description ApiClient]
 * @author David
 */
class ApiClient extends Configuration {
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