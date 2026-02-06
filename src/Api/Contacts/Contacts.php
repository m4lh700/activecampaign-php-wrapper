<?php

namespace m4l700\AcPhpWrapper\Api\Contacts;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * [Description Contacts]
 */
class Contacts extends Api
{
    /**
     * @return array
     */
    public function get(): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $contactId
     *
     * @return array
     */
    public function getById(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function create(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }

    /**
     * @param int $contactId
     * @param array $data
     * 
     * @return array
     */
    public function update(int $contactId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId;
        return $this->connect(url: $url, method: MethodEnums::PUT, data: $data);
    }

    /**
     * @param int $contactId
     * 
     * @return array
     */
    public function delete(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }

    /**
     * @param int $contactId
     * 
     * @return array
     */
    public function getContactData(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId . EndpointEnums::CONTACT_DATA;
        return $this->connect(url: $url);
    }

    /**
     * @param int $contactId
     * 
     * @return array
     */
    public function getContactTag(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId . EndpointEnums::CONTACT_TAGS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $contactId
     * @param int $tagId
     * 
     * @return array
     */
    public function createContactTag(int $contactId, int $tagId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId . EndpointEnums::CONTACT_TAGS;
        $data = [
            'contactTag' => [
                'contact' => $contactId,
                'tag' => $tagId
            ]
        ];
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }

    /**
     * @param int $contactId
     * @param int $tagId
     * 
     * @return array
     */
    public function deleteContactTag(int $contactId, int $tagId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId . EndpointEnums::CONTACT_TAGS . '/' . $tagId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }

    /**
     * @param int $contactId
     * 
     * @return array
     */
    public function getContactTags(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId . EndpointEnums::CONTACT_TAGS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $contactId
     * 
     * @return array
     */
    public function getContactLists(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId . EndpointEnums::CONTACT_LISTS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $contactId
     * 
     * @return array
     */
    public function getContactLogs(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId . EndpointEnums::CONTACT_LOGS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $contactId
     * 
     * @return array
     */
    public function getContactFieldValues(int $contactId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACTS . '/' . $contactId . EndpointEnums::CONTACT_FIELD_VALUES;
        return $this->connect(url: $url);
    }
}