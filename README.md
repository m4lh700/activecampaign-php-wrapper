# AC PHP Wrapper

A simple PHP wrapper for the ActiveCampaign API v3.

## Requirements

- PHP 7.4 or higher
- cURL extension enabled

## Installation

Install via Composer:

```bash
composer require m4l700/ac-php-wrapper
```

## Usage

### Initialize the client

```php
use m4l700\AcPhpWrapper\ApiClient;

$client = new ApiClient(
    apiUrl: 'https://youraccountname.api-us1.com',
    apiKey: 'your-api-key-here'
);
```

You can find your API URL and API key in your ActiveCampaign account under Settings > Developer.

### Available Methods

#### Accounts

```php
// Get all accounts
$accounts = $client->accounts->get();

// Get a single account by ID
$account = $client->accounts->getById(12345);

// Create a new account
$account = $client->accounts->create(data: [
    'account' => [
        'name' => 'Account Name',
        'accountUrl' => 'https://example.com'
    ]
]);
```

#### Contacts

```php
// Get all contacts
$contacts = $client->contacts->get();

// Get a single contact by ID
$contact = $client->contacts->getById(12345);

// Create a new contact
$contact = $client->contacts->create(data: [
    'contact' => [
        'email' => 'john@example.com',
        'firstName' => 'John',
        'lastName' => 'Doe',
        'phone' => '555-555-5555'
    ]
]);
```

#### Lists

```php
// Get all lists
$lists = $client->lists->get();

// Create a new list
$list = $client->lists->create(data: [
    'list' => [
        'name' => 'My List',
        'stringid' => 'my-list',
        'sender_url' => 'https://example.com',
        'sender_reminder' => 'You signed up for this list.'
    ]
]);
```

#### Addresses

```php
// Create a new address
$address = $client->addresses->create();
```

#### Ecommerce

##### Connections

```php
// Get all connections
$connections = $client->ecommerce->connections->get();

// Get a single connection by ID
$connection = $client->ecommerce->connections->getById(12345);

// Create a new connection
$connection = $client->ecommerce->connections->create(
    service: 'shopify',
    externalId: 'store-123',
    name: 'My Store',
    logoUrl: 'https://example.com/logo.png',
    linkUrl: 'https://example.com'
);

// Update a connection
$connection = $client->ecommerce->connections->update(12345, [
    'connection' => [
        'name' => 'Updated Store Name'
    ]
]);

// Delete a connection
$client->ecommerce->connections->delete(12345);
```

##### Customers

```php
// Get all customers
$customers = $client->ecommerce->customers->get();

// Get a single customer by ID
$customer = $client->ecommerce->customers->getById(12345);

// Create a new customer
$customer = $client->ecommerce->customers->create(
    connectionId: 1,
    externalId: 456,
    email: 'customer@example.com',
    acceptsMarketing: true
);

// Update a customer
$customer = $client->ecommerce->customers->update(12345, [
    'ecomCustomer' => [
        'email' => 'newemail@example.com'
    ]
]);

// Delete a customer
$client->ecommerce->customers->delete(12345);
```

##### Orders

```php
// Get a single order by ID
$order = $client->ecommerce->orders->getById(12345);

// Create a new order
$order = $client->ecommerce->orders->create([
    'ecomOrder' => [
        'externalid' => 'order-123',
        'source' => 1,
        'email' => 'customer@example.com',
        'totalPrice' => 10000,
        'currency' => 'USD',
        'connectionid' => 1,
        'customerid' => 1
    ]
]);

// Update an order
$order = $client->ecommerce->orders->update(12345, [
    'ecomOrder' => [
        'totalPrice' => 15000
    ]
]);

// Delete an order
$client->ecommerce->orders->delete(12345);

// Create an abandoned cart
$cart = $client->ecommerce->orders->createAbandonedCart([
    'ecomOrder' => [
        'externalcheckoutid' => 'cart-123',
        'abandoned_date' => '2024-01-15T10:00:00-05:00',
        'email' => 'customer@example.com',
        'connectionid' => 1,
        'customerid' => 1
    ]
]);
```

##### Products

```php
// Get all products
$products = $client->ecommerce->products->get();

// Get a single product by ID
$product = $client->ecommerce->products->getById(12345);
```

#### Automations

```php
// Get all automations
$automations = $client->automations->get();

// Get a single automation by ID
$automation = $client->automations->getById(12345);
```

