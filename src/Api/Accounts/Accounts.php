<?php

namespace m4l700\AcPhpWrapper\Api\Accounts;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * [Description Accounts]
 */
class Accounts extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $accountId
     *
     * @return array
     */
    public function getById(int $accountId): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS . '/' . $accountId;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function create(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }

    /**
     * @param int $accountId
     * 
     * @return array
     */
    public function delete(int $accountId): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS . '/' . $accountId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }

    /**
     * @param int $accountId
     * @param array $data
     * 
     * @return array
     */
    public function update(int $accountId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ACCOUNTS . '/' . $accountId;
        return $this->connect(url: $url, method: MethodEnums::PUT, data: $data);
    }   
    
}