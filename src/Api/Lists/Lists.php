<?php

namespace m4l700\AcPhpWrapper\Api\Lists;

use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Api\Api;

class Lists extends Api
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
        $url = $this->apiUrl . EndpointEnums::LISTS;
        return $this->connect($url, $this->apiKey);
    }
}
