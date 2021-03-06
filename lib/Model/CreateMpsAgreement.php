<?php
/**
 * CreateMpsAgreement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;

/**
 * CreateMpsAgreement Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateMpsAgreement implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateMpsAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'country' => 'string',
        'currency' => 'string',
        'return_url' => 'string',
        'mock' => 'bool',
        'shop_name' => 'string',
        'merchant_vat' => 'string',
        'async_one_off' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'country' => 'country',
        'currency' => 'currency',
        'return_url' => 'returnUrl',
        'mock' => 'mock',
        'shop_name' => 'shop_name',
        'merchant_vat' => 'merchant_vat',
        'async_one_off' => 'async_one_off'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'country' => 'setCountry',
        'currency' => 'setCurrency',
        'return_url' => 'setReturnUrl',
        'mock' => 'setMock',
        'shop_name' => 'setShopName',
        'merchant_vat' => 'setMerchantVat',
        'async_one_off' => 'setAsyncOneOff'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'country' => 'getCountry',
        'currency' => 'getCurrency',
        'return_url' => 'getReturnUrl',
        'mock' => 'getMock',
        'shop_name' => 'getShopName',
        'merchant_vat' => 'getMerchantVat',
        'async_one_off' => 'getAsyncOneOff'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['return_url'] = isset($data['return_url']) ? $data['return_url'] : null;
        $this->container['mock'] = isset($data['mock']) ? $data['mock'] : null;
        $this->container['shop_name'] = isset($data['shop_name']) ? $data['shop_name'] : null;
        $this->container['merchant_vat'] = isset($data['merchant_vat']) ? $data['merchant_vat'] : null;
        $this->container['async_one_off'] = isset($data['async_one_off']) ? $data['async_one_off'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['country'] === null) {
            $invalid_properties[] = "'country' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
        }
        if ($this->container['return_url'] === null) {
            $invalid_properties[] = "'return_url' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        if ($this->container['return_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets return_url
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     * @param string $return_url
     * @return $this
     */
    public function setReturnUrl($return_url)
    {
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets mock
     * @return bool
     */
    public function getMock()
    {
        return $this->container['mock'];
    }

    /**
     * Sets mock
     * @param bool $mock
     * @return $this
     */
    public function setMock($mock)
    {
        $this->container['mock'] = $mock;

        return $this;
    }

    /**
     * Gets shop_name
     * @return string
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     * @param string $shop_name
     * @return $this
     */
    public function setShopName($shop_name)
    {
        $this->container['shop_name'] = $shop_name;

        return $this;
    }

    /**
     * Gets merchant_vat
     * @return string
     */
    public function getMerchantVat()
    {
        return $this->container['merchant_vat'];
    }

    /**
     * Sets merchant_vat
     * @param string $merchant_vat
     * @return $this
     */
    public function setMerchantVat($merchant_vat)
    {
        $this->container['merchant_vat'] = $merchant_vat;

        return $this;
    }

    /**
     * Gets async_one_off
     * @return bool
     */
    public function getAsyncOneOff()
    {
        return $this->container['async_one_off'];
    }

    /**
     * Sets async_one_off
     * @param bool $async_one_off
     * @return $this
     */
    public function setAsyncOneOff($async_one_off)
    {
        $this->container['async_one_off'] = $async_one_off;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


