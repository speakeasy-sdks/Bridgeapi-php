# paymentLinks

## Overview

Payment Links API

### Available Operations

* [create](#create) - Create a payment link
* [get](#get) - Retrieve payment link information by ID
* [list](#list) - Retrieve a list of payment links
* [revoke](#revoke) - Revoke a payment link

## create

Create a payment link

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Bridge\Bridgeapi\SDK;
use \Bridge\Bridgeapi\Models\Shared\Security;
use \Bridge\Bridgeapi\Models\Shared\PaymentLinkRequest;
use \Bridge\Bridgeapi\Models\Shared\PaymentLinkRequestCountry;
use \Bridge\Bridgeapi\Models\Shared\Transaction;
use \Bridge\Bridgeapi\Models\Shared\Beneficiary;
use \Bridge\Bridgeapi\Models\Shared\User;

$sdk = SDK::builder()
    ->build();

try {
    $request = new PaymentLinkRequest();
    $request->bankId = 602763;
    $request->callbackUrl = 'nulla';
    $request->clientReference = 'ABCDE_FG-HI_12345';
    $request->country = PaymentLinkRequestCountry::DE;
    $request->expiredDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-24T22:00:00.000Z');
    $request->transactions = [
        new Transaction(),
        new Transaction(),
        new Transaction(),
        new Transaction(),
    ];
    $request->user = new User();
    $request->user->externalReference = 'REF-USER-1234_AZ';
    $request->user->firstName = 'Thomas';
    $request->user->lastName = 'Pichet';

    $response = $sdk->paymentLinks->create($request);

    if ($response->createPaymentLink200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## get

Returns the details of a payment link specified by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Bridge\Bridgeapi\SDK;
use \Bridge\Bridgeapi\Models\Shared\Security;
use \Bridge\Bridgeapi\Models\Operations\GetPaymentLinkRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetPaymentLinkRequest();
    $request->paymentLinkID = 'vel';

    $response = $sdk->paymentLinks->get($request);

    if ($response->paymentLinkResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## list

Retrieve a list of payment links

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Bridge\Bridgeapi\SDK;
use \Bridge\Bridgeapi\Models\Shared\Security;
use \Bridge\Bridgeapi\Models\Operations\ListPaymentLinksRequest;
use \Bridge\Bridgeapi\Models\Operations\ListPaymentLinksStatus;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListPaymentLinksRequest();
    $request->after = 'error';
    $request->limit = 645894;
    $request->since = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-25T06:44:09.184Z');
    $request->status = ListPaymentLinksStatus::COMPLETED;
    $request->until = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-30T21:34:57.850Z');

    $response = $sdk->paymentLinks->list($request);

    if ($response->paymentLinksResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## revoke

Revokes the payment link specified by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Bridge\Bridgeapi\SDK;
use \Bridge\Bridgeapi\Models\Shared\Security;
use \Bridge\Bridgeapi\Models\Operations\RevokePaymentLinkRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RevokePaymentLinkRequest();
    $request->paymentLinkID = 'delectus';

    $response = $sdk->paymentLinks->revoke($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
