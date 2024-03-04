<?php
/**
 * UpdateDunningPlan
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
 * UpdateDunningPlan Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateDunningPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateDunningPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'schedule' => 'int[]',
        'default_plan' => 'bool',
        'final_subscription_action' => 'string',
        'grace_period' => 'string',
        'no_grace_hard_decline' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'schedule' => 'int32',
        'default_plan' => null,
        'final_subscription_action' => null,
        'grace_period' => null,
        'no_grace_hard_decline' => null
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
        'name' => 'name',
        'schedule' => 'schedule',
        'default_plan' => 'default_plan',
        'final_subscription_action' => 'final_subscription_action',
        'grace_period' => 'grace_period',
        'no_grace_hard_decline' => 'no_grace_hard_decline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'schedule' => 'setSchedule',
        'default_plan' => 'setDefaultPlan',
        'final_subscription_action' => 'setFinalSubscriptionAction',
        'grace_period' => 'setGracePeriod',
        'no_grace_hard_decline' => 'setNoGraceHardDecline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'schedule' => 'getSchedule',
        'default_plan' => 'getDefaultPlan',
        'final_subscription_action' => 'getFinalSubscriptionAction',
        'grace_period' => 'getGracePeriod',
        'no_grace_hard_decline' => 'getNoGraceHardDecline'
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

    const FINAL_SUBSCRIPTION_ACTION_EXPIRE = 'expire';
    const FINAL_SUBSCRIPTION_ACTION_ON_HOLD = 'on_hold';
    const FINAL_SUBSCRIPTION_ACTION_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFinalSubscriptionActionAllowableValues()
    {
        return [
            self::FINAL_SUBSCRIPTION_ACTION_EXPIRE,
            self::FINAL_SUBSCRIPTION_ACTION_ON_HOLD,
            self::FINAL_SUBSCRIPTION_ACTION_NONE,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['default_plan'] = isset($data['default_plan']) ? $data['default_plan'] : null;
        $this->container['final_subscription_action'] = isset($data['final_subscription_action']) ? $data['final_subscription_action'] : null;
        $this->container['grace_period'] = isset($data['grace_period']) ? $data['grace_period'] : null;
        $this->container['no_grace_hard_decline'] = isset($data['no_grace_hard_decline']) ? $data['no_grace_hard_decline'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['schedule'] === null) {
            $invalidProperties[] = "'schedule' can't be null";
        }
        if ($this->container['default_plan'] === null) {
            $invalidProperties[] = "'default_plan' can't be null";
        }
        if ($this->container['final_subscription_action'] === null) {
            $invalidProperties[] = "'final_subscription_action' can't be null";
        }
        $allowedValues = $this->getFinalSubscriptionActionAllowableValues();
        if (!is_null($this->container['final_subscription_action']) && !in_array($this->container['final_subscription_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'final_subscription_action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Dunning plan name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return int[]
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param int[] $schedule The schedule as list of intervals in days
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets default_plan
     *
     * @return bool
     */
    public function getDefaultPlan()
    {
        return $this->container['default_plan'];
    }

    /**
     * Sets default_plan
     *
     * @param bool $default_plan If this is default plan
     *
     * @return $this
     */
    public function setDefaultPlan($default_plan)
    {
        $this->container['default_plan'] = $default_plan;

        return $this;
    }

    /**
     * Gets final_subscription_action
     *
     * @return string
     */
    public function getFinalSubscriptionAction()
    {
        return $this->container['final_subscription_action'];
    }

    /**
     * Sets final_subscription_action
     *
     * @param string $final_subscription_action Action to take for subscription if dunning fails, one of the following: `expire`, `on_hold`, `none`
     *
     * @return $this
     */
    public function setFinalSubscriptionAction($final_subscription_action)
    {
        $allowedValues = $this->getFinalSubscriptionActionAllowableValues();
        if (!in_array($final_subscription_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'final_subscription_action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['final_subscription_action'] = $final_subscription_action;

        return $this;
    }

    /**
     * Gets grace_period
     *
     * @return string
     */
    public function getGracePeriod()
    {
        return $this->container['grace_period'];
    }

    /**
     * Sets grace_period
     *
     * @param string $grace_period Optional grace period before starting dunning process. Also see `no_grace_hard_decline`. If eligible re-trying will be attempted in the grace period. The period is defined as an ISO-8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
     *
     * @return $this
     */
    public function setGracePeriod($grace_period)
    {
        $this->container['grace_period'] = $grace_period;

        return $this;
    }

    /**
     * Gets no_grace_hard_decline
     *
     * @return bool
     */
    public function getNoGraceHardDecline()
    {
        return $this->container['no_grace_hard_decline'];
    }

    /**
     * Sets no_grace_hard_decline
     *
     * @param bool $no_grace_hard_decline If a grace period has been defined, this parameter can be used to control whether the grace period is only for soft failing invoices. That is, the used payment method is actually eligible for retrying. Default is true.
     *
     * @return $this
     */
    public function setNoGraceHardDecline($no_grace_hard_decline)
    {
        $this->container['no_grace_hard_decline'] = $no_grace_hard_decline;

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
