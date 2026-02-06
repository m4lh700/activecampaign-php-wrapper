<?php

namespace m4l700\AcPhpWrapper\Api\Ecommerce\Orders;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * EcommerceOrders API Wrapper
 *
 * This class provides methods to interact with ecommerce orders endpoints.
 * It handles order retrieval, creation, updating, and deletion operations
 * through the ActiveCampaign API.
 *
 * @author David Holleman
 */
class Orders extends Api
{
   /**
     * @param int $orderId
     *
     * @return array
     */
    public function getById(int $orderId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_ORDERS . '/' . $orderId;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_ORDERS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }

    /**
     * @param int $orderId
     * @param array $data
     * 
     * @return array
     */
    public function update(int $orderId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_ORDERS . '/' . $orderId;
        return $this->connect(url: $url, method: MethodEnums::PUT, data: $data);
    }

    /**
     * @param int $orderId
     * 
     * @return array
     */
    public function delete(int $orderId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_ORDERS . '/' . $orderId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }

    /**
     * 
     * Insert the correct data array to create an abandoned cart. The data array should contain the following keys:
     * - externalcheckoutid
     * - abandoned_date
     * 
     * @param array $data
     * 
     * @return array
     */
    public function createAbandonedCart(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_ORDERS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }
}