<?php
/**
 * CreateAddOn
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
 * CreateAddOn Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateAddOn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateAddOn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'amount' => 'int',
        'vat' => 'float',
        'handle' => 'string',
        'type' => 'string',
        'metadata' => 'map[string,object]',
        'amountInclVat' => 'bool',
        'allPlans' => 'bool',
        'eligiblePlans' => 'string[]'
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
        'vat' => 'float',
        'handle' => null,
        'type' => null,
        'metadata' => null,
        'amountInclVat' => null,
        'allPlans' => null,
        'eligiblePlans' => null
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
        'vat' => 'vat',
        'handle' => 'handle',
        'type' => 'type',
        'metadata' => 'metadata',
        'amountInclVat' => 'amount_incl_vat',
        'allPlans' => 'all_plans',
        'eligiblePlans' => 'eligible_plans'
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
        'vat' => 'setVat',
        'handle' => 'setHandle',
        'type' => 'setType',
        'metadata' => 'setMetadata',
        'amountInclVat' => 'setAmountInclVat',
        'allPlans' => 'setAllPlans',
        'eligiblePlans' => 'setEligiblePlans'
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
        'vat' => 'getVat',
        'handle' => 'getHandle',
        'type' => 'getType',
        'metadata' => 'getMetadata',
        'amountInclVat' => 'getAmountInclVat',
        'allPlans' => 'getAllPlans',
        'eligiblePlans' => 'getEligiblePlans'
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

    const TYPE_ON_OFF = 'on_off';
    const TYPE_QUANTITY = 'quantity';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ON_OFF,
            self::TYPE_QUANTITY,
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
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['amountInclVat'] = isset($data['amountInclVat']) ? $data['amountInclVat'] : null;
        $this->container['allPlans'] = isset($data['allPlans']) ? $data['allPlans'] : null;
        $this->container['eligiblePlans'] = isset($data['eligiblePlans']) ? $data['eligiblePlans'] : null;
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
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] > 1)) {
            $invalidProperties[] = "invalid value for 'vat', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] < 0)) {
            $invalidProperties[] = "invalid value for 'vat', must be bigger than or equal to 0.";
        }

        if ($this->container['handle'] === null) {
            $invalidProperties[] = "'handle' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * @param string $name Name of add-on. Will be used as order line text.
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
     * @param string $description Optional description of add-on
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
     * @param int $amount Add-on amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateAddOn., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param float $vat Optional vat for add-on. Account default is used if none given.
     *
     * @return $this
     */
    public function setVat($vat)
    {

        if (!is_null($vat) && ($vat > 1)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling CreateAddOn., must be smaller than or equal to 1.');
        }
        if (!is_null($vat) && ($vat < 0)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling CreateAddOn., must be bigger than or equal to 0.');
        }

        $this->container['vat'] = $vat;

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
     * @param string $handle Per account unique handle for the add-on
     *
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Add-on type `on_off` or `quantity`. An `on_off` type cannot be given a quantity when attached to subscription. For `quantity` type it is possible.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * Gets amountInclVat
     *
     * @return bool
     */
    public function getAmountInclVat()
    {
        return $this->container['amountInclVat'];
    }

    /**
     * Sets amountInclVat
     *
     * @param bool $amountInclVat Whether the amount is including VAT. Default true.
     *
     * @return $this
     */
    public function setAmountInclVat($amountInclVat)
    {
        $this->container['amountInclVat'] = $amountInclVat;

        return $this;
    }

    /**
     * Gets allPlans
     *
     * @return bool
     */
    public function getAllPlans()
    {
        return $this->container['allPlans'];
    }

    /**
     * Sets allPlans
     *
     * @param bool $allPlans Whether all plans are eligible for this add-on. Defaults to false.
     *
     * @return $this
     */
    public function setAllPlans($allPlans)
    {
        $this->container['allPlans'] = $allPlans;

        return $this;
    }

    /**
     * Gets eligiblePlans
     *
     * @return string[]
     */
    public function getEligiblePlans()
    {
        return $this->container['eligiblePlans'];
    }

    /**
     * Sets eligiblePlans
     *
     * @param string[] $eligiblePlans If not `all_plans` are set to true, then the set of eligible plan handles must be defined.
     *
     * @return $this
     */
    public function setEligiblePlans($eligiblePlans)
    {
        $this->container['eligiblePlans'] = $eligiblePlans;

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


