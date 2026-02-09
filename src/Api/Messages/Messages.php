<?php

namespace m4l700\AcPhpWrapper\Api\Messages;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;

class Messages extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::MESSAGES;
        return $this->connect(url: $url);
    }

    /**
     * @param int $messageId
     * 
     * @return array
     */
    public function getById(int $messageId): array
    {
        $url = $this->apiUrl . EndpointEnums::MESSAGES . '/' . $messageId;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::MESSAGES;
        return $this->connect(url: $url, method: 'POST', data: $data);
    }

    /**
     * @param int $messageId
     * @param array $data
     * 
     * @return array
     */
    public function update(int $messageId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::MESSAGES . '/' . $messageId;
        return $this->connect(url: $url, method: 'PUT', data: $data);
    }

    /**
     * @param int $messageId
     * 
     * @return array
     */
    public function delete(int $messageId): array
    {
        $url = $this->apiUrl . EndpointEnums::MESSAGES . '/' . $messageId;
        return $this->connect(url: $url, method: 'DELETE');
    }
}