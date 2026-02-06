<?php

namespace m4l700\AcPhpWrapper\Api\Ecommerce\Products;

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
class Products extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_PRODUCTS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $productId
     * 
     * @return array
     */
    public function getById(int $productId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_PRODUCTS . '/' . $productId;
        return $this->connect(url: $url, method: MethodEnums::POST);
    }
}