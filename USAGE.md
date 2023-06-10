<!-- Start SDK Example Usage -->
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
    $request->bankId = 548814;
    $request->callbackUrl = 'provident';
    $request->clientReference = 'ABCDE_FG-HI_12345';
    $request->country = PaymentLinkRequestCountry::De;
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