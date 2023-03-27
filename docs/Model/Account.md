# Account

## Properties
 Name                          | Type                          | Description                                                                                                                     | Notes      
-------------------------------|-------------------------------|---------------------------------------------------------------------------------------------------------------------------------|------------
 **handle**                    | **string**                    | Per organisation unique handle for the account                                                                                  |
 **currency**                  | **string**                    | Currency for the account in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code                          |
 **name**                      | **string**                    | Account name                                                                                                                    |
 **address**                   | **string**                    | Account address                                                                                                                 | [optional] 
 **address2**                  | **string**                    | Account address2                                                                                                                | [optional] 
 **city**                      | **string**                    | Account city                                                                                                                    | [optional] 
 **locale**                    | **string**                    | Account locale on the form &#x27;language_country&#x27;                                                                         |
 **timezone**                  | **string**                    | Account time zone ID as abbreviation or full name. See [Wikipedia](http://en.wikipedia.org/wiki/List_of_tz_database_time_zones) |
 **country**                   | **string**                    | Account country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)                                        |
 **email**                     | **string**                    | Account email                                                                                                                   | [optional] 
 **phone**                     | **string**                    | Account phone                                                                                                                   | [optional] 
 **vat**                       | **string**                    | Account vat number                                                                                                              | [optional] 
 **website**                   | **string**                    | Account website                                                                                                                 | [optional] 
 **logo**                      | **string**                    | Account logo url                                                                                                                | [optional] 
 **id**                        | **string**                    | Account id assigned by Reepay                                                                                                   |
 **organisation**              | **string**                    | Organisation by subdomain                                                                                                       |
 **created**                   | [**\DateTime**](\DateTime.md) | Date when the account was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.       |
 **state**                     | **string**                    | Status of the account one of the following &#x60;test&#x60;, &#x60;live&#x60;, &#x60;closed&#x60;.                              | 
 **postalCode**                | **string**                    | Account postal code                                                                                                             | [optional] 
 **defaultVat**                | **float**                     | Default vat for account                                                                                                         | 
 **subscriptionInvoicePrefix** | **string**                    |                                                                                                                                 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

