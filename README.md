<div align="center">
    <picture>
        <source srcset="https://user-images.githubusercontent.com/6267663/232034887-48fd151e-8ba5-466f-99bf-8c67aeeec0de.png" media="(prefers-color-scheme: dark)" width="100">
        <img src="https://user-images.githubusercontent.com/6267663/232034887-48fd151e-8ba5-466f-99bf-8c67aeeec0de.png" width="100">
    </picture>
    <h1>Bridge PHP SDK</h1>
   <p>Leverage bank transfers and improve payment experience with Payment Links.</p>
   <a href="https://docs.bridgeapi.io/docs"><img src="https://img.shields.io/static/v1?label=Docs&message=API Ref&color=5444e4&style=for-the-badge" /></a>
   <a href="https://github.com/speakeasy-sdks/Bridgeapi-php/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/Bridgeapi-php/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge" /></a>
</div>

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/Bridgeapi-php.git"
        }
    ],
    "require": {
        "bridge/bridgeapi": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Bridge\Bridgeapi\SDK;
use \Bridge\Bridgeapi\Models\Shared\Security;
use \Bridge\Bridgeapi\Models\Shared\PaymentLinkRequest;
use \Bridge\Bridgeapi\Models\Shared\PaymentLinkRequestCountryEnum;
use \Bridge\Bridgeapi\Models\Shared\Transaction;
use \Bridge\Bridgeapi\Models\Shared\Beneficiary;
use \Bridge\Bridgeapi\Models\Shared\User;

$sdk = SDK::builder()
    ->build();

try {
    $request = new PaymentLinkRequest();
    $request->bankId = 548814;
    $request->callbackUrl = 'provident';
    $request->clientReference = 'ABCDE_FG-HI_12345';
    $request->country = PaymentLinkRequestCountryEnum::DE;
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
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [paymentLinks](docs/paymentlinks/README.md)

* [create](docs/paymentlinks/README.md#create) - Create a payment link
* [get](docs/paymentlinks/README.md#get) - Retrieve payment link information by ID
* [list](docs/paymentlinks/README.md#list) - Retrieve a list of payment links
* [revoke](docs/paymentlinks/README.md#revoke) - Revoke a payment link
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
