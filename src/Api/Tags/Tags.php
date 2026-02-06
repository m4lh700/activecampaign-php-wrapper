<?php

namespace m4l700\AcPhpWrapper\Api\Tags;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

class Tags extends Api
{
    /**
     * @return array
     */
    public function getTags(): array
    {
        $url = $this->apiUrl . EndpointEnums::TAGS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $tagId
     * 
     * @return array
     */
    public function getTag(int $tagId): array
    {
        $url = $this->apiUrl . EndpointEnums::TAGS . '/' . $tagId;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    public function createTag(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::TAGS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }

    /**
     * @param int $tagId
     * @param array $data
     * 
     * @return array
     */
    public function updateTag(int $tagId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::TAGS . '/' . $tagId;
        return $this->connect(url: $url, method: MethodEnums::PUT, data: $data);
    }

    /**
     * @param int $tagId
     * 
     * @return array
     */
    public function deleteTag(int $tagId): array
    {
        $url = $this->apiUrl . EndpointEnums::TAGS . '/' . $tagId;
        return $this->connect(url: $url, method: MethodEnums::DELETE);
    }

    /**
     * @param int $contactId
     * @param int $tagId
     * 
     * @return array
     */
    public function addTagToContact(int $contactId, int $tagId): array
    {
        $url = $this->apiUrl . EndpointEnums::CONTACT_TAGS;

        $data = [
            "contactTag" => [
                "contact" => $contactId,
                "tag" => $tagId
            ]
        ];

        return $this->connect(url: $url, method: MethodEnums::POST , data: $data);
    }

}