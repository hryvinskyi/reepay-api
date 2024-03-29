<?php
/**
 * UserLogin
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
 * UserLogin Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserLogin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserLogin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'token' => 'string',
        'user' => '\Reepay\Model\User',
        'account' => '\Reepay\Model\Account',
        'organisation' => '\Reepay\Model\Organisation',
        'organisations' => '\Reepay\Model\OrganisationLogin[]',
        'groups' => 'string[]',
        'permissions' => 'string[]',
        'token_ttl' => 'int',
        'mfa_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'token' => null,
        'user' => null,
        'account' => null,
        'organisation' => null,
        'organisations' => null,
        'groups' => null,
        'permissions' => null,
        'token_ttl' => 'int32',
        'mfa_required' => null
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
        'token' => 'token',
        'user' => 'user',
        'account' => 'account',
        'organisation' => 'organisation',
        'organisations' => 'organisations',
        'groups' => 'groups',
        'permissions' => 'permissions',
        'token_ttl' => 'token_ttl',
        'mfa_required' => 'mfa_required'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token' => 'setToken',
        'user' => 'setUser',
        'account' => 'setAccount',
        'organisation' => 'setOrganisation',
        'organisations' => 'setOrganisations',
        'groups' => 'setGroups',
        'permissions' => 'setPermissions',
        'token_ttl' => 'setTokenTtl',
        'mfa_required' => 'setMfaRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token' => 'getToken',
        'user' => 'getUser',
        'account' => 'getAccount',
        'organisation' => 'getOrganisation',
        'organisations' => 'getOrganisations',
        'groups' => 'getGroups',
        'permissions' => 'getPermissions',
        'token_ttl' => 'getTokenTtl',
        'mfa_required' => 'getMfaRequired'
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['organisation'] = isset($data['organisation']) ? $data['organisation'] : null;
        $this->container['organisations'] = isset($data['organisations']) ? $data['organisations'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['token_ttl'] = isset($data['token_ttl']) ? $data['token_ttl'] : null;
        $this->container['mfa_required'] = isset($data['mfa_required']) ? $data['mfa_required'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['organisation'] === null) {
            $invalidProperties[] = "'organisation' can't be null";
        }
        if ($this->container['organisations'] === null) {
            $invalidProperties[] = "'organisations' can't be null";
        }
        if ($this->container['groups'] === null) {
            $invalidProperties[] = "'groups' can't be null";
        }
        if ($this->container['permissions'] === null) {
            $invalidProperties[] = "'permissions' can't be null";
        }
        if ($this->container['token_ttl'] === null) {
            $invalidProperties[] = "'token_ttl' can't be null";
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
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Authentication token to use in X-Auth-Token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Reepay\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Reepay\Model\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Reepay\Model\Account
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Reepay\Model\Account $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets organisation
     *
     * @return \Reepay\Model\Organisation
     */
    public function getOrganisation()
    {
        return $this->container['organisation'];
    }

    /**
     * Sets organisation
     *
     * @param \Reepay\Model\Organisation $organisation organisation
     *
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->container['organisation'] = $organisation;

        return $this;
    }

    /**
     * Gets organisations
     *
     * @return \Reepay\Model\OrganisationLogin[]
     */
    public function getOrganisations()
    {
        return $this->container['organisations'];
    }

    /**
     * Sets organisations
     *
     * @param \Reepay\Model\OrganisationLogin[] $organisations List of organisations for user
     *
     * @return $this
     */
    public function setOrganisations($organisations)
    {
        $this->container['organisations'] = $organisations;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[] $groups List user groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string[] $permissions List user permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets token_ttl
     *
     * @return int
     */
    public function getTokenTtl()
    {
        return $this->container['token_ttl'];
    }

    /**
     * Sets token_ttl
     *
     * @param int $token_ttl Token time-to-live in minutes
     *
     * @return $this
     */
    public function setTokenTtl($token_ttl)
    {
        $this->container['token_ttl'] = $token_ttl;

        return $this;
    }

    /**
     * Gets mfa_required
     *
     * @return bool
     */
    public function getMfaRequired()
    {
        return $this->container['mfa_required'];
    }

    /**
     * Sets mfa_required
     *
     * @param bool $mfa_required User needs to add MFA
     *
     * @return $this
     */
    public function setMfaRequired($mfa_required)
    {
        $this->container['mfa_required'] = $mfa_required;

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
