<?php
/**
 * VippsRecurringAgreement
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
 * Contact: support@reepay.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
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
 * VippsRecurringAgreement Class Doc Comment
 *
 * @category Class
 * @description Vipps Recurring agreement details
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VippsRecurringAgreement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VippsRecurringAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_serial_number' => 'string',
        'merchant_cancel_url' => 'string',
        'charge_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_serial_number' => null,
        'merchant_cancel_url' => null,
        'charge_type' => null
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
        'merchant_serial_number' => 'merchantSerialNumber',
        'merchant_cancel_url' => 'merchantCancelUrl',
        'charge_type' => 'charge_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_serial_number' => 'setMerchantSerialNumber',
        'merchant_cancel_url' => 'setMerchantCancelUrl',
        'charge_type' => 'setChargeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_serial_number' => 'getMerchantSerialNumber',
        'merchant_cancel_url' => 'getMerchantCancelUrl',
        'charge_type' => 'getChargeType'
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

    const CHARGE_TYPE_RECURRING = 'recurring';
    const CHARGE_TYPE_UNSCHEDULED = 'unscheduled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargeTypeAllowableValues()
    {
        return [
            self::CHARGE_TYPE_RECURRING
            self::CHARGE_TYPE_UNSCHEDULED
        ];
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
        $this->container['merchant_serial_number'] = isset($data['merchant_serial_number']) ? $data['merchant_serial_number'] : null;
        $this->container['merchant_cancel_url'] = isset($data['merchant_cancel_url']) ? $data['merchant_cancel_url'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_serial_number'] === null) {
            $invalidProperties[] = "'merchant_serial_number' can't be null";
        }
        if ($this->container['merchant_cancel_url'] === null) {
            $invalidProperties[] = "'merchant_cancel_url' can't be null";
        }
        if ($this->container['charge_type'] === null) {
            $invalidProperties[] = "'charge_type' can't be null";
        }
        $allowedValues = $this->getChargeTypeAllowableValues();
        if (!is_null($this->container['charge_type']) && !in_array($this->container['charge_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'charge_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets merchant_serial_number
     *
     * @return string
     */
    public function getMerchantSerialNumber()
    {
        return $this->container['merchant_serial_number'];
    }

    /**
     * Sets merchant_serial_number
     *
     * @param string $merchant_serial_number Merchant serial number
     *
     * @return $this
     */
    public function setMerchantSerialNumber($merchant_serial_number)
    {
        $this->container['merchant_serial_number'] = $merchant_serial_number;

        return $this;
    }

    /**
     * Gets merchant_cancel_url
     *
     * @return string
     */
    public function getMerchantCancelUrl()
    {
        return $this->container['merchant_cancel_url'];
    }

    /**
     * Sets merchant_cancel_url
     *
     * @param string $merchant_cancel_url Merchant cancel url
     *
     * @return $this
     */
    public function setMerchantCancelUrl($merchant_cancel_url)
    {
        $this->container['merchant_cancel_url'] = $merchant_cancel_url;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param string $charge_type Charge Type to be used on MIT charges
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $allowedValues = $this->getChargeTypeAllowableValues();
        if (!in_array($charge_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'charge_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['charge_type'] = $charge_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
