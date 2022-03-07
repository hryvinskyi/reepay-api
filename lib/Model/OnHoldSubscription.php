<?php
/**
 * OnHoldSubscription
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
 * OnHoldSubscription Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OnHoldSubscription implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OnHoldSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'compensation_method' => 'string'
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
        'compensation_method' => 'compensation_method'
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
        'compensation_method' => 'setCompensationMethod'
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
        'compensation_method' => 'getCompensationMethod'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const COMPENSATION_METHOD_FULL_REFUND = 'full_refund';
    const COMPENSATION_METHOD_PRORATED_REFUND = 'prorated_refund';
    const COMPENSATION_METHOD_FULL_CREDIT = 'full_credit';
    const COMPENSATION_METHOD_PRORATED_CREDIT = 'prorated_credit';
    const COMPENSATION_METHOD_NONE = 'none';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCompensationMethodAllowableValues()
    {
        return [
            self::COMPENSATION_METHOD_FULL_REFUND,
            self::COMPENSATION_METHOD_PRORATED_REFUND,
            self::COMPENSATION_METHOD_FULL_CREDIT,
            self::COMPENSATION_METHOD_PRORATED_CREDIT,
            self::COMPENSATION_METHOD_NONE,
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
        $this->container['compensation_method'] = isset($data['compensation_method']) ? $data['compensation_method'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("full_refund", "prorated_refund", "full_credit", "prorated_credit", "none");
        if (!in_array($this->container['compensation_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'compensation_method', must be one of #{allowed_values}.";
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
        $allowed_values = array("full_refund", "prorated_refund", "full_credit", "prorated_credit", "none");
        if (!in_array($this->container['compensation_method'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets compensation_method
     * @return string
     */
    public function getCompensationMethod()
    {
        return $this->container['compensation_method'];
    }

    /**
     * Sets compensation_method
     * @param string $compensation_method Optional method for compensation of partial period, either `full_refund`, `prorated_refund`, `full_credit`, `prorated_credit` or `none`. Default is `none`. Refund compensation is only allowed for synchronous refund payment methods, e.g. credit cards.
     * @return $this
     */
    public function setCompensationMethod($compensation_method)
    {
        $allowed_values = array('full_refund', 'prorated_refund', 'full_credit', 'prorated_credit', 'none');
        if (!in_array($compensation_method, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'compensation_method', must be one of 'full_refund', 'prorated_refund', 'full_credit', 'prorated_credit', 'none'");
        }
        $this->container['compensation_method'] = $compensation_method;

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


