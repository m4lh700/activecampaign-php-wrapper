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
$accounts = $client->accounts->getAccounts();

// Get a single account by ID
$account = $client->accounts->getAccount(accountId: 1);

// Create a new account
$account = $client->accounts->createAccount(data: [
    'account' => [
        'name' => 'Account Name',
        'accountUrl' => 'https://example.com'
    ]
]);
```

#### Contacts

```php
// Get all contacts
$contacts = $client->contacts->getContacts();

// Get a single contact by ID
$contact = $client->contacts->getContact(contactId: 1);

// Create a new contact
$contact = $client->contacts->createContact(data: [
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
$lists = $client->lists->getLists();

// Create a new list
$list = $client->lists->createList(data: [
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
$address = $client->addresses->createAddress();
```

## API Reference

### Accounts

| Method | Parameters | Description |
|--------|------------|-------------|
| `getAccounts()` | none | Retrieve all accounts |
| `getAccount(int $accountId)` | `$accountId` - Account ID | Retrieve a single account |
| `createAccount(array $data)` | `$data` - Account data array | Create a new account |

### Contacts

| Method | Parameters | Description |
|--------|------------|-------------|
| `getContacts()` | none | Retrieve all contacts |
| `getContact(int $contactId)` | `$contactId` - Contact ID | Retrieve a single contact |
| `createContact(array $data)` | `$data` - Contact data array | Create a new contact |

### Lists

| Method | Parameters | Description |
|--------|------------|-------------|
| `getLists()` | none | Retrieve all lists |
| `createList(array $data)` | `$data` - List data array | Create a new list |

### Addresses

| Method | Parameters | Description |
|--------|------------|-------------|
| `createAddress()` | none | Create a new address |

## License

MIT License
