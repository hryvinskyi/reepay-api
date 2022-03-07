<?php
/**
 * PrepareChargeDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;

/**
 * PrepareChargeDto Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PrepareChargeDto implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PrepareChargeDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'handle' => 'string',
        'key' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'customer' => '\Reepay\Model\CreateCustomer',
        'metadata' => 'map[string,object]',
        'ordertext' => 'string',
        'order_lines' => '\Reepay\Model\CreateOrderLine[]',
        'customer_handle' => 'string',
        'billing_address' => '\Reepay\Model\InvoiceBillingAddress',
        'shipping_address' => '\Reepay\Model\InvoiceShippingAddress'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'handle' => 'handle',
        'key' => 'key',
        'amount' => 'amount',
        'currency' => 'currency',
        'customer' => 'customer',
        'metadata' => 'metadata',
        'ordertext' => 'ordertext',
        'order_lines' => 'order_lines',
        'customer_handle' => 'customer_handle',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'handle' => 'setHandle',
        'key' => 'setKey',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'customer' => 'setCustomer',
        'metadata' => 'setMetadata',
        'ordertext' => 'setOrdertext',
        'order_lines' => 'setOrderLines',
        'customer_handle' => 'setCustomerHandle',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'handle' => 'getHandle',
        'key' => 'getKey',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'customer' => 'getCustomer',
        'metadata' => 'getMetadata',
        'ordertext' => 'getOrdertext',
        'order_lines' => 'getOrderLines',
        'customer_handle' => 'getCustomerHandle',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['ordertext'] = isset($data['ordertext']) ? $data['ordertext'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['customer_handle'] = isset($data['customer_handle']) ? $data['customer_handle'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if (!is_null($this->container['amount']) && ($this->container['amount'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 1.0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['amount'] < 1.0) {
            return false;
        }
        return true;
    }


    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique reference to charge/invoice. E.g. order id from own system. Multiple payments can be attempted for the same handle but only one authorized or settled charge can exist per handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. It is recommended to use a maximum of 20 characters as this will allow for the use of handle as reference on bank statements without truncation.
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key Optional idempotency key. Only one authorization or settle can be performed for the same handle. If two create attempts are attempted and the first succeeds the second will fail because charge is already settled or authorized. An idempotency key identifies uniquely the request and multiple requests with the same key and handle will yield the same result. In case of networking errors the same request with same key can safely be retried.
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Amount in the smallest unit. Either `amount` or `order_lines` must be provided if charge/invoice does not already exists.
     * @return $this
     */
    public function setAmount($amount)
    {

        if ($amount < 1.0) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PrepareChargeDto., must be bigger than or equal to 1.0.');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Optional currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code. If not provided the account default currency will be used. The currency of an existing charge or invoice cannot be changed.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customer
     * @return \Reepay\Model\CreateCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Reepay\Model\CreateCustomer $customer Optional create customer object. An alternative to using a reference to an already created customer either by the `customer_handle` parameter or implicitly given if using a saved payment method as source. If this object is provided and the customer already exists, the existing customer will be used. Notice that customer cannot be changed for existing charge/invoice so if handle is provided it must match the customer handle for existing customer.
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets metadata
     * @return map[string,object]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param map[string,object] $metadata Custom metadata.
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets ordertext
     * @return string
     */
    public function getOrdertext()
    {
        return $this->container['ordertext'];
    }

    /**
     * Sets ordertext
     * @param string $ordertext Optional order text. Used in conjunction with `amount`. Ignored if `order_lines` is provided.
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        $this->container['ordertext'] = $ordertext;

        return $this;
    }

    /**
     * Gets order_lines
     * @return \Reepay\Model\CreateOrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     * @param \Reepay\Model\CreateOrderLine[] $order_lines Order lines for the charge. The order lines controls the amount. Only required if charge/invoice does not already exist. If given for existing charge the order lines and amount are adjusted.
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets customer_handle
     * @return string
     */
    public function getCustomerHandle()
    {
        return $this->container['customer_handle'];
    }

    /**
     * Sets customer_handle
     * @param string $customer_handle Customer reference. If charge does not already exist either this reference must be provided, a create customer object must be provided or the source must be a payment method reference (e.g. `ca_..`) identifying customer. Notice that customer cannot be changed for existing charge/invoice so if handle is provided it must match the customer handle for existing customer.
     * @return $this
     */
    public function setCustomerHandle($customer_handle)
    {
        $this->container['customer_handle'] = $customer_handle;

        return $this;
    }

    /**
     * Gets billing_address
     * @return \Reepay\Model\InvoiceBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     * @param \Reepay\Model\InvoiceBillingAddress $billing_address Optional billing address
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     * @return \Reepay\Model\InvoiceShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     * @param \Reepay\Model\InvoiceShippingAddress $shipping_address Optional shipping address
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


