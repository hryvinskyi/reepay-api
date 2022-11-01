<?php
/**
 * CopyCard
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
 * CopyCard Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CopyCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CopyCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference' => 'string',
        'customer' => '\Reepay\Model\CreateCustomer',
        'agreement' => 'string',
        'currency' => 'string',
        'customerHandle' => 'string',
        'cardType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference' => null,
        'customer' => null,
        'agreement' => null,
        'currency' => null,
        'customerHandle' => null,
        'cardType' => null
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
        'reference' => 'reference',
        'customer' => 'customer',
        'agreement' => 'agreement',
        'currency' => 'currency',
        'customerHandle' => 'customer_handle',
        'cardType' => 'card_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'customer' => 'setCustomer',
        'agreement' => 'setAgreement',
        'currency' => 'setCurrency',
        'customerHandle' => 'setCustomerHandle',
        'cardType' => 'setCardType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'customer' => 'getCustomer',
        'agreement' => 'getAgreement',
        'currency' => 'getCurrency',
        'customerHandle' => 'getCustomerHandle',
        'cardType' => 'getCardType'
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

    const CARD_TYPE_VISA = 'visa';
    const CARD_TYPE_MC = 'mc';
    const CARD_TYPE_DANKORT = 'dankort';
    const CARD_TYPE_VISA_DK = 'visa_dk';
    const CARD_TYPE_FFK = 'ffk';
    const CARD_TYPE_VISA_ELEC = 'visa_elec';
    const CARD_TYPE_MAESTRO = 'maestro';
    const CARD_TYPE_LASER = 'laser';
    const CARD_TYPE_AMEX = 'amex';
    const CARD_TYPE_DINERS = 'diners';
    const CARD_TYPE_DISCOVER = 'discover';
    const CARD_TYPE_JCB = 'jcb';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_VISA,
            self::CARD_TYPE_MC,
            self::CARD_TYPE_DANKORT,
            self::CARD_TYPE_VISA_DK,
            self::CARD_TYPE_FFK,
            self::CARD_TYPE_VISA_ELEC,
            self::CARD_TYPE_MAESTRO,
            self::CARD_TYPE_LASER,
            self::CARD_TYPE_AMEX,
            self::CARD_TYPE_DINERS,
            self::CARD_TYPE_DISCOVER,
            self::CARD_TYPE_JCB,
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['agreement'] = isset($data['agreement']) ? $data['agreement'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customerHandle'] = isset($data['customerHandle']) ? $data['customerHandle'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($this->container['cardType']) && !in_array($this->container['cardType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cardType', must be one of '%s'",
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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Optional reference given to the created payment method. Max length 64 with allowable characters [a-zA-Z0-9_.-@].
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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
     * @param \Reepay\Model\CreateCustomer $customer Optional create customer object. An alternative to using a reference to an already created customer by the `customer_handle` parameter. If this object is provided and the customer already exists, the existing customer will be used.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets agreement
     *
     * @return string
     */
    public function getAgreement()
    {
        return $this->container['agreement'];
    }

    /**
     * Sets agreement
     *
     * @param string $agreement Optional agreement id to define acquirer agreement to be used.
     *
     * @return $this
     */
    public function setAgreement($agreement)
    {
        $this->container['agreement'] = $agreement;

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
     * @param string $currency Optional currency code to control agreement selection
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param string $customerHandle Customer reference to an existing customer. Either this argument or `customer` must be provided.
     *
     * @return $this
     */
    public function setCustomerHandle($customerHandle)
    {
        $this->container['customerHandle'] = $customerHandle;

        return $this;
    }

    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['cardType'];
    }

    /**
     * Sets cardType
     *
     * @param string $cardType Optional card type control agreement selection: `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
     *
     * @return $this
     */
    public function setCardType($cardType)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($cardType) && !in_array($cardType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cardType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cardType'] = $cardType;

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


