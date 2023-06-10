# PaymentLinkRequest


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    | Example                                                                        |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `bankId`                                                                       | *?int*                                                                         | :heavy_minus_sign:                                                             | N/A                                                                            |                                                                                |
| `callbackUrl`                                                                  | *?string*                                                                      | :heavy_minus_sign:                                                             | N/A                                                                            |                                                                                |
| `clientReference`                                                              | *?string*                                                                      | :heavy_minus_sign:                                                             | N/A                                                                            | ABCDE_FG-HI_12345                                                              |
| `country`                                                                      | [?PaymentLinkRequestCountry](../../models/shared/PaymentLinkRequestCountry.md) | :heavy_minus_sign:                                                             | N/A                                                                            |                                                                                |
| `expiredDate`                                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                  | :heavy_minus_sign:                                                             | N/A                                                                            | 2021-07-24T22:00:00.000Z                                                       |
| `transactions`                                                                 | array<[Transaction](../../models/shared/Transaction.md)>                       | :heavy_check_mark:                                                             | N/A                                                                            |                                                                                |
| `user`                                                                         | [User](../../models/shared/User.md)                                            | :heavy_check_mark:                                                             | N/A                                                                            |                                                                                |