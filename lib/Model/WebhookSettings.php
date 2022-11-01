<?php
/**
 * WebhookSettings
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
 * WebhookSettings Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'urls' => 'string[]',
        'username' => 'string',
        'password' => 'string',
        'disabled' => 'bool',
        'secret' => 'string',
        'alertEmails' => 'string[]',
        'alertCount' => 'int',
        'eventTypes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'urls' => null,
        'username' => null,
        'password' => null,
        'disabled' => null,
        'secret' => null,
        'alertEmails' => null,
        'alertCount' => 'int32',
        'eventTypes' => null
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
        'urls' => 'urls',
        'username' => 'username',
        'password' => 'password',
        'disabled' => 'disabled',
        'secret' => 'secret',
        'alertEmails' => 'alert_emails',
        'alertCount' => 'alert_count',
        'eventTypes' => 'event_types'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'urls' => 'setUrls',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'disabled' => 'setDisabled',
        'secret' => 'setSecret',
        'alertEmails' => 'setAlertEmails',
        'alertCount' => 'setAlertCount',
        'eventTypes' => 'setEventTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'urls' => 'getUrls',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'disabled' => 'getDisabled',
        'secret' => 'getSecret',
        'alertEmails' => 'getAlertEmails',
        'alertCount' => 'getAlertCount',
        'eventTypes' => 'getEventTypes'
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
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['alertEmails'] = isset($data['alertEmails']) ? $data['alertEmails'] : null;
        $this->container['alertCount'] = isset($data['alertCount']) ? $data['alertCount'] : null;
        $this->container['eventTypes'] = isset($data['eventTypes']) ? $data['eventTypes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['urls'] === null) {
            $invalidProperties[] = "'urls' can't be null";
        }
        if ($this->container['disabled'] === null) {
            $invalidProperties[] = "'disabled' can't be null";
        }
        if ($this->container['secret'] === null) {
            $invalidProperties[] = "'secret' can't be null";
        }
        if (!is_null($this->container['alertCount']) && ($this->container['alertCount'] < 4)) {
            $invalidProperties[] = "invalid value for 'alertCount', must be bigger than or equal to 4.";
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
     * Gets urls
     *
     * @return string[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param string[] $urls Webhook urls
     *
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username Optional HTTP Basic Auth username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Optional HTTP Basic Auth password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool $disabled Webhook disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string $secret Webhook secret used for signature
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets alertEmails
     *
     * @return string[]
     */
    public function getAlertEmails()
    {
        return $this->container['alertEmails'];
    }

    /**
     * Sets alertEmails
     *
     * @param string[] $alertEmails Optional list of emails to send alert to if webhook fails
     *
     * @return $this
     */
    public function setAlertEmails($alertEmails)
    {
        $this->container['alertEmails'] = $alertEmails;

        return $this;
    }

    /**
     * Gets alertCount
     *
     * @return int
     */
    public function getAlertCount()
    {
        return $this->container['alertCount'];
    }

    /**
     * Sets alertCount
     *
     * @param int $alertCount Number of requests to perform before alert email is sent, must be greater than or equal to four (1 hour)
     *
     * @return $this
     */
    public function setAlertCount($alertCount)
    {

        if (!is_null($alertCount) && ($alertCount < 4)) {
            throw new \InvalidArgumentException('invalid value for $alertCount when calling WebhookSettings., must be bigger than or equal to 4.');
        }

        $this->container['alertCount'] = $alertCount;

        return $this;
    }

    /**
     * Gets eventTypes
     *
     * @return string[]
     */
    public function getEventTypes()
    {
        return $this->container['eventTypes'];
    }

    /**
     * Sets eventTypes
     *
     * @param string[] $eventTypes List of event types to receive. See documentation for valid event types.
     *
     * @return $this
     */
    public function setEventTypes($eventTypes)
    {
        $this->container['eventTypes'] = $eventTypes;

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


