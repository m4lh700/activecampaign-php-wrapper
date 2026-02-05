<?php

namespace m4l700\AcPhpWrapper\Api\Accounts;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

class Accounts extends Api
{
    /**
     * @return array
     */
    public function getAccounts(): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $accountId
     *
     * @return array
     */
    public function getAccount(int $accountId): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS . '/' . $accountId;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function createAccount(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }
    
}