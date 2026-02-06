<?php

namespace m4l700\AcPhpWrapper\Api\Campaigns;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Enums\EndpointEnums;
use m4l700\AcPhpWrapper\Enums\MethodEnums;

/**
 * Campaigns API Wrapper
 *
 * This class provides methods to interact with the ActiveCampaign Campaigns API.
 *
 * @author David Holleman
 * @package AC\Api\Campaigns
 * @category API
 */
class Campaigns extends Api
{
    /**
     * @return array
     */
    public function getCampaigns(): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS;
        return $this->connect(url: $url);
    }

    /**
     * @param int $campaignId
     * 
     * @return array
     */
    public function getCampaign(int $campaignId): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS . '/' . $campaignId;
        return $this->connect(url: $url);
    }

    /**
     * @param int $campaignId
     * 
     * @return array
     */
    public function getCampaignUsers(int $campaignId): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS . '/' . $campaignId . EndpointEnums::CAMPAIGNS_USER;
        return $this->connect(url: $url);
    }

    /**
     * @param int $campaignId
     * 
     * @return array
     */
    public function getCampaignAutomations(int $campaignId): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS . '/' . $campaignId . EndpointEnums::CAMPAIGNS_AUTOMATION;
        return $this->connect(url: $url);
    }

    /**
     * @param int $userId
     * 
     * @return array
     */
    public function getCampaignsByUser(int $userId): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS . '/user/' . $userId;
        return $this->connect(url: $url);
    }

    /**
     * @param int $campaignId
     * 
     * @return array
     */
    public function getCampaignMessages(int $campaignId): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS . '/' . $campaignId . EndpointEnums::CAMPAIGNS_MESSAGES;
        return $this->connect(url: $url);
    }

    /**
     * @param int $campaignId
     * 
     * @return array
     */
    public function getCampaignMessage(int $campaignId): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS . '/' . $campaignId . EndpointEnums::CAMPAIGNS_MESSAGE;
        return $this->connect(url: $url);
    }

    /**
     * @param int $campaignId
     * 
     * @return array
     */
    public function getCampaignLinks(int $campaignId): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS . '/' . $campaignId . EndpointEnums::CAMPAIGNS_LINKS;
        return $this->connect(url: $url);
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    public function createCampaign(array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS;
        return $this->connect(url: $url, method: MethodEnums::POST, data: $data);
    }

    /**
     * @param int $campaignId
     * @param array $data
     * 
     * @return array
     */
    public function updateCampaign(int $campaignId, array $data): array
    {
        $url = $this->apiUrl . EndpointEnums::CAMPAIGNS . '/' . $campaignId;
        return $this->connect(url: $url, method: MethodEnums::PUT, data: $data);
    }
}