#### Forms

```php
// Get all forms
$forms = $client->forms->get();

// Get a single form by ID
$form = $client->forms->getById(12345);

// Update a form
$form = $client->forms->update(12345, [
    'form' => [
        'name' => 'Updated Form Name'
    ]
]);

// Delete a form
$client->forms->delete(12345);
```

#### Messages

```php
// Get all messages
$messages = $client->messages->get();

// Get a single message by ID
$message = $client->messages->getById(12345);

// Create a new message
$message = $client->messages->create([
    'message' => [
        'name' => 'My Email',
        'fromname' => 'John Doe',
        'fromemail' => 'john@example.com',
        'subject' => 'Hello!',
        'html' => '<p>Email content here</p>'
    ]
]);

// Update a message
$message = $client->messages->update(12345, [
    'message' => [
        'subject' => 'Updated Subject'
    ]
]);

// Delete a message
$client->messages->delete(12345);
```

## API Reference

### Accounts

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all accounts |
| `getById(int $accountId)` | `$accountId` - Account ID | Retrieve a single account |
| `create(array $data)` | `$data` - Account data array | Create a new account |

### Contacts

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all contacts |
| `getById(int $contactId)` | `$contactId` - Contact ID | Retrieve a single contact |
| `create(array $data)` | `$data` - Contact data array | Create a new contact |

### Lists

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all lists |
| `create(array $data)` | `$data` - List data array | Create a new list |

### Addresses

| Method | Parameters | Description |
|--------|------------|-------------|
| `create()` | none | Create a new address |

### Ecommerce

#### Connections (`$client->ecommerce->connections`)

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all connections |
| `getById(int $connectionId)` | `$connectionId` - Connection ID | Retrieve a single connection |
| `create(string $service, string $externalId, string $name, string $logoUrl, string $linkUrl)` | `$service` - Service name, `$externalId` - External ID, `$name` - Connection name, `$logoUrl` - Logo URL, `$linkUrl` - Link URL | Create a new connection |
| `update(int $connectionId, array $data)` | `$connectionId` - Connection ID, `$data` - Connection data array | Update a connection |
| `delete(int $connectionId)` | `$connectionId` - Connection ID | Delete a connection |

#### Customers (`$client->ecommerce->customers`)

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all customers |
| `getById(int $customerId)` | `$customerId` - Customer ID | Retrieve a single customer |
| `create(int $connectionId, int $externalId, string $email, bool $acceptsMarketing)` | `$connectionId` - Connection ID, `$externalId` - External ID, `$email` - Email address, `$acceptsMarketing` - Marketing opt-in (default: true) | Create a new customer |
| `update(int $customerId, array $data)` | `$customerId` - Customer ID, `$data` - Customer data array | Update a customer |
| `delete(int $customerId)` | `$customerId` - Customer ID | Delete a customer |

#### Orders (`$client->ecommerce->orders`)

| Method | Parameters | Description |
|--------|------------|-------------|
| `getById(int $orderId)` | `$orderId` - Order ID | Retrieve a single order |
| `create(array $data)` | `$data` - Order data array | Create a new order |
| `update(int $orderId, array $data)` | `$orderId` - Order ID, `$data` - Order data array | Update an order |
| `delete(int $orderId)` | `$orderId` - Order ID | Delete an order |
| `createAbandonedCart(array $data)` | `$data` - Cart data array (requires `externalcheckoutid`, `abandoned_date`) | Create an abandoned cart |

#### Products (`$client->ecommerce->products`)

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all products |
| `getById(int $productId)` | `$productId` - Product ID | Retrieve a single product |

### Automations

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all automations |
| `getById(int $automationId)` | `$automationId` - Automation ID | Retrieve a single automation |

### Forms

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all forms |
| `getById(int $formId)` | `$formId` - Form ID | Retrieve a single form |
| `update(int $formId, array $data)` | `$formId` - Form ID, `$data` - Form data array | Update a form |
| `delete(int $formId)` | `$formId` - Form ID | Delete a form |

### Messages

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all messages |
| `getById(int $messageId)` | `$messageId` - Message ID | Retrieve a single message |
| `create(array $data)` | `$data` - Message data array | Create a new message |
| `update(int $messageId, array $data)` | `$messageId` - Message ID, `$data` - Message data array | Update a message |
| `delete(int $messageId)` | `$messageId` - Message ID | Delete a message |

## License

MIT License
