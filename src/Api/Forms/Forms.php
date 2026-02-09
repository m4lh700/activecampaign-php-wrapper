<?php

namespace m4l700\AcPhpWrapper\Api\Forms;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;

class Forms extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::FORMS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $formId
     * 
     * @return array
     */
    public function getById(int $formId): array
    {
        $url = $this->apiUrl . EndpointEnums::FORMS . '/' . $formId;
        return $this->connect(url: $url);
    }

    /**
     * @param int $formId
     * @param array $data
     * 
     * @return array
     */
    public function update(int $formId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::FORMS . '/' . $formId;
        return $this->connect(url: $url, method: 'PUT', data: $data);
    }

    /**
     * @param int $formId
     * 
     * @return array
     */
    public function delete(int $formId): array
    {
        $url = $this->apiUrl . EndpointEnums::FORMS . '/' . $formId;
        return $this->connect(url: $url, method: 'DELETE');
    }
}