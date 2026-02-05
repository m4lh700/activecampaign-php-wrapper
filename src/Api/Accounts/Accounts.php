<?php

namespace m4l700\AcPhpWrapper\Api\Accounts;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

class Accounts extends Api
{
    /**
     * @var string
     */
    private string $apiUrl;
    /**
     * @var string
     */
    private string $apiKey;

    public function __construct(Object $config)
    {
        $this->apiUrl = $config->apiUrl;
        $this->apiKey = $config->apiKey;
    }

    /**
     * @return array
     */
    public function getAccounts(): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS;
        return $this->connect(url: $url, apiKey: $this->apiKey);
    }

    /**
     * @param int $accountId
     * 
     * @return array
     */
    public function getAccount(int $accountId): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS . '/' . $accountId;
        return $this->connect(url: $url, apiKey: $this->apiKey);
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    public function createAccount(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS;
        return $this->connect(url: $url, apiKey: $this->apiKey, method: MethodEnums::POST, data: $data);
    }
    
}