<?php

namespace m4l700\AcPhpWrapper;

use m4l700\AcPhpWrapper\Api\Addresses\Addresses;

/**
 * [Description Configuration]
 */
class Configuration {
    protected string $apiUrl;
    protected string $apiKey;
    public Addresses $addresses;

    /**
     * @param string $apiUrl
     * @param string $apiKey
     */
    public function __construct(string $apiUrl, string $apiKey) {
        $this->apiUrl = rtrim($apiUrl, '/');
        $this->apiKey = $apiKey;

        $this->addresses = new Addresses($this);
    }
}