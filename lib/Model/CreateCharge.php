<?php
/**
 * CreateCharge
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;
use \Reepay\ObjectSerializer;

/**
 * CreateCharge Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateCharge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handle' => 'string',
        'key' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'customer' => '\Reepay\Model\CreateCustomer',
        'metadata' => 'map[string,object]',
        'source' => 'string',
        'settle' => 'bool',
        'recurring' => 'bool',
        'parameters' => '\Reepay\Model\ChargeParameters',
        'ordertext' => 'string',
        'orderLines' => '\Reepay\Model\CreateOrderLine[]',
        'customerHandle' => 'string',
        'billingAddress' => '\Reepay\Model\InvoiceBillingAddress',
        'shippingAddress' => '\Reepay\Model\InvoiceShippingAddress',
        'usePmForSubscription' => 'bool',
        'textOnStatement' => 'string',
        'paymentMethodReference' => 'string',
        'async' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'handle' => null,
        'key' => null,
        'amount' => 'int32',
        'currency' => null,
        'customer' => null,
        'metadata' => null,
        'source' => null,
        'settle' => null,
        'recurring' => null,
        'parameters' => null,
        'ordertext' => null,
        'orderLines' => null,
        'customerHandle' => null,
        'billingAddress' => null,
        'shippingAddress' => null,
        'usePmForSubscription' => null,
        'textOnStatement' => null,
        'paymentMethodReference' => null,
        'async' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'handle' => 'handle',
        'key' => 'key',
        'amount' => 'amount',
        'currency' => 'currency',
        'customer' => 'customer',
        'metadata' => 'metadata',
        'source' => 'source',
        'settle' => 'settle',
        'recurring' => 'recurring',
        'parameters' => 'parameters',
        'ordertext' => 'ordertext',
        'orderLines' => 'order_lines',
        'customerHandle' => 'customer_handle',
        'billingAddress' => 'billing_address',
        'shippingAddress' => 'shipping_address',
        'usePmForSubscription' => 'use_pm_for_subscription',
        'textOnStatement' => 'text_on_statement',
        'paymentMethodReference' => 'payment_method_reference',
        'async' => 'async'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'handle' => 'setHandle',
        'key' => 'setKey',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'customer' => 'setCustomer',
        'metadata' => 'setMetadata',
        'source' => 'setSource',
        'settle' => 'setSettle',
        'recurring' => 'setRecurring',
        'parameters' => 'setParameters',
        'ordertext' => 'setOrdertext',
        'orderLines' => 'setOrderLines',
        'customerHandle' => 'setCustomerHandle',
        'billingAddress' => 'setBillingAddress',
        'shippingAddress' => 'setShippingAddress',
        'usePmForSubscription' => 'setUsePmForSubscription',
        'textOnStatement' => 'setTextOnStatement',
        'paymentMethodReference' => 'setPaymentMethodReference',
        'async' => 'setAsync'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'handle' => 'getHandle',
        'key' => 'getKey',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'customer' => 'getCustomer',
        'metadata' => 'getMetadata',
        'source' => 'getSource',
        'settle' => 'getSettle',
        'recurring' => 'getRecurring',
        'parameters' => 'getParameters',
        'ordertext' => 'getOrdertext',
        'orderLines' => 'getOrderLines',
        'customerHandle' => 'getCustomerHandle',
        'billingAddress' => 'getBillingAddress',
        'shippingAddress' => 'getShippingAddress',
        'usePmForSubscription' => 'getUsePmForSubscription',
        'textOnStatement' => 'getTextOnStatement',
        'paymentMethodReference' => 'getPaymentMethodReference',
        'async' => 'getAsync'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['settle'] = isset($data['settle']) ? $data['settle'] : null;
        $this->container['recurring'] = isset($data['recurring']) ? $data['recurring'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['ordertext'] = isset($data['ordertext']) ? $data['ordertext'] : null;
        $this->container['orderLines'] = isset($data['orderLines']) ? $data['orderLines'] : null;
        $this->container['customerHandle'] = isset($data['customerHandle']) ? $data['customerHandle'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['usePmForSubscription'] = isset($data['usePmForSubscription']) ? $data['usePmForSubscription'] : null;
        $this->container['textOnStatement'] = isset($data['textOnStatement']) ? $data['textOnStatement'] : null;
        $this->container['paymentMethodReference'] = isset($data['paymentMethodReference']) ? $data['paymentMethodReference'] : null;
        $this->container['async'] = isset($data['async']) ? $data['async'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['handle'] === null) {
            $invalidProperties[] = "'handle' can't be null";
        }
        if (!is_null($this->container['amount']) && ($this->container['amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
        }

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if (!is_null($this->container['textOnStatement']) && !preg_match("/^[\\x20-\\x7F]*$/", $this->container['textOnStatement'])) {
            $invalidProperties[] = "invalid value for 'textOnStatement', must be conform to the pattern /^[\\x20-\\x7F]*$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets handle
     *
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     *
     * @param string $handle Per account unique reference to charge/invoice. E.g. order id from own system. Multiple payments can be attempted for the same handle but only one authorized or settled charge can exist per handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. It is recommended to use a maximum of 20 characters as this will allow for the use of handle as reference on bank statements without truncation.
     *
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key Optional idempotency key. Only one authorization or settle can be performed for the same handle. If two create attempts are attempted and the first succeeds the second will fail because charge is already settled or authorized. An idempotency key identifies uniquely the request and multiple requests with the same key and handle will yield the same result. In case of networking errors the same request with same key can safely be retried.
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Amount in the smallest unit. Either `amount` or `order_lines` must be provided if charge/invoice does not already exists.
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateCharge., must be bigger than or equal to 1.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Optional currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code. If not provided the account default currency will be used. The currency of an existing charge or invoice cannot be changed.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Reepay\Model\CreateCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Reepay\Model\CreateCustomer $customer Optional create customer object. An alternative to using a reference to an already created customer either by the `customer_handle` parameter or implicitly given if using a saved payment method as source. If this object is provided and the customer already exists, the existing customer will be used. Notice that customer cannot be changed for existing charge/invoice so if handle is provided it must match the customer handle for existing customer.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,object]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,object] $metadata Custom metadata.
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source The source for the payment. Either an existing payment method for the customer or a card token `ct_...`. The existing payment method can either be referenced directly with id, e.g. `ca_...`, or the keyword `auto` can be given to indicate that the newest active customer payment method should be used.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets settle
     *
     * @return bool
     */
    public function getSettle()
    {
        return $this->container['settle'];
    }

    /**
     * Sets settle
     *
     * @param bool $settle Whether or not to immediately settle the charge. If not settled immediately the charge will be authorized and can later be settled. Normally this have to be done within 7 days. The default is not to settle the charge immediately.
     *
     * @return $this
     */
    public function setSettle($settle)
    {
        $this->container['settle'] = $settle;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return bool
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param bool $recurring If set and the source is a token for a payment method that supports recurring charging (e.g. credit card), a recurring payment method is stored for the customer and a reference returned.
     *
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Reepay\Model\ChargeParameters
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Reepay\Model\ChargeParameters $parameters Extra optional parameters that may be added for specific payment methods.
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets ordertext
     *
     * @return string
     */
    public function getOrdertext()
    {
        return $this->container['ordertext'];
    }

    /**
     * Sets ordertext
     *
     * @param string $ordertext Optional order text. Used in conjunction with `amount`. Ignored if `order_lines` is provided.
     *
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        $this->container['ordertext'] = $ordertext;

        return $this;
    }

    /**
     * Gets orderLines
     *
     * @return \Reepay\Model\CreateOrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['orderLines'];
    }

    /**
     * Sets orderLines
     *
     * @param \Reepay\Model\CreateOrderLine[] $orderLines Order lines for the charge. The order lines controls the amount. Only required if charge/invoice does not already exist. If given for existing charge the order lines and amount are adjusted.
     *
     * @return $this
     */
    public function setOrderLines($orderLines)
    {
        $this->container['orderLines'] = $orderLines;

        return $this;
    }

    /**
     * Gets customerHandle
     *
     * @return string
     */
    public function getCustomerHandle()
    {
        return $this->container['customerHandle'];
    }

    /**
     * Sets customerHandle
     *
     * @param string $customerHandle Customer reference. If charge does not already exist either this reference must be provided, a create customer object must be provided or the source must be a payment method reference (e.g. `ca_..`) identifying customer. Notice that customer cannot be changed for existing charge/invoice so if handle is provided it must match the customer handle for existing customer.
     *
     * @return $this
     */
    public function setCustomerHandle($customerHandle)
    {
        $this->container['customerHandle'] = $customerHandle;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \Reepay\Model\InvoiceBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \Reepay\Model\InvoiceBillingAddress $billingAddress Optional billing address
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \Reepay\Model\InvoiceShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \Reepay\Model\InvoiceShippingAddress $shippingAddress Optional shipping address
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets usePmForSubscription
     *
     * @return bool
     */
    public function getUsePmForSubscription()
    {
        return $this->container['usePmForSubscription'];
    }

    /**
     * Sets usePmForSubscription
     *
     * @param bool $usePmForSubscription When used with a subscription invoice the subscription payment method will be updated. If the subscription is pending the subscription will be activated with the payment method. The recurring argument is set to true.
     *
     * @return $this
     */
    public function setUsePmForSubscription($usePmForSubscription)
    {
        $this->container['usePmForSubscription'] = $usePmForSubscription;

        return $this;
    }

    /**
     * Gets textOnStatement
     *
     * @return string
     */
    public function getTextOnStatement()
    {
        return $this->container['textOnStatement'];
    }

    /**
     * Sets textOnStatement
     *
     * @param string $textOnStatement Optional argument to define the text on bank statement. Notice the following about this argument: 1. It only works for some acquirers. 2. Acquirers may have rigid rules on the content of the text on statement. Not complying to these rules will result in declined payments. 3) It is already possible to define custom text on statement using templating in the Reepay Administration. Contact support for help. We highly recommend to only supply this argument if absolutely necessary, and the templated default text on statement is not sufficient. Maximum length is 128, but most acquirers require a maximum length of 22 characters. Truncating will be applied if too long for specific acquirer. Characters must match regex `[\\x20-\\x7F]`
     *
     * @return $this
     */
    public function setTextOnStatement($textOnStatement)
    {

        if (!is_null($textOnStatement) && (!preg_match("/^[\\x20-\\x7F]*$/", $textOnStatement))) {
            throw new \InvalidArgumentException("invalid value for $textOnStatement when calling CreateCharge., must conform to the pattern /^[\\x20-\\x7F]*$/.");
        }

        $this->container['textOnStatement'] = $textOnStatement;

        return $this;
    }

    /**
     * Gets paymentMethodReference
     *
     * @return string
     */
    public function getPaymentMethodReference()
    {
        return $this->container['paymentMethodReference'];
    }

    /**
     * Sets paymentMethodReference
     *
     * @param string $paymentMethodReference Optional reference given to the created payment method in case recurring argument is used to save payment method. Max length 64 with allowable characters [a-zA-Z0-9_.-@].
     *
     * @return $this
     */
    public function setPaymentMethodReference($paymentMethodReference)
    {
        $this->container['paymentMethodReference'] = $paymentMethodReference;

        return $this;
    }

    /**
     * Gets async
     *
     * @return bool
     */
    public function getAsync()
    {
        return $this->container['async'];
    }

    /**
     * Sets async
     *
     * @param bool $async For payment methods that supports both synchronous and asynchronous handling this parameter can be used force a specific handling. Asynchronous handling means that a pending state will be returned. The subsequent state change can be registered by using webhooks. The default depends on the payment method.
     *
     * @return $this
     */
    public function setAsync($async)
    {
        $this->container['async'] = $async;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


