<?php
/**
 * OrderLine
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
 * OrderLine Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'ordertext' => 'string',
        'amount' => 'int',
        'vat' => 'float',
        'quantity' => 'int',
        'origin' => 'string',
        'timestamp' => '\DateTime',
        'discountedAmount' => 'int',
        'amountVat' => 'int',
        'amountExVat' => 'int',
        'unitAmount' => 'int',
        'unitAmountVat' => 'int',
        'unitAmountExVat' => 'int',
        'amountDefinedInclVat' => 'bool',
        'originHandle' => 'string',
        'periodFrom' => '\DateTime',
        'periodTo' => '\DateTime',
        'discountPercentage' => 'int',
        'discountedOrderLine' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'ordertext' => null,
        'amount' => 'int32',
        'vat' => 'float',
        'quantity' => 'int32',
        'origin' => null,
        'timestamp' => 'date-time',
        'discountedAmount' => 'int32',
        'amountVat' => 'int32',
        'amountExVat' => 'int32',
        'unitAmount' => 'int32',
        'unitAmountVat' => 'int32',
        'unitAmountExVat' => 'int32',
        'amountDefinedInclVat' => null,
        'originHandle' => null,
        'periodFrom' => 'date-time',
        'periodTo' => 'date-time',
        'discountPercentage' => 'int32',
        'discountedOrderLine' => null
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
        'id' => 'id',
        'ordertext' => 'ordertext',
        'amount' => 'amount',
        'vat' => 'vat',
        'quantity' => 'quantity',
        'origin' => 'origin',
        'timestamp' => 'timestamp',
        'discountedAmount' => 'discounted_amount',
        'amountVat' => 'amount_vat',
        'amountExVat' => 'amount_ex_vat',
        'unitAmount' => 'unit_amount',
        'unitAmountVat' => 'unit_amount_vat',
        'unitAmountExVat' => 'unit_amount_ex_vat',
        'amountDefinedInclVat' => 'amount_defined_incl_vat',
        'originHandle' => 'origin_handle',
        'periodFrom' => 'period_from',
        'periodTo' => 'period_to',
        'discountPercentage' => 'discount_percentage',
        'discountedOrderLine' => 'discounted_order_line'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ordertext' => 'setOrdertext',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'quantity' => 'setQuantity',
        'origin' => 'setOrigin',
        'timestamp' => 'setTimestamp',
        'discountedAmount' => 'setDiscountedAmount',
        'amountVat' => 'setAmountVat',
        'amountExVat' => 'setAmountExVat',
        'unitAmount' => 'setUnitAmount',
        'unitAmountVat' => 'setUnitAmountVat',
        'unitAmountExVat' => 'setUnitAmountExVat',
        'amountDefinedInclVat' => 'setAmountDefinedInclVat',
        'originHandle' => 'setOriginHandle',
        'periodFrom' => 'setPeriodFrom',
        'periodTo' => 'setPeriodTo',
        'discountPercentage' => 'setDiscountPercentage',
        'discountedOrderLine' => 'setDiscountedOrderLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ordertext' => 'getOrdertext',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'quantity' => 'getQuantity',
        'origin' => 'getOrigin',
        'timestamp' => 'getTimestamp',
        'discountedAmount' => 'getDiscountedAmount',
        'amountVat' => 'getAmountVat',
        'amountExVat' => 'getAmountExVat',
        'unitAmount' => 'getUnitAmount',
        'unitAmountVat' => 'getUnitAmountVat',
        'unitAmountExVat' => 'getUnitAmountExVat',
        'amountDefinedInclVat' => 'getAmountDefinedInclVat',
        'originHandle' => 'getOriginHandle',
        'periodFrom' => 'getPeriodFrom',
        'periodTo' => 'getPeriodTo',
        'discountPercentage' => 'getDiscountPercentage',
        'discountedOrderLine' => 'getDiscountedOrderLine'
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

    const ORIGIN_PLAN = 'plan';
    const ORIGIN_ADD_ON = 'add_on';
    const ORIGIN_ONDEMAND = 'ondemand';
    const ORIGIN_ADDITIONAL_COST = 'additional_cost';
    const ORIGIN_CREDIT = 'credit';
    const ORIGIN_DISCOUNT = 'discount';
    const ORIGIN_SETUP_FEE = 'setup_fee';
    const ORIGIN_SURCHARGE_FEE = 'surcharge_fee';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_PLAN,
            self::ORIGIN_ADD_ON,
            self::ORIGIN_ONDEMAND,
            self::ORIGIN_ADDITIONAL_COST,
            self::ORIGIN_CREDIT,
            self::ORIGIN_DISCOUNT,
            self::ORIGIN_SETUP_FEE,
            self::ORIGIN_SURCHARGE_FEE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ordertext'] = isset($data['ordertext']) ? $data['ordertext'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['discountedAmount'] = isset($data['discountedAmount']) ? $data['discountedAmount'] : null;
        $this->container['amountVat'] = isset($data['amountVat']) ? $data['amountVat'] : null;
        $this->container['amountExVat'] = isset($data['amountExVat']) ? $data['amountExVat'] : null;
        $this->container['unitAmount'] = isset($data['unitAmount']) ? $data['unitAmount'] : null;
        $this->container['unitAmountVat'] = isset($data['unitAmountVat']) ? $data['unitAmountVat'] : null;
        $this->container['unitAmountExVat'] = isset($data['unitAmountExVat']) ? $data['unitAmountExVat'] : null;
        $this->container['amountDefinedInclVat'] = isset($data['amountDefinedInclVat']) ? $data['amountDefinedInclVat'] : null;
        $this->container['originHandle'] = isset($data['originHandle']) ? $data['originHandle'] : null;
        $this->container['periodFrom'] = isset($data['periodFrom']) ? $data['periodFrom'] : null;
        $this->container['periodTo'] = isset($data['periodTo']) ? $data['periodTo'] : null;
        $this->container['discountPercentage'] = isset($data['discountPercentage']) ? $data['discountPercentage'] : null;
        $this->container['discountedOrderLine'] = isset($data['discountedOrderLine']) ? $data['discountedOrderLine'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ordertext'] === null) {
            $invalidProperties[] = "'ordertext' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['amountVat'] === null) {
            $invalidProperties[] = "'amountVat' can't be null";
        }
        if ($this->container['amountExVat'] === null) {
            $invalidProperties[] = "'amountExVat' can't be null";
        }
        if ($this->container['unitAmount'] === null) {
            $invalidProperties[] = "'unitAmount' can't be null";
        }
        if ($this->container['unitAmountVat'] === null) {
            $invalidProperties[] = "'unitAmountVat' can't be null";
        }
        if ($this->container['unitAmountExVat'] === null) {
            $invalidProperties[] = "'unitAmountExVat' can't be null";
        }
        if ($this->container['amountDefinedInclVat'] === null) {
            $invalidProperties[] = "'amountDefinedInclVat' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Per account unique order line id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $ordertext Order line text
     *
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        $this->container['ordertext'] = $ordertext;

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
     * @param int $amount Order line total amount including vat
     *
     * @return $this
     */
    public function setAmount($amount)
    {
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
     * @param float $vat Order line vat percent
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Order line quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling OrderLine., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin Order line origin, one of the following: `plan`, `add_on`, `ondemand`, `additional_cost`, `credit`, `discount`, `setup_fee`, `surcharge_fee`
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!in_array($origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'origin', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp Timestamp from order line origin, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets discountedAmount
     *
     * @return int
     */
    public function getDiscountedAmount()
    {
        return $this->container['discountedAmount'];
    }

    /**
     * Sets discountedAmount
     *
     * @param int $discountedAmount Order line amount after potential discount has been deducted
     *
     * @return $this
     */
    public function setDiscountedAmount($discountedAmount)
    {
        $this->container['discountedAmount'] = $discountedAmount;

        return $this;
    }

    /**
     * Gets amountVat
     *
     * @return int
     */
    public function getAmountVat()
    {
        return $this->container['amountVat'];
    }

    /**
     * Sets amountVat
     *
     * @param int $amountVat Order line total vat amount
     *
     * @return $this
     */
    public function setAmountVat($amountVat)
    {
        $this->container['amountVat'] = $amountVat;

        return $this;
    }

    /**
     * Gets amountExVat
     *
     * @return int
     */
    public function getAmountExVat()
    {
        return $this->container['amountExVat'];
    }

    /**
     * Sets amountExVat
     *
     * @param int $amountExVat Order line total amount without vat
     *
     * @return $this
     */
    public function setAmountExVat($amountExVat)
    {
        $this->container['amountExVat'] = $amountExVat;

        return $this;
    }

    /**
     * Gets unitAmount
     *
     * @return int
     */
    public function getUnitAmount()
    {
        return $this->container['unitAmount'];
    }

    /**
     * Sets unitAmount
     *
     * @param int $unitAmount Order line unit amount including vat
     *
     * @return $this
     */
    public function setUnitAmount($unitAmount)
    {
        $this->container['unitAmount'] = $unitAmount;

        return $this;
    }

    /**
     * Gets unitAmountVat
     *
     * @return int
     */
    public function getUnitAmountVat()
    {
        return $this->container['unitAmountVat'];
    }

    /**
     * Sets unitAmountVat
     *
     * @param int $unitAmountVat Order line unit vat amount
     *
     * @return $this
     */
    public function setUnitAmountVat($unitAmountVat)
    {
        $this->container['unitAmountVat'] = $unitAmountVat;

        return $this;
    }

    /**
     * Gets unitAmountExVat
     *
     * @return int
     */
    public function getUnitAmountExVat()
    {
        return $this->container['unitAmountExVat'];
    }

    /**
     * Sets unitAmountExVat
     *
     * @param int $unitAmountExVat Order line unit amount without vat
     *
     * @return $this
     */
    public function setUnitAmountExVat($unitAmountExVat)
    {
        $this->container['unitAmountExVat'] = $unitAmountExVat;

        return $this;
    }

    /**
     * Gets amountDefinedInclVat
     *
     * @return bool
     */
    public function getAmountDefinedInclVat()
    {
        return $this->container['amountDefinedInclVat'];
    }

    /**
     * Sets amountDefinedInclVat
     *
     * @param bool $amountDefinedInclVat Whether the amount was defined including VAT. E.g. plan amount defined including VAT.
     *
     * @return $this
     */
    public function setAmountDefinedInclVat($amountDefinedInclVat)
    {
        $this->container['amountDefinedInclVat'] = $amountDefinedInclVat;

        return $this;
    }

    /**
     * Gets originHandle
     *
     * @return string
     */
    public function getOriginHandle()
    {
        return $this->container['originHandle'];
    }

    /**
     * Sets originHandle
     *
     * @param string $originHandle Handle for additional cost, credit, plan or subscription discount in the case one of those are the origin
     *
     * @return $this
     */
    public function setOriginHandle($originHandle)
    {
        $this->container['originHandle'] = $originHandle;

        return $this;
    }

    /**
     * Gets periodFrom
     *
     * @return \DateTime
     */
    public function getPeriodFrom()
    {
        return $this->container['periodFrom'];
    }

    /**
     * Sets periodFrom
     *
     * @param \DateTime $periodFrom The start of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setPeriodFrom($periodFrom)
    {
        $this->container['periodFrom'] = $periodFrom;

        return $this;
    }

    /**
     * Gets periodTo
     *
     * @return \DateTime
     */
    public function getPeriodTo()
    {
        return $this->container['periodTo'];
    }

    /**
     * Sets periodTo
     *
     * @param \DateTime $periodTo The end of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setPeriodTo($periodTo)
    {
        $this->container['periodTo'] = $periodTo;

        return $this;
    }

    /**
     * Gets discountPercentage
     *
     * @return int
     */
    public function getDiscountPercentage()
    {
        return $this->container['discountPercentage'];
    }

    /**
     * Sets discountPercentage
     *
     * @param int $discountPercentage The discount percentage for discount order lines that has a percentage discount
     *
     * @return $this
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->container['discountPercentage'] = $discountPercentage;

        return $this;
    }

    /**
     * Gets discountedOrderLine
     *
     * @return string
     */
    public function getDiscountedOrderLine()
    {
        return $this->container['discountedOrderLine'];
    }

    /**
     * Sets discountedOrderLine
     *
     * @param string $discountedOrderLine For discount order lines a reference to the order line for which the order line is a discount
     *
     * @return $this
     */
    public function setDiscountedOrderLine($discountedOrderLine)
    {
        $this->container['discountedOrderLine'] = $discountedOrderLine;

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


