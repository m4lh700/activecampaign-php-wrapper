<?php

namespace m4l700\AcPhpWrapper\Api\Contacts;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

class Contacts extends Api
{
    /**
     * @var string
     */
    private string $apiUrl;
    /**
     * @var string
     */
    private string $apiKey;

    public function __construct(Object $config)
    {
        $this->apiUrl = $config->apiUrl;
        $this->apiKey = $config->apiKey;
    }

    /**
     * @return array
     */
    public function getContacts(): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS;
        return $this->connect(url: $url, apiKey: $this->apiKey);
    }

    /**
     * @param int $contactId
     * 
     * @return array
     */
    public function getContact(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId;
        return $this->connect(url: $url, apiKey: $this->apiKey);
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    public function createContact(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS;
        return $this->connect(url: $url, apiKey: $this->apiKey, method: MethodEnums::POST, data: $data);
    }
}