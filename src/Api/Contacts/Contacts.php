<?php

namespace m4l700\AcPhpWrapper\Api\Contacts;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

class Contacts extends Api
{
    /**
     * @return array
     */
    public function getContacts(): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $contactId
     *
     * @return array
     */
    public function getContact(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function createContact(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }
}