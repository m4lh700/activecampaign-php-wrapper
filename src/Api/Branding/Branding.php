<?php

namespace m4l700\AcPhpWrapper\Api\Branding;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;

/**
 * [Description Branding]
 */
class Branding extends Api
{
    /**
     * @return array
     */
    public function getBrandings(): array
    {
        $url = $this->apiUrl . EndpointEnums::BRANDING;
        return $this->connect(url: $url);
    }

    /**
     * @param int $brandingId
     * 
     * @return array
     */
    public function getBranding(int $brandingId): array
    {
        $url = $this->apiUrl . EndpointEnums::BRANDING . '/' . $brandingId;
        return $this->connect(url: $url);
    }
}