<?php
/**
 * DiscountSettings
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
 * Swagger Codegen version: 3.0.41
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
 * DiscountSettings Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscountSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DiscountSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'discountApplyOrder' => 'string',
        'discountPercentageApply' => 'string',
        'multipleAllowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'discountApplyOrder' => null,
        'discountPercentageApply' => null,
        'multipleAllowed' => null
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
        'discountApplyOrder' => 'discount_apply_order',
        'discountPercentageApply' => 'discount_percentage_apply',
        'multipleAllowed' => 'multiple_allowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discountApplyOrder' => 'setDiscountApplyOrder',
        'discountPercentageApply' => 'setDiscountPercentageApply',
        'multipleAllowed' => 'setMultipleAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discountApplyOrder' => 'getDiscountApplyOrder',
        'discountPercentageApply' => 'getDiscountPercentageApply',
        'multipleAllowed' => 'getMultipleAllowed'
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

    const DISCOUNT_APPLY_ORDER_PERCENTAGE_FIRST = 'percentage_first';
    const DISCOUNT_APPLY_ORDER_AMOUNT_FIRST = 'amount_first';
    const DISCOUNT_PERCENTAGE_APPLY_FULL = 'full';
    const DISCOUNT_PERCENTAGE_APPLY_COMPOUND = 'compound';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiscountApplyOrderAllowableValues()
    {
        return [
            self::DISCOUNT_APPLY_ORDER_PERCENTAGE_FIRST,
            self::DISCOUNT_APPLY_ORDER_AMOUNT_FIRST,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiscountPercentageApplyAllowableValues()
    {
        return [
            self::DISCOUNT_PERCENTAGE_APPLY_FULL,
            self::DISCOUNT_PERCENTAGE_APPLY_COMPOUND,
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
        $this->container['discountApplyOrder'] = isset($data['discountApplyOrder']) ? $data['discountApplyOrder'] : null;
        $this->container['discountPercentageApply'] = isset($data['discountPercentageApply']) ? $data['discountPercentageApply'] : null;
        $this->container['multipleAllowed'] = isset($data['multipleAllowed']) ? $data['multipleAllowed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['discountApplyOrder'] === null) {
            $invalidProperties[] = "'discountApplyOrder' can't be null";
        }
        $allowedValues = $this->getDiscountApplyOrderAllowableValues();
        if (!is_null($this->container['discountApplyOrder']) && !in_array($this->container['discountApplyOrder'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'discountApplyOrder', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['discountPercentageApply'] === null) {
            $invalidProperties[] = "'discountPercentageApply' can't be null";
        }
        $allowedValues = $this->getDiscountPercentageApplyAllowableValues();
        if (!is_null($this->container['discountPercentageApply']) && !in_array($this->container['discountPercentageApply'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'discountPercentageApply', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['multipleAllowed'] === null) {
            $invalidProperties[] = "'multipleAllowed' can't be null";
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
     * Gets discountApplyOrder
     *
     * @return string
     */
    public function getDiscountApplyOrder()
    {
        return $this->container['discountApplyOrder'];
    }

    /**
     * Sets discountApplyOrder
     *
     * @param string $discountApplyOrder The order to apply multiple discounts in, one of the following: `percentage_first`, `amount_first`
     *
     * @return $this
     */
    public function setDiscountApplyOrder($discountApplyOrder)
    {
        $allowedValues = $this->getDiscountApplyOrderAllowableValues();
        if (!in_array($discountApplyOrder, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'discountApplyOrder', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['discountApplyOrder'] = $discountApplyOrder;

        return $this;
    }

    /**
     * Gets discountPercentageApply
     *
     * @return string
     */
    public function getDiscountPercentageApply()
    {
        return $this->container['discountPercentageApply'];
    }

    /**
     * Sets discountPercentageApply
     *
     * @param string $discountPercentageApply The rule for applying multiple percentage discounts, one of the following: `full`, `compound`
     *
     * @return $this
     */
    public function setDiscountPercentageApply($discountPercentageApply)
    {
        $allowedValues = $this->getDiscountPercentageApplyAllowableValues();
        if (!in_array($discountPercentageApply, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'discountPercentageApply', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['discountPercentageApply'] = $discountPercentageApply;

        return $this;
    }

    /**
     * Gets multipleAllowed
     *
     * @return bool
     */
    public function getMultipleAllowed()
    {
        return $this->container['multipleAllowed'];
    }

    /**
     * Sets multipleAllowed
     *
     * @param bool $multipleAllowed If multiple discounts per subscription is allowed
     *
     * @return $this
     */
    public function setMultipleAllowed($multipleAllowed)
    {
        $this->container['multipleAllowed'] = $multipleAllowed;

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
