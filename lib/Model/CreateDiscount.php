<?php
/**
 * CreateDiscount
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

use ArrayAccess;
use Reepay\ObjectSerializer;

/**
 * CreateDiscount Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateDiscount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateDiscount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'amount' => 'int',
        'percentage' => 'int',
        'handle' => 'string',
        'apply_to' => 'string[]',
        'fixed_count' => 'int',
        'fixed_period_unit' => 'string',
        'fixed_period' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'amount' => 'int32',
        'percentage' => 'int32',
        'handle' => null,
        'apply_to' => null,
        'fixed_count' => 'int32',
        'fixed_period_unit' => null,
        'fixed_period' => 'int32'
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
        'name' => 'name',
        'description' => 'description',
        'amount' => 'amount',
        'percentage' => 'percentage',
        'handle' => 'handle',
        'apply_to' => 'apply_to',
        'fixed_count' => 'fixed_count',
        'fixed_period_unit' => 'fixed_period_unit',
        'fixed_period' => 'fixed_period'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'percentage' => 'setPercentage',
        'handle' => 'setHandle',
        'apply_to' => 'setApplyTo',
        'fixed_count' => 'setFixedCount',
        'fixed_period_unit' => 'setFixedPeriodUnit',
        'fixed_period' => 'setFixedPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'percentage' => 'getPercentage',
        'handle' => 'getHandle',
        'apply_to' => 'getApplyTo',
        'fixed_count' => 'getFixedCount',
        'fixed_period_unit' => 'getFixedPeriodUnit',
        'fixed_period' => 'getFixedPeriod'
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

    const FIXED_PERIOD_UNIT_MONTHS = 'months';
    const FIXED_PERIOD_UNIT_DAYS = 'days';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFixedPeriodUnitAllowableValues()
    {
        return [
            self::FIXED_PERIOD_UNIT_MONTHS,
            self::FIXED_PERIOD_UNIT_DAYS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['apply_to'] = isset($data['apply_to']) ? $data['apply_to'] : null;
        $this->container['fixed_count'] = isset($data['fixed_count']) ? $data['fixed_count'] : null;
        $this->container['fixed_period_unit'] = isset($data['fixed_period_unit']) ? $data['fixed_period_unit'] : null;
        $this->container['fixed_period'] = isset($data['fixed_period']) ? $data['fixed_period'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['handle'] === null) {
            $invalidProperties[] = "'handle' can't be null";
        }
        if ($this->container['apply_to'] === null) {
            $invalidProperties[] = "'apply_to' can't be null";
        }
        $allowedValues = $this->getFixedPeriodUnitAllowableValues();
        if (!is_null($this->container['fixed_period_unit']) && !in_array($this->container['fixed_period_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fixed_period_unit', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of discount. Will be used as order line text.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Optional description of discount
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param int $amount Fixed amount discount deducted from order line amounts including VAT, either amount or percentage should be provided
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return int
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param int $percentage Percentage discount applied to each applicable order line, either amount or percentage should be provided
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;

        return $this;
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
     * @param string $handle Per account unique handle for the discount
     *
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets apply_to
     *
     * @return string[]
     */
    public function getApplyTo()
    {
        return $this->container['apply_to'];
    }

    /**
     * Sets apply_to
     *
     * @param string[] $apply_to Which order lines the discount is applicable to: `all`, `setup_fee`, `plan`, `additional_cost`, `add_on` and `ondemand`
     *
     * @return $this
     */
    public function setApplyTo($apply_to)
    {
        $this->container['apply_to'] = $apply_to;

        return $this;
    }

    /**
     * Gets fixed_count
     *
     * @return int
     */
    public function getFixedCount()
    {
        return $this->container['fixed_count'];
    }

    /**
     * Sets fixed_count
     *
     * @param int $fixed_count Apply discount to a fixed number of invoices
     *
     * @return $this
     */
    public function setFixedCount($fixed_count)
    {
        $this->container['fixed_count'] = $fixed_count;

        return $this;
    }

    /**
     * Gets fixed_period_unit
     *
     * @return string
     */
    public function getFixedPeriodUnit()
    {
        return $this->container['fixed_period_unit'];
    }

    /**
     * Sets fixed_period_unit
     *
     * @param string $fixed_period_unit Time unit use for fixed valid period either `days` or `months`
     *
     * @return $this
     */
    public function setFixedPeriodUnit($fixed_period_unit)
    {
        $allowedValues = $this->getFixedPeriodUnitAllowableValues();
        if (!is_null($fixed_period_unit) && !in_array($fixed_period_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fixed_period_unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fixed_period_unit'] = $fixed_period_unit;

        return $this;
    }

    /**
     * Gets fixed_period
     *
     * @return int
     */
    public function getFixedPeriod()
    {
        return $this->container['fixed_period'];
    }

    /**
     * Sets fixed_period
     *
     * @param int $fixed_period Fixed period length e.g. 12 months or 14 days
     *
     * @return $this
     */
    public function setFixedPeriod($fixed_period)
    {
        $this->container['fixed_period'] = $fixed_period;

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
