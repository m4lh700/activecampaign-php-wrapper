<?php

namespace m4l700\AcPhpWrapper\Api\Branding;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * [Description Branding]
 */
class Branding extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::BRANDING;
        return $this->connect(url: $url);
    }

    /**
     * @param int $brandingId
     * 
     * @return array
     */
    public function getById(int $brandingId): array
    {
        $url = $this->apiUrl . EndpointEnums::BRANDING . '/' . $brandingId;
        return $this->connect(url: $url);
    }

    /**
     * @param int $brandingId
     * @param array $data
     * 
     * @return array
     */
    public function update(int $brandingId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::BRANDING . '/' . $brandingId;
        return $this->connect(url: $url, method: MethodEnums::PUT, data: $data);
    }
}