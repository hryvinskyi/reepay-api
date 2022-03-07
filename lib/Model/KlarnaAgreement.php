<?php
/**
 * KlarnaAgreement
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
 * KlarnaAgreement Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KlarnaAgreement implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KlarnaAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'username' => 'string',
        'password' => 'string',
        'test' => 'bool',
        'currencies' => 'string[]',
        'payment_type' => 'string'
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
        'username' => 'username',
        'password' => 'password',
        'test' => 'test',
        'currencies' => 'currencies',
        'payment_type' => 'payment_type'
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
        'username' => 'setUsername',
        'password' => 'setPassword',
        'test' => 'setTest',
        'currencies' => 'setCurrencies',
        'payment_type' => 'setPaymentType'
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
        'username' => 'getUsername',
        'password' => 'getPassword',
        'test' => 'getTest',
        'currencies' => 'getCurrencies',
        'payment_type' => 'getPaymentType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const PAYMENT_TYPE_PAY_NOW = 'klarna_pay_now';
    const PAYMENT_TYPE_PAY_LATER = 'klarna_pay_later';
    const PAYMENT_TYPE_SLICE_IT = 'klarna_slice_it';
    const PAYMENT_TYPE_DIRECT_BANK_TRANSFER = 'klarna_direct_bank_transfer';
    const PAYMENT_TYPE_DIRECT_DEBIT = 'klarna_direct_debit';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_PAY_NOW,
            self::PAYMENT_TYPE_PAY_LATER,
            self::PAYMENT_TYPE_SLICE_IT,
            self::PAYMENT_TYPE_DIRECT_BANK_TRANSFER,
            self::PAYMENT_TYPE_DIRECT_DEBIT,
        ];
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['test'] = isset($data['test']) ? $data['test'] : null;
        $this->container['currencies'] = isset($data['currencies']) ? $data['currencies'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['currencies'] === null) {
            $invalid_properties[] = "'currencies' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalid_properties[] = "'payment_type' can't be null";
        }
        $allowed_values = array("klarna_pay_now", "klarna_pay_later", "klarna_slice_it", "klarna_direct_bank_transfer", "klarna_direct_debit");
        if (!in_array($this->container['payment_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'payment_type', must be one of #{allowed_values}.";
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
        if ($this->container['currencies'] === null) {
            return false;
        }
        if ($this->container['payment_type'] === null) {
            return false;
        }
        $allowed_values = array("klarna_pay_now", "klarna_pay_later", "klarna_slice_it", "klarna_direct_bank_transfer", "klarna_direct_debit");
        if (!in_array($this->container['payment_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username Klarna username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password Klarna password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets test
     * @return bool
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     * @param bool $test
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

        return $this;
    }

    /**
     * Gets currencies
     * @return string[]
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     * @param string[] $currencies Set of currencies supported by agreement. Each currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code.
     * @return $this
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets payment_type
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     * @param string $payment_type Payment gateway payment type
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowed_values = array('klarna_pay_now', 'klarna_pay_later', 'klarna_slice_it', 'klarna_direct_bank_transfer', 'klarna_direct_debit');
        if (!in_array($payment_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'payment_type', must be one of 'klarna_pay_now', 'klarna_pay_later', 'klarna_slice_it', 'klarna_direct_bank_transfer', 'klarna_direct_debit'");
        }
        $this->container['payment_type'] = $payment_type;

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


