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
$account = $client->accounts->create([
    'account' => [
        'name' => 'Account Name',
        'accountUrl' => 'https://example.com'
    ]
]);

// Update an account
$account = $client->accounts->update(12345, [
    'account' => [
        'name' => 'Updated Name'
    ]
]);

// Delete an account
$client->accounts->delete(12345);
```

#### Addresses

```php
// Get all addresses
$addresses = $client->addresses->get();

// Get a single address by ID
$address = $client->addresses->getById(12345);

// Create a new address
$address = $client->addresses->create([
    'address' => [
        'address1' => '123 Main St',
        'city' => 'Chicago',
        'state' => 'IL',
        'zip' => '60601',
        'country' => 'US',
        'companyName' => 'My Company'
    ]
]);

// Update an address
$address = $client->addresses->update(12345, [
    'address' => [
        'city' => 'New York'
    ]
]);

// Delete an address
$client->addresses->delete(12345);
```

#### Automations

```php
// Get all automations
$automations = $client->automations->get();

// Get a single automation by ID
$automation = $client->automations->getById(12345);
```

#### Branding

```php
// Get all brandings
$brandings = $client->branding->get();

// Get a single branding by ID
$branding = $client->branding->getById(12345);

// Update a branding
$branding = $client->branding->update(12345, [
    'branding' => [
        'name' => 'My Brand'
    ]
]);
```

#### Campaigns

```php
// Get all campaigns
$campaigns = $client->campaigns->get();

// Get a single campaign by ID
$campaign = $client->campaigns->getById(12345);

// Get campaigns by user
$campaigns = $client->campaigns->getCampaignsByUser(1);

// Get users for a campaign
$users = $client->campaigns->getCampaignUsers(12345);

// Get automations for a campaign
$automations = $client->campaigns->getCampaignAutomations(12345);

// Get messages for a campaign
$messages = $client->campaigns->getCampaignMessages(12345);

// Get a single message for a campaign
$message = $client->campaigns->getCampaignMessage(12345);

// Get links for a campaign
$links = $client->campaigns->getCampaignLinks(12345);

// Create a campaign
$campaign = $client->campaigns->create([
    'campaign' => [
        'type' => 'single',
        'name' => 'My Campaign',
        'status' => 0
    ]
]);

