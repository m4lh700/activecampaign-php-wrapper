<?php

namespace m4l700\AcPhpWrapper\Api\Lists;

use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;
use m4l700\AcPhpWrapper\Api\Api;

/**
 * [Description Lists]
 */
class Lists extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::LISTS;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function create(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::LISTS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }
}
