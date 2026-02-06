<?php

namespace m4l700\AcPhpWrapper\Api\Addresses;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * [Description Addresses]
 */
class Addresses extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::ADDRESSES;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ADDRESSES;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }

    /**
     * @param int $addressId
     * 
     * @return array
     */
    public function getById(int $addressId): array
    {
        $url = $this->apiUrl . EndpointEnums::ADDRESSES . '/' . $addressId;
        return $this->connect(url: $url);
    }

    /**
     * @param int $addressId
     * 
     * @return array
     */
    public function update(int $addressId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ADDRESSES . '/' . $addressId;
        return $this->connect(url: $url, method: MethodEnums::PUT , data: $data);
    }

    /**
     * @param int $addressId
     * 
     * @return array
     */
    public function delete(int $addressId): array
    {
        $url = $this->apiUrl . EndpointEnums::ADDRESSES . '/' . $addressId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }


}