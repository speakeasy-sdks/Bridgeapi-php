# PaymentLinkResponse

OK


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `clientReference`                                             | *?string*                                                     | :heavy_minus_sign:                                            | The client reference of the payment link.                     |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | The creation date and time of the payment link.               |
| `expiredAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | The expiration date and time of the payment link.             |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | The unique identifier of the payment link.                    |
| `link`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | The URL of the payment link.                                  |
| `status`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | The status of the payment link.                               |
| `transactions`                                                | array<[Transaction](../../models/shared/Transaction.md)>      | :heavy_minus_sign:                                            | The transactions associated with the payment link.            |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | The last update date and time of the payment link.            |
| `user`                                                        | [?User](../../models/shared/User.md)                          | :heavy_minus_sign:                                            | N/A                                                           |