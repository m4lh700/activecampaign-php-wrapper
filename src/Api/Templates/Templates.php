<?php

namespace m4l700\AcPhpWrapper\Api\Templates;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;

/**
 * [Description Templates]
 */
class Templates extends Api
{
    /**
     * @param int $templateId
     * 
     * @return array
     */
    public function getTemplate(int $templateId): array
    {
        $url = $this->apiUrl . EndpointEnums::TEMPLATES . '/' . $templateId;
        return $this->connect(url: $url);
    }
}