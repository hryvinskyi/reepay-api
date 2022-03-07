<?php
/**
 * UserAccountMfa
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
 * UserAccountMfa Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserAccountMfa implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserAccountMfa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'email' => 'string',
        'name' => 'string',
        'state' => 'string',
        'groups' => 'string[]',
        'permissions' => 'string[]',
        'verified_email' => 'bool',
        'mfa_method' => 'string',
        'invite_expires' => '\DateTime',
        'totp_qr' => 'string'
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
        'id' => 'id',
        'email' => 'email',
        'name' => 'name',
        'state' => 'state',
        'groups' => 'groups',
        'permissions' => 'permissions',
        'verified_email' => 'verified_email',
        'mfa_method' => 'mfa_method',
        'invite_expires' => 'invite_expires',
        'totp_qr' => 'totp_qr'
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
        'id' => 'setId',
        'email' => 'setEmail',
        'name' => 'setName',
        'state' => 'setState',
        'groups' => 'setGroups',
        'permissions' => 'setPermissions',
        'verified_email' => 'setVerifiedEmail',
        'mfa_method' => 'setMfaMethod',
        'invite_expires' => 'setInviteExpires',
        'totp_qr' => 'setTotpQr'
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
        'id' => 'getId',
        'email' => 'getEmail',
        'name' => 'getName',
        'state' => 'getState',
        'groups' => 'getGroups',
        'permissions' => 'getPermissions',
        'verified_email' => 'getVerifiedEmail',
        'mfa_method' => 'getMfaMethod',
        'invite_expires' => 'getInviteExpires',
        'totp_qr' => 'getTotpQr'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATE_ACTIVE = 'active';
    const STATE_INVITED = 'invited';
    const MFA_METHOD_TOTP = 'totp';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_INVITED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMfaMethodAllowableValues()
    {
        return [
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['verified_email'] = isset($data['verified_email']) ? $data['verified_email'] : null;
        $this->container['mfa_method'] = isset($data['mfa_method']) ? $data['mfa_method'] : null;
        $this->container['invite_expires'] = isset($data['invite_expires']) ? $data['invite_expires'] : null;
        $this->container['totp_qr'] = isset($data['totp_qr']) ? $data['totp_qr'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = array("active", "invited");
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        if ($this->container['groups'] === null) {
            $invalid_properties[] = "'groups' can't be null";
        }
        if ($this->container['permissions'] === null) {
            $invalid_properties[] = "'permissions' can't be null";
        }
        if ($this->container['verified_email'] === null) {
            $invalid_properties[] = "'verified_email' can't be null";
        }
        $allowed_values = array("totp");
        if (!in_array($this->container['mfa_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'mfa_method', must be one of #{allowed_values}.";
        }

        if ($this->container['totp_qr'] === null) {
            $invalid_properties[] = "'totp_qr' can't be null";
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = array("active", "invited");
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['groups'] === null) {
            return false;
        }
        if ($this->container['permissions'] === null) {
            return false;
        }
        if ($this->container['verified_email'] === null) {
            return false;
        }
        $allowed_values = array("totp");
        if (!in_array($this->container['mfa_method'], $allowed_values)) {
            return false;
        }
        if ($this->container['totp_qr'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique id for the user assigned by Reepay
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email User email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name User name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state State of user for account: `active`, `invited`
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('active', 'invited');
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'active', 'invited'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets groups
     * @return string[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     * @param string[] $groups List of user groups
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets permissions
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     * @param string[] $permissions List of user permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets verified_email
     * @return bool
     */
    public function getVerifiedEmail()
    {
        return $this->container['verified_email'];
    }

    /**
     * Sets verified_email
     * @param bool $verified_email Email verified
     * @return $this
     */
    public function setVerifiedEmail($verified_email)
    {
        $this->container['verified_email'] = $verified_email;

        return $this;
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
        $allowed_values = array('totp');
        if (!in_array($mfa_method, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'mfa_method', must be one of 'totp'");
        }
        $this->container['mfa_method'] = $mfa_method;

        return $this;
    }

    /**
     * Gets invite_expires
     * @return \DateTime
     */
    public function getInviteExpires()
    {
        return $this->container['invite_expires'];
    }

    /**
     * Sets invite_expires
     * @param \DateTime $invite_expires Expiry date for invite
     * @return $this
     */
    public function setInviteExpires($invite_expires)
    {
        $this->container['invite_expires'] = $invite_expires;

        return $this;
    }

    /**
     * Gets totp_qr
     * @return string
     */
    public function getTotpQr()
    {
        return $this->container['totp_qr'];
    }

    /**
     * Sets totp_qr
     * @param string $totp_qr TOTP QR code
     * @return $this
     */
    public function setTotpQr($totp_qr)
    {
        $this->container['totp_qr'] = $totp_qr;

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

