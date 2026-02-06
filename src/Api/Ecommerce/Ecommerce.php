<?php

namespace m4l700\AcPhpWrapper\Api\Ecommerce;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Api\Ecommerce\EcommerceConnections\EcommerceConnections;
use m4l700\AcPhpWrapper\Api\Ecommerce\EcommerceCustomers\EcommerceCustomers;
use m4l700\AcPhpWrapper\Api\Ecommerce\EcommerceOrders\EcommerceOrders;

class Ecommerce extends Api
{
    public EcommerceCustomers $customers;
    public EcommerceConnections $connections;
    public EcommerceOrders $orders;

    public function __construct(object $config)
    {
        parent::__construct($config);
        $this->customers = new EcommerceCustomers($this);
        $this->connections = new EcommerceConnections($this);
        $this->orders = new EcommerceOrders($this);
    }
}