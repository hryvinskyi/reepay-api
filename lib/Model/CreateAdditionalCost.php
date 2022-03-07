<?php
/**
 * CreateAdditionalCost
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
 * CreateAdditionalCost Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateAdditionalCost implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateAdditionalCost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'handle' => 'string',
        'ordertext' => 'string',
        'quantity' => 'int',
        'amount' => 'int',
        'vat' => 'float',
        'subscription' => 'string',
        'amount_incl_vat' => 'bool'
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
        'handle' => 'handle',
        'ordertext' => 'ordertext',
        'quantity' => 'quantity',
        'amount' => 'amount',
        'vat' => 'vat',
        'subscription' => 'subscription',
        'amount_incl_vat' => 'amount_incl_vat'
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
        'handle' => 'setHandle',
        'ordertext' => 'setOrdertext',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'subscription' => 'setSubscription',
        'amount_incl_vat' => 'setAmountInclVat'
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
        'handle' => 'getHandle',
        'ordertext' => 'getOrdertext',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'subscription' => 'getSubscription',
        'amount_incl_vat' => 'getAmountInclVat'
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
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['ordertext'] = isset($data['ordertext']) ? $data['ordertext'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['ordertext'] === null) {
            $invalid_properties[] = "'ordertext' can't be null";
        }
        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.0.";
        }

        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] > 1.0)) {
            $invalid_properties[] = "invalid value for 'vat', must be smaller than or equal to 1.0.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'vat', must be bigger than or equal to 0.0.";
        }

        if ($this->container['subscription'] === null) {
            $invalid_properties[] = "'subscription' can't be null";
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
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['ordertext'] === null) {
            return false;
        }
        if ($this->container['quantity'] < 1.0) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0.0) {
            return false;
        }
        if ($this->container['vat'] > 1.0) {
            return false;
        }
        if ($this->container['vat'] < 0.0) {
            return false;
        }
        if ($this->container['subscription'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique handle for the additional cost
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets ordertext
     * @return string
     */
    public function getOrdertext()
    {
        return $this->container['ordertext'];
    }

    /**
     * Sets ordertext
     * @param string $ordertext Order text for the additional cost. Will be on affected invoices.
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        $this->container['ordertext'] = $ordertext;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Quantity for the additional cost. Default 1.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if ($quantity < 1.0) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling CreateAdditionalCost., must be bigger than or equal to 1.0.');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Per quantity amount in the smallest unit for the account currency
     * @return $this
     */
    public function setAmount($amount)
    {

        if ($amount < 0.0) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateAdditionalCost., must be bigger than or equal to 0.0.');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     * @param float $vat Optional vat for additional cost. Account default is used if none given.
     * @return $this
     */
    public function setVat($vat)
    {

        if ($vat > 1.0) {
            throw new \InvalidArgumentException('invalid value for $vat when calling CreateAdditionalCost., must be smaller than or equal to 1.0.');
        }
        if ($vat < 0.0) {
            throw new \InvalidArgumentException('invalid value for $vat when calling CreateAdditionalCost., must be bigger than or equal to 0.0.');
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets subscription
     * @return string
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param string $subscription Subscription handle
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets amount_incl_vat
     * @return bool
     */
    public function getAmountInclVat()
    {
        return $this->container['amount_incl_vat'];
    }

    /**
     * Sets amount_incl_vat
     * @param bool $amount_incl_vat Whether the per quantity amount is including VAT. Defaults to true.
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

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


