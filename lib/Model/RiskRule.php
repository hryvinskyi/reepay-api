<?php
/**
 * RiskRule
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
 * RiskRule Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RiskRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'metric';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RiskRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'metric' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'metric' => null
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
        'metric' => 'metric'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metric' => 'setMetric'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metric' => 'getMetric'
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

    const METRIC_CARD_COUNTRY = 'CARD_COUNTRY';
    const METRIC_REQUESTER_COUNTRY = 'REQUESTER_COUNTRY';
    const METRIC_AMOUNT = 'AMOUNT';
    const METRIC_CURRENCY = 'CURRENCY';
    const METRIC_CARD_TYPE = 'CARD_TYPE';
    const METRIC_PROVIDER = 'PROVIDER';
    const METRIC_NOT_SAME_COUNTRY = 'NOT_SAME_COUNTRY';
    const METRIC_TRANSACTION_CONTEXT = 'TRANSACTION_CONTEXT';
    const METRIC_PAYMENT_TYPE = 'PAYMENT_TYPE';
    const METRIC_STRONG_AUTHENTICATION_STATUS = 'STRONG_AUTHENTICATION_STATUS';
    const METRIC_THREE_D_SECURE_STATUS = 'THREE_D_SECURE_STATUS';
    const METRIC_STRONGLY_AUTHENTICATED = 'STRONGLY_AUTHENTICATED';
    const METRIC_CARD_PREFIX = 'CARD_PREFIX';
    const METRIC_CORPORATE_CARD = 'CORPORATE_CARD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricAllowableValues()
    {
        return [
            self::METRIC_CARD_COUNTRY
            self::METRIC_REQUESTER_COUNTRY
            self::METRIC_AMOUNT
            self::METRIC_CURRENCY
            self::METRIC_CARD_TYPE
            self::METRIC_PROVIDER
            self::METRIC_NOT_SAME_COUNTRY
            self::METRIC_TRANSACTION_CONTEXT
            self::METRIC_PAYMENT_TYPE
            self::METRIC_STRONG_AUTHENTICATION_STATUS
            self::METRIC_THREE_D_SECURE_STATUS
            self::METRIC_STRONGLY_AUTHENTICATED
            self::METRIC_CARD_PREFIX
            self::METRIC_CORPORATE_CARD
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
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('metric', self::$attributeMap, true);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        $allowedValues = $this->getMetricAllowableValues();
        if (!is_null($this->container['metric']) && !in_array($this->container['metric'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'metric', must be one of '%s'",
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
     * Gets metric
     *
     * @return string
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param string $metric Rule metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $allowedValues = $this->getMetricAllowableValues();
        if (!in_array($metric, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'metric', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['metric'] = $metric;

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