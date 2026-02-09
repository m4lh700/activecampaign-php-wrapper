<?php

namespace m4l700\AcPhpWrapper\Api\Automations;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;

class Automations extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::AUTOMATIONS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $automationId
     * 
     * @return array
     */
    public function getById(int $automationId): array
    {
        $url = $this->apiUrl . EndpointEnums::AUTOMATIONS . '/' . $automationId;
        return $this->connect(url: $url);
    }
}