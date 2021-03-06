<?php
/**
 * DiscountSettings
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
 * DiscountSettings Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DiscountSettings implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DiscountSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'discount_apply_order' => 'string',
        'discount_percentage_apply' => 'string',
        'multiple_allowed' => 'bool'
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
        'discount_apply_order' => 'discount_apply_order',
        'discount_percentage_apply' => 'discount_percentage_apply',
        'multiple_allowed' => 'multiple_allowed'
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
        'discount_apply_order' => 'setDiscountApplyOrder',
        'discount_percentage_apply' => 'setDiscountPercentageApply',
        'multiple_allowed' => 'setMultipleAllowed'
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
        'discount_apply_order' => 'getDiscountApplyOrder',
        'discount_percentage_apply' => 'getDiscountPercentageApply',
        'multiple_allowed' => 'getMultipleAllowed'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const DISCOUNT_APPLY_ORDER_PERCENTAGE_FIRST = 'percentage_first';
    const DISCOUNT_APPLY_ORDER_AMOUNT_FIRST = 'amount_first';
    const DISCOUNT_PERCENTAGE_APPLY_FULL = 'full';
    const DISCOUNT_PERCENTAGE_APPLY_COMPOUND = 'compound';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDiscountApplyOrderAllowableValues()
    {
        return [
            self::DISCOUNT_APPLY_ORDER_PERCENTAGE_FIRST,
            self::DISCOUNT_APPLY_ORDER_AMOUNT_FIRST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDiscountPercentageApplyAllowableValues()
    {
        return [
            self::DISCOUNT_PERCENTAGE_APPLY_FULL,
            self::DISCOUNT_PERCENTAGE_APPLY_COMPOUND,
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
        $this->container['discount_apply_order'] = isset($data['discount_apply_order']) ? $data['discount_apply_order'] : null;
        $this->container['discount_percentage_apply'] = isset($data['discount_percentage_apply']) ? $data['discount_percentage_apply'] : null;
        $this->container['multiple_allowed'] = isset($data['multiple_allowed']) ? $data['multiple_allowed'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['discount_apply_order'] === null) {
            $invalid_properties[] = "'discount_apply_order' can't be null";
        }
        $allowed_values = array("percentage_first", "amount_first");
        if (!in_array($this->container['discount_apply_order'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'discount_apply_order', must be one of #{allowed_values}.";
        }

        if ($this->container['discount_percentage_apply'] === null) {
            $invalid_properties[] = "'discount_percentage_apply' can't be null";
        }
        $allowed_values = array("full", "compound");
        if (!in_array($this->container['discount_percentage_apply'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'discount_percentage_apply', must be one of #{allowed_values}.";
        }

        if ($this->container['multiple_allowed'] === null) {
            $invalid_properties[] = "'multiple_allowed' can't be null";
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
        if ($this->container['discount_apply_order'] === null) {
            return false;
        }
        $allowed_values = array("percentage_first", "amount_first");
        if (!in_array($this->container['discount_apply_order'], $allowed_values)) {
            return false;
        }
        if ($this->container['discount_percentage_apply'] === null) {
            return false;
        }
        $allowed_values = array("full", "compound");
        if (!in_array($this->container['discount_percentage_apply'], $allowed_values)) {
            return false;
        }
        if ($this->container['multiple_allowed'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets discount_apply_order
     * @return string
     */
    public function getDiscountApplyOrder()
    {
        return $this->container['discount_apply_order'];
    }

    /**
     * Sets discount_apply_order
     * @param string $discount_apply_order The order to apply multiple discounts in, one of the following: `percentage_first`, `amount_first`
     * @return $this
     */
    public function setDiscountApplyOrder($discount_apply_order)
    {
        $allowed_values = array('percentage_first', 'amount_first');
        if (!in_array($discount_apply_order, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'discount_apply_order', must be one of 'percentage_first', 'amount_first'");
        }
        $this->container['discount_apply_order'] = $discount_apply_order;

        return $this;
    }

    /**
     * Gets discount_percentage_apply
     * @return string
     */
    public function getDiscountPercentageApply()
    {
        return $this->container['discount_percentage_apply'];
    }

    /**
     * Sets discount_percentage_apply
     * @param string $discount_percentage_apply The rule for applying multiple percentage discounts, one of the following: `full`, `compound`
     * @return $this
     */
    public function setDiscountPercentageApply($discount_percentage_apply)
    {
        $allowed_values = array('full', 'compound');
        if (!in_array($discount_percentage_apply, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'discount_percentage_apply', must be one of 'full', 'compound'");
        }
        $this->container['discount_percentage_apply'] = $discount_percentage_apply;

        return $this;
    }

    /**
     * Gets multiple_allowed
     * @return bool
     */
    public function getMultipleAllowed()
    {
        return $this->container['multiple_allowed'];
    }

    /**
     * Sets multiple_allowed
     * @param bool $multiple_allowed If multiple discounts per subscription is allowed
     * @return $this
     */
    public function setMultipleAllowed($multiple_allowed)
    {
        $this->container['multiple_allowed'] = $multiple_allowed;

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


