<?php
/**
 * UpdateMpsAgreement
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
 * UpdateMpsAgreement Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateMpsAgreement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateMpsAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shop_name' => 'string',
        'merchant_vat' => 'string',
        'async_one_off' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shop_name' => null,
        'merchant_vat' => null,
        'async_one_off' => null
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
        'shop_name' => 'shop_name',
        'merchant_vat' => 'merchant_vat',
        'async_one_off' => 'async_one_off'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shop_name' => 'setShopName',
        'merchant_vat' => 'setMerchantVat',
        'async_one_off' => 'setAsyncOneOff'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shop_name' => 'getShopName',
        'merchant_vat' => 'getMerchantVat',
        'async_one_off' => 'getAsyncOneOff'
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
        $this->container['shop_name'] = isset($data['shop_name']) ? $data['shop_name'] : null;
        $this->container['merchant_vat'] = isset($data['merchant_vat']) ? $data['merchant_vat'] : null;
        $this->container['async_one_off'] = isset($data['async_one_off']) ? $data['async_one_off'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets shop_name
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     *
     * @param string $shop_name shop_name
     *
     * @return $this
     */
    public function setShopName($shop_name)
    {
        $this->container['shop_name'] = $shop_name;

        return $this;
    }

    /**
     * Gets merchant_vat
     *
     * @return string
     */
    public function getMerchantVat()
    {
        return $this->container['merchant_vat'];
    }

    /**
     * Sets merchant_vat
     *
     * @param string $merchant_vat merchant_vat
     *
     * @return $this
     */
    public function setMerchantVat($merchant_vat)
    {
        $this->container['merchant_vat'] = $merchant_vat;

        return $this;
    }

    /**
     * Gets async_one_off
     *
     * @return bool
     */
    public function getAsyncOneOff()
    {
        return $this->container['async_one_off'];
    }

    /**
     * Sets async_one_off
     *
     * @param bool $async_one_off async_one_off
     *
     * @return $this
     */
    public function setAsyncOneOff($async_one_off)
    {
        $this->container['async_one_off'] = $async_one_off;

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
