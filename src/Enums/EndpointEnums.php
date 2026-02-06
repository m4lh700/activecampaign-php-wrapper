<?php 

namespace m4l700\AcPhpWrapper\Enums;

class EndpointEnums
{
    const API_VERSION = '3';

    const ADDRESSES = '/api/'.self::API_VERSION.'/addresses';
    const LISTS = '/api/'.self::API_VERSION.'/lists';
    const ACCOUNTS = '/api/'.self::API_VERSION.'/accounts';
    const CONTACTS = '/api/'.self::API_VERSION.'/contacts';
    const CONTACT_DATA = '/contactData';
    const CONTACT_LISTS = '/contactLists';
    const CONTACT_TAGS = '/contactTags';
    const CONTACT_LOGS = '/contactLogs';
    const CONTACT_FIELD_VALUES = '/fieldValues';
    const TEMPLATES = '/api/'.self::API_VERSION.'/templates';
    const TAGS = '/api/'.self::API_VERSION.'/tags';
    const BRANDING = '/api/'.self::API_VERSION.'/brandings';
    const ECOMMERCE_CUSTOMERS = '/api/'.self::API_VERSION.'/ecomCustomers';
    const CAMPAIGNS = '/api/'.self::API_VERSION.'/campaigns';
    const CAMPAIGNS_USER = '/user';
    const CAMPAIGNS_AUTOMATION = '/automation';
    const CAMPAIGNS_MESSAGES = '/campaignMessages';
    const CAMPAIGNS_MESSAGE = '/campaignMessage';
    const CAMPAIGNS_LINKS = '/links';
    const ECOMMERCE_ORDERS = '/api/'.self::API_VERSION.'/ecomOrders';
    const ECOMMERCE_CONNECTIONS = '/api/'.self::API_VERSION.'/connections';
}