<?php

namespace m4l700\AcPhpWrapper\Api\Addresses;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;

/**
 * [Description Addresses]
 */
class Addresses extends Api
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
     * @return array
     */
    public function createAddress(): array
    {
        $url = $this->apiUrl . EndpointEnums::ADDRESSES;
        return $this->connect($url, $this->apiKey);
    }
}