// Update a campaign
$campaign = $client->campaigns->update(12345, [
    'campaign' => [
        'name' => 'Updated Campaign Name'
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
$contact = $client->contacts->create([
    'contact' => [
        'email' => 'john@example.com',
        'firstName' => 'John',
        'lastName' => 'Doe',
        'phone' => '555-555-5555'
    ]
]);

// Update a contact
$contact = $client->contacts->update(12345, [
    'contact' => [
        'firstName' => 'Jane'
    ]
]);

// Delete a contact
$client->contacts->delete(12345);

// Get contact data
$data = $client->contacts->getContactData(12345);

// Get contact tags
$tags = $client->contacts->getContactTags(12345);

// Add a tag to a contact
$client->contacts->createContactTag(contactId: 12345, tagId: 67);

// Remove a tag from a contact
$client->contacts->deleteContactTag(contactId: 12345, tagId: 67);

// Get contact lists
$lists = $client->contacts->getContactLists(12345);

// Add a contact to a list
$client->contacts->addContactToList(contactId: 12345, listId: 1);

// Get contact activity logs
$logs = $client->contacts->getContactLogs(12345);

// Get contact field values
$fieldValues = $client->contacts->getContactFieldValues(12345);
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

#### Lists

```php
// Get all lists
$lists = $client->lists->get();

// Create a new list
$list = $client->lists->create([
    'list' => [
        'name' => 'My List',
        'stringid' => 'my-list',
        'sender_url' => 'https://example.com',
        'sender_reminder' => 'You signed up for this list.'
    ]
]);
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

#### Tags

```php
// Get all tags
$tags = $client->tags->get();

// Get a single tag by ID
$tag = $client->tags->getById(12345);

// Create a tag
$tag = $client->tags->create([
    'tag' => [
        'tag' => 'my-tag',
        'tagType' => 'contact',
        'description' => 'My tag description'
    ]
]);

// Update a tag
$tag = $client->tags->update(12345, [
    'tag' => [
        'tag' => 'updated-tag-name'
    ]
]);

// Delete a tag
$client->tags->deleteTag(12345);

// Add a tag to a contact
$client->tags->addTagToContact(contactId: 12345, tagId: 67);
```

#### Templates

```php
// Get a single template by ID
$template = $client->templates->getById(12345);
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

---

## API Reference

### Accounts

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all accounts |
| `getById(int $accountId)` | `$accountId` | Retrieve a single account |
| `create(array $data)` | `$data` | Create a new account |
| `update(int $accountId, array $data)` | `$accountId`, `$data` | Update an account |
| `delete(int $accountId)` | `$accountId` | Delete an account |

### Addresses

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all addresses |
| `getById(int $addressId)` | `$addressId` | Retrieve a single address |
| `create(array $data)` | `$data` | Create a new address |
| `update(int $addressId, array $data)` | `$addressId`, `$data` | Update an address |
| `delete(int $addressId)` | `$addressId` | Delete an address |

### Automations

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all automations |
| `getById(int $automationId)` | `$automationId` | Retrieve a single automation |

### Branding

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all brandings |
| `getById(int $brandingId)` | `$brandingId` | Retrieve a single branding |
| `update(int $brandingId, array $data)` | `$brandingId`, `$data` | Update a branding |

### Campaigns

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all campaigns |
| `getById(int $campaignId)` | `$campaignId` | Retrieve a single campaign |
| `getCampaignsByUser(int $userId)` | `$userId` | Retrieve campaigns by user |
| `getCampaignUsers(int $campaignId)` | `$campaignId` | Retrieve users for a campaign |
| `getCampaignAutomations(int $campaignId)` | `$campaignId` | Retrieve automations for a campaign |
| `getCampaignMessages(int $campaignId)` | `$campaignId` | Retrieve messages for a campaign |
| `getCampaignMessage(int $campaignId)` | `$campaignId` | Retrieve a single message for a campaign |
| `getCampaignLinks(int $campaignId)` | `$campaignId` | Retrieve links for a campaign |
| `create(array $data)` | `$data` | Create a new campaign |
| `update(int $campaignId, array $data)` | `$campaignId`, `$data` | Update a campaign |

### Contacts

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all contacts |
| `getById(int $contactId)` | `$contactId` | Retrieve a single contact |
| `create(array $data)` | `$data` | Create a new contact |
| `update(int $contactId, array $data)` | `$contactId`, `$data` | Update a contact |
| `delete(int $contactId)` | `$contactId` | Delete a contact |
| `getContactData(int $contactId)` | `$contactId` | Retrieve contact data |
| `getContactTags(int $contactId)` | `$contactId` | Retrieve tags for a contact |
| `createContactTag(int $contactId, int $tagId)` | `$contactId`, `$tagId` | Add a tag to a contact |
| `deleteContactTag(int $contactId, int $tagId)` | `$contactId`, `$tagId` | Remove a tag from a contact |
| `getContactLists(int $contactId)` | `$contactId` | Retrieve lists for a contact |
| `addContactToList(int $contactId, int $listId)` | `$contactId`, `$listId` | Subscribe a contact to a list |
| `getContactLogs(int $contactId)` | `$contactId` | Retrieve activity logs for a contact |
| `getContactFieldValues(int $contactId)` | `$contactId` | Retrieve custom field values for a contact |

### Forms

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all forms |
| `getById(int $formId)` | `$formId` | Retrieve a single form |
| `update(int $formId, array $data)` | `$formId`, `$data` | Update a form |
| `delete(int $formId)` | `$formId` | Delete a form |

### Lists

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all lists |
| `create(array $data)` | `$data` | Create a new list |

### Messages

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all messages |
| `getById(int $messageId)` | `$messageId` | Retrieve a single message |
| `create(array $data)` | `$data` | Create a new message |
| `update(int $messageId, array $data)` | `$messageId`, `$data` | Update a message |
| `delete(int $messageId)` | `$messageId` | Delete a message |

### Tags

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all tags |
| `getById(int $tagId)` | `$tagId` | Retrieve a single tag |
| `create(array $data)` | `$data` | Create a new tag |
| `update(int $tagId, array $data)` | `$tagId`, `$data` | Update a tag |
| `deleteTag(int $tagId)` | `$tagId` | Delete a tag |
| `addTagToContact(int $contactId, int $tagId)` | `$contactId`, `$tagId` | Add a tag to a contact |

### Templates

| Method | Parameters | Description |
|--------|------------|-------------|
| `getById(int $templateId)` | `$templateId` | Retrieve a single template |

### Ecommerce — Connections (`$client->ecommerce->connections`)

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all connections |
| `getById(int $connectionId)` | `$connectionId` | Retrieve a single connection |
| `create(string $service, string $externalId, string $name, string $logoUrl, string $linkUrl)` | `$service`, `$externalId`, `$name`, `$logoUrl`, `$linkUrl` | Create a new connection |
| `update(int $connectionId, array $data)` | `$connectionId`, `$data` | Update a connection |
| `delete(int $connectionId)` | `$connectionId` | Delete a connection |

### Ecommerce — Customers (`$client->ecommerce->customers`)

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all customers |
| `getById(int $customerId)` | `$customerId` | Retrieve a single customer |
| `create(int $connectionId, int $externalId, string $email, bool $acceptsMarketing)` | `$connectionId`, `$externalId`, `$email`, `$acceptsMarketing` (default: `true`) | Create a new customer |
| `update(int $customerId, array $data)` | `$customerId`, `$data` | Update a customer |
| `delete(int $customerId)` | `$customerId` | Delete a customer |

### Ecommerce — Orders (`$client->ecommerce->orders`)

| Method | Parameters | Description |
|--------|------------|-------------|
| `getById(int $orderId)` | `$orderId` | Retrieve a single order |
| `create(array $data)` | `$data` | Create a new order |
| `update(int $orderId, array $data)` | `$orderId`, `$data` | Update an order |
| `delete(int $orderId)` | `$orderId` | Delete an order |
| `createAbandonedCart(array $data)` | `$data` (requires `externalcheckoutid`, `abandoned_date`) | Create an abandoned cart |

### Ecommerce — Products (`$client->ecommerce->products`)

| Method | Parameters | Description |
|--------|------------|-------------|
| `get()` | none | Retrieve all products |
| `getById(int $productId)` | `$productId` | Retrieve a single product |

## License

MIT License
