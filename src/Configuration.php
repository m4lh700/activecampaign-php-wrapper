<?php

namespace m4l700\AcPhpWrapper;

use m4l700\AcPhpWrapper\Api\Accounts\Accounts;
use m4l700\AcPhpWrapper\Api\Addresses\Addresses;
use m4l700\AcPhpWrapper\Api\Branding\Branding;
use m4l700\AcPhpWrapper\Api\Campaigns\Campaigns;
use m4l700\AcPhpWrapper\Api\Lists\Lists;
use m4l700\AcPhpWrapper\Api\Contacts\Contacts;
use m4l700\AcPhpWrapper\Api\Templates\Templates;
use m4l700\AcPhpWrapper\Api\EcommerceCustomer\EcommerceCustomer;

/**
 * Configuration class for managing application settings, parameters and properties.
 *
 * This class handles the initialization and management of configuration
 * settings required for the AC PHP Wrapper.
 * 
 * @author David Holleman
 */
class Configuration {
    public string $apiUrl;
    public string $apiKey;
    public Addresses $addresses;
    public Lists $lists;
    public Contacts $contacts;
    public Accounts $accounts;
    public EcommerceCustomer $ecommerceCustomer;
    public Templates $templates;
    public Branding $branding;
    public Campaigns $campaigns;

    /**
     * @param string $apiUrl
     * @param string $apiKey
     */
    public function __construct(string $apiUrl, string $apiKey) {
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;

        $this->addresses = new Addresses($this);
        $this->lists = new Lists($this);
        $this->contacts = new Contacts($this);
        $this->accounts = new Accounts($this);
        $this->ecommerceCustomer = new EcommerceCustomer($this);
        $this->templates = new Templates($this);
        $this->branding = new Branding($this);
        $this->campaigns = new Campaigns($this);
    }
}