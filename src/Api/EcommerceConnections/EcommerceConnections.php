<?php

namespace m4l700\AcPhpWrapper\Api\EcommerceConnections;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

class EcommerceConnections extends Api
{
    /**
     * @param int $connectionId
     * 
     * @return array
     */
    public function getConnection(int $connectionId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CONNECTIONS . '/' . $connectionId;
        return $this->connect(url: $url);
    }

    /**
     * @return array
     */
    public function getConnections(): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CONNECTIONS;
        return $this->connect(url: $url);
    }

    /**
     * @param string $service
     * @param string $externalId
     * @param string $name
     * @param string $logoUrl
     * @param string $linkUrl
     * 
     * @return array
     */
    public function createConnection(string $service, string $externalId, string $name, string $logoUrl, string $linkUrl): array
    {
        $data = [
            "connection" => [
                "service" => $service,
                "externalid" => $externalId,
                "name" => $name,
                "logoUrl" => $logoUrl,
                "linkUrl" => $linkUrl
            ]
        ];

        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CONNECTIONS;
        return $this->connect(url: $url, data: $data);
    }

    /**
     * @param int $connectionId
     * @param array $data
     * 
     * @return array
     */
    public function updateConnection(int $connectionId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CONNECTIONS . '/' . $connectionId;
        return $this->connect(url: $url, data: $data, method: MethodEnums::PUT);
    }

    /**
     * @param int $connectionId
     * 
     * @return array
     */
    public function deleteConnection(int $connectionId): array
    {
        $url = $this->apiUrl . EndpointEnums::ECOMMERCE_CONNECTIONS . '/' . $connectionId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }
}