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
    public function createAddress(): array
    {
        $url = $this->apiUrl . EndpointEnums::ADDRESSES;
        return $this->connect(url: $url, method: MethodEnums::POST);
    }
}