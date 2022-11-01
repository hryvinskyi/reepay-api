<?php
/**
 * MpsAgreement
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
 * MpsAgreement Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MpsAgreement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MpsAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currencies' => 'string[]',
        'country' => 'string',
        'shopName' => 'string',
        'merchantVat' => 'string',
        'providerId' => 'string',
        'authorizationUrl' => 'string',
        'asyncOneOff' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currencies' => null,
        'country' => null,
        'shopName' => null,
        'merchantVat' => null,
        'providerId' => null,
        'authorizationUrl' => null,
        'asyncOneOff' => null
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
        'currencies' => 'currencies',
        'country' => 'country',
        'shopName' => 'shop_name',
        'merchantVat' => 'merchant_vat',
        'providerId' => 'provider_id',
        'authorizationUrl' => 'authorization_url',
        'asyncOneOff' => 'async_one_off'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currencies' => 'setCurrencies',
        'country' => 'setCountry',
        'shopName' => 'setShopName',
        'merchantVat' => 'setMerchantVat',
        'providerId' => 'setProviderId',
        'authorizationUrl' => 'setAuthorizationUrl',
        'asyncOneOff' => 'setAsyncOneOff'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currencies' => 'getCurrencies',
        'country' => 'getCountry',
        'shopName' => 'getShopName',
        'merchantVat' => 'getMerchantVat',
        'providerId' => 'getProviderId',
        'authorizationUrl' => 'getAuthorizationUrl',
        'asyncOneOff' => 'getAsyncOneOff'
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
        $this->container['currencies'] = isset($data['currencies']) ? $data['currencies'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['shopName'] = isset($data['shopName']) ? $data['shopName'] : null;
        $this->container['merchantVat'] = isset($data['merchantVat']) ? $data['merchantVat'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['authorizationUrl'] = isset($data['authorizationUrl']) ? $data['authorizationUrl'] : null;
        $this->container['asyncOneOff'] = isset($data['asyncOneOff']) ? $data['asyncOneOff'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currencies'] === null) {
            $invalidProperties[] = "'currencies' can't be null";
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
     * Gets currencies
     *
     * @return string[]
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param string[] $currencies Set of currencies supported by agreement. Each currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code.
     *
     * @return $this
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string $shopName shopName
     *
     * @return $this
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets merchantVat
     *
     * @return string
     */
    public function getMerchantVat()
    {
        return $this->container['merchantVat'];
    }

    /**
     * Sets merchantVat
     *
     * @param string $merchantVat merchantVat
     *
     * @return $this
     */
    public function setMerchantVat($merchantVat)
    {
        $this->container['merchantVat'] = $merchantVat;

        return $this;
    }

    /**
     * Gets providerId
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
     * Sets providerId
     *
     * @param string $providerId providerId
     *
     * @return $this
     */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;

        return $this;
    }

    /**
     * Gets authorizationUrl
     *
     * @return string
     */
    public function getAuthorizationUrl()
    {
        return $this->container['authorizationUrl'];
    }

    /**
     * Sets authorizationUrl
     *
     * @param string $authorizationUrl authorizationUrl
     *
     * @return $this
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->container['authorizationUrl'] = $authorizationUrl;

        return $this;
    }

    /**
     * Gets asyncOneOff
     *
     * @return bool
     */
    public function getAsyncOneOff()
    {
        return $this->container['asyncOneOff'];
    }

    /**
     * Sets asyncOneOff
     *
     * @param bool $asyncOneOff asyncOneOff
     *
     * @return $this
     */
    public function setAsyncOneOff($asyncOneOff)
    {
        $this->container['asyncOneOff'] = $asyncOneOff;

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


