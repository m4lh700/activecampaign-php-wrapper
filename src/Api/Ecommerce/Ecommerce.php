<?php

namespace m4l700\AcPhpWrapper\Api\Ecommerce;

use m4l700\AcPhpWrapper\Api\Api;
use m4l700\AcPhpWrapper\Api\Ecommerce\Connections\Connections;
use m4l700\AcPhpWrapper\Api\Ecommerce\Customers\Customers;
use m4l700\AcPhpWrapper\Api\Ecommerce\Orders\Orders;
use m4l700\AcPhpWrapper\Api\Ecommerce\Products\Products;

class Ecommerce extends Api
{
    public Customers $customers;
    public Connections $connections;
    public Orders $orders;
    public Products $products;

    public function __construct(object $config)
    {
        parent::__construct($config);
        $this->customers = new Customers($this);
        $this->connections = new Connections($this);
        $this->orders = new Orders($this);
        $this->products = new Products($this);
    }
}