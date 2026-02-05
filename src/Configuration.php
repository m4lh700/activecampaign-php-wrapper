<?php

namespace m4l700\AcPhpWrapper;

use m4l700\AcPhpWrapper\Api\Addresses\Addresses;
use m4l700\AcPhpWrapper\Api\Lists\Lists;

/**
 * [Description Configuration]
 */
class Configuration {
    public string $apiUrl;
    public string $apiKey;
    public Addresses $addresses;
    public Lists $lists;

    /**
     * @param string $apiUrl
     * @param string $apiKey
     */
    public function __construct(string $apiUrl, string $apiKey) {
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;

        $this->addresses = new Addresses($this);
        $this->lists = new Lists($this);
    }
}