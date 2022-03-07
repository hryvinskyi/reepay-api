<?php
/**
 * UserSetMfa
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
 * UserSetMfa Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserSetMfa implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserSetMfa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'mfa_method' => 'string',
        'mfa_code' => 'string'
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
        'mfa_method' => 'mfa_method',
        'mfa_code' => 'mfa_code'
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
        'mfa_method' => 'setMfaMethod',
        'mfa_code' => 'setMfaCode'
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
        'mfa_method' => 'getMfaMethod',
        'mfa_code' => 'getMfaCode'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const MFA_METHOD_NONE = 'none';
    const MFA_METHOD_TOTP = 'totp';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMfaMethodAllowableValues()
    {
        return [
            self::MFA_METHOD_NONE,
            self::MFA_METHOD_TOTP,
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
        $this->container['mfa_method'] = isset($data['mfa_method']) ? $data['mfa_method'] : null;
        $this->container['mfa_code'] = isset($data['mfa_code']) ? $data['mfa_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("none", "totp");
        if (!in_array($this->container['mfa_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'mfa_method', must be one of #{allowed_values}.";
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
        $allowed_values = array("none", "totp");
        if (!in_array($this->container['mfa_method'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets mfa_method
     * @return string
     */
    public function getMfaMethod()
    {
        return $this->container['mfa_method'];
    }

    /**
     * Sets mfa_method
     * @param string $mfa_method MFA method
     * @return $this
     */
    public function setMfaMethod($mfa_method)
    {
        $allowed_values = array('none', 'totp');
        if (!in_array($mfa_method, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'mfa_method', must be one of 'none', 'totp'");
        }
        $this->container['mfa_method'] = $mfa_method;

        return $this;
    }

    /**
     * Gets mfa_code
     * @return string
     */
    public function getMfaCode()
    {
        return $this->container['mfa_code'];
    }

    /**
     * Sets mfa_code
     * @param string $mfa_code MFA verification code
     * @return $this
     */
    public function setMfaCode($mfa_code)
    {
        $this->container['mfa_code'] = $mfa_code;

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


