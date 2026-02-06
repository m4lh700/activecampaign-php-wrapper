<?php

namespace m4l700\AcPhpWrapper\Api\Ecommerce\Customers;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * [Description EcommerceCustomers]
 */
class Customers extends Api
{
    /**
     * @param int $customerId
     * @param int $externalId
     * @param string $email
     * @param bool $acceptsMarketing
     * 
     * @return array
     */
    public function create(int $connectionId, int $externalId, string $email, bool $acceptsMarketing = true): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CUSTOMERS;

        $data = [
            "ecomCustomer" => [
                "connectionid" => $connectionId,
                "externalid" => $externalId,
                "email" => $email,
                "acceptsMarketing" => $acceptsMarketing ? "1" : "0"
            ]
        ];

        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }

    /**
     * Get customer by ID
     * 
     * @param int $customerId
     * 
     * @return array
     */
    public function getById(int $customerId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CUSTOMERS . '/' . $customerId;
        return $this->connect(url: $url);
    }

    /**
     * Get all customers
     * 
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CUSTOMERS;
        return $this->connect(url: $url);
    }

     /**
     * @param int $customerId
     * @param array $data
     * 
     * @return array
     */
    public function update(int $customerId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CUSTOMERS . '/' . $customerId;
        return $this->connect(url: $url, method: MethodEnums::PUT, data: $data);
    }

    /**
     * @param int $customerId
     * 
     * @return array
     */
    public function delete(int $customerId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CUSTOMERS . '/' . $customerId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }
}