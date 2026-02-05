<?php

namespace m4l700\AcPhpWrapper\Api\EcommerceCustomer;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * [Description EcommerceCustomer]
 */
class EcommerceCustomer extends Api
{
    /**
     * @param int $customerId
     * @param int $externalId
     * @param string $email
     * @param bool $acceptsMarketing
     * 
     * @return array
     */
    public function createEcommerceCustomer(int $connectionId, int $externalId, string $email, bool $acceptsMarketing = true): array
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
     * @param int $customerId
     * 
     * @return array
     */
    public function getEcommerceCustomer(int $customerId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CUSTOMERS . '/' . $customerId;
        return $this->connect(url: $url);
    }

    /**
     * @return array
     */
    public function getEcommerceCustomers(): array
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
    public function updateEcommerceCustomer(int $customerId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CUSTOMERS . '/' . $customerId;
        return $this->connect(url: $url, method: MethodEnums::PUT, data: $data);
    }

    /**
     * @param int $customerId
     * 
     * @return array
     */
    public function deleteEcommerceCustomer(int $customerId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CUSTOMERS . '/' . $customerId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }
}