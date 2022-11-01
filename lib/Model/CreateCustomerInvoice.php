<?php
/**
 * CreateCustomerInvoice
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
 * CreateCustomerInvoice Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateCustomerInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateCustomerInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handle' => 'string',
        'settle' => '\Reepay\Model\Settle',
        'metadata' => 'map[string,object]',
        'orderLines' => '\Reepay\Model\CreateOrderLine[]',
        'manualTransfer' => '\Reepay\Model\ManualSettleTransfer',
        'billingAddress' => '\Reepay\Model\InvoiceBillingAddress',
        'shippingAddress' => '\Reepay\Model\InvoiceShippingAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'handle' => null,
        'settle' => null,
        'metadata' => null,
        'orderLines' => null,
        'manualTransfer' => null,
        'billingAddress' => null,
        'shippingAddress' => null
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
        'settle' => 'settle',
        'metadata' => 'metadata',
        'orderLines' => 'order_lines',
        'manualTransfer' => 'manual_transfer',
        'billingAddress' => 'billing_address',
        'shippingAddress' => 'shipping_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'handle' => 'setHandle',
        'settle' => 'setSettle',
        'metadata' => 'setMetadata',
        'orderLines' => 'setOrderLines',
        'manualTransfer' => 'setManualTransfer',
        'billingAddress' => 'setBillingAddress',
        'shippingAddress' => 'setShippingAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'handle' => 'getHandle',
        'settle' => 'getSettle',
        'metadata' => 'getMetadata',
        'orderLines' => 'getOrderLines',
        'manualTransfer' => 'getManualTransfer',
        'billingAddress' => 'getBillingAddress',
        'shippingAddress' => 'getShippingAddress'
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
        $this->container['settle'] = isset($data['settle']) ? $data['settle'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['orderLines'] = isset($data['orderLines']) ? $data['orderLines'] : null;
        $this->container['manualTransfer'] = isset($data['manualTransfer']) ? $data['manualTransfer'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
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
        if ($this->container['orderLines'] === null) {
            $invalidProperties[] = "'orderLines' can't be null";
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
     * @param string $handle Per account unique handle for the invoice. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. It is recommended to use a maximum of 20 characters as this will allow for the use of handle as reference on bank statements without truncation.
     *
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets settle
     *
     * @return \Reepay\Model\Settle
     */
    public function getSettle()
    {
        return $this->container['settle'];
    }

    /**
     * Sets settle
     *
     * @param \Reepay\Model\Settle $settle Optional settle to perform after creation
     *
     * @return $this
     */
    public function setSettle($settle)
    {
        $this->container['settle'] = $settle;

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
     * @param \Reepay\Model\CreateOrderLine[] $orderLines Order lines for the invoice
     *
     * @return $this
     */
    public function setOrderLines($orderLines)
    {
        $this->container['orderLines'] = $orderLines;

        return $this;
    }

    /**
     * Gets manualTransfer
     *
     * @return \Reepay\Model\ManualSettleTransfer
     */
    public function getManualTransfer()
    {
        return $this->container['manualTransfer'];
    }

    /**
     * Sets manualTransfer
     *
     * @param \Reepay\Model\ManualSettleTransfer $manualTransfer Optional manual transfer to settle invoice with after creation.
     *
     * @return $this
     */
    public function setManualTransfer($manualTransfer)
    {
        $this->container['manualTransfer'] = $manualTransfer;

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


