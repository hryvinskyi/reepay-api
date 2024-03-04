<?php
/**
 * SubscriptionChange
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

use ArrayAccess;
use Reepay\ObjectSerializer;

/**
 * SubscriptionChange Class Doc Comment
 *
 * @category Class
 * @description List of subscription changes both at most one pending and previously applied
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionChange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'plan' => 'string',
        'amount' => 'int',
        'quantity' => 'int',
        'pending' => 'bool',
        'applied' => '\DateTime',
        'updated' => '\DateTime',
        'created' => '\DateTime',
        'amount_incl_vat' => 'bool',
        'subscription_add_ons' => '\Reepay\Model\SubscriptionAddOn[]',
        'remove_add_ons' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'plan' => null,
        'amount' => 'int32',
        'quantity' => 'int32',
        'pending' => null,
        'applied' => 'date-time',
        'updated' => 'date-time',
        'created' => 'date-time',
        'amount_incl_vat' => null,
        'subscription_add_ons' => null,
        'remove_add_ons' => null
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
        'plan' => 'plan',
        'amount' => 'amount',
        'quantity' => 'quantity',
        'pending' => 'pending',
        'applied' => 'applied',
        'updated' => 'updated',
        'created' => 'created',
        'amount_incl_vat' => 'amount_incl_vat',
        'subscription_add_ons' => 'subscription_add_ons',
        'remove_add_ons' => 'remove_add_ons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plan' => 'setPlan',
        'amount' => 'setAmount',
        'quantity' => 'setQuantity',
        'pending' => 'setPending',
        'applied' => 'setApplied',
        'updated' => 'setUpdated',
        'created' => 'setCreated',
        'amount_incl_vat' => 'setAmountInclVat',
        'subscription_add_ons' => 'setSubscriptionAddOns',
        'remove_add_ons' => 'setRemoveAddOns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plan' => 'getPlan',
        'amount' => 'getAmount',
        'quantity' => 'getQuantity',
        'pending' => 'getPending',
        'applied' => 'getApplied',
        'updated' => 'getUpdated',
        'created' => 'getCreated',
        'amount_incl_vat' => 'getAmountInclVat',
        'subscription_add_ons' => 'getSubscriptionAddOns',
        'remove_add_ons' => 'getRemoveAddOns'
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
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['pending'] = isset($data['pending']) ? $data['pending'] : null;
        $this->container['applied'] = isset($data['applied']) ? $data['applied'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
        $this->container['subscription_add_ons'] = isset($data['subscription_add_ons']) ? $data['subscription_add_ons'] : null;
        $this->container['remove_add_ons'] = isset($data['remove_add_ons']) ? $data['remove_add_ons'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pending'] === null) {
            $invalidProperties[] = "'pending' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
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
     * Gets plan
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param string $plan The handle of the plan to change to
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Optional custom per quantity plan price. If provided the plan price billed for each billing period will be overridden by this price.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets pending
     *
     * @return bool
     */
    public function getPending()
    {
        return $this->container['pending'];
    }

    /**
     * Sets pending
     *
     * @param bool $pending Whether this is a pending change at next renewal, or it has been applied
     *
     * @return $this
     */
    public function setPending($pending)
    {
        $this->container['pending'] = $pending;

        return $this;
    }

    /**
     * Gets applied
     *
     * @return \DateTime
     */
    public function getApplied()
    {
        return $this->container['applied'];
    }

    /**
     * Sets applied
     *
     * @param \DateTime $applied If defined the change was applied on this date and time
     *
     * @return $this
     */
    public function setApplied($applied)
    {
        $this->container['applied'] = $applied;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated Date and time of update of pending change
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created Date when the change was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets amount_incl_vat
     *
     * @return bool
     */
    public function getAmountInclVat()
    {
        return $this->container['amount_incl_vat'];
    }

    /**
     * Sets amount_incl_vat
     *
     * @param bool $amount_incl_vat Whether the optional amount is including VAT. Defaults to true.
     *
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

        return $this;
    }

    /**
     * Gets subscription_add_ons
     *
     * @return \Reepay\Model\SubscriptionAddOn[]
     */
    public function getSubscriptionAddOns()
    {
        return $this->container['subscription_add_ons'];
    }

    /**
     * Sets subscription_add_ons
     *
     * @param \Reepay\Model\SubscriptionAddOn[] $subscription_add_ons List of subscription add-ons to create in change
     *
     * @return $this
     */
    public function setSubscriptionAddOns($subscription_add_ons)
    {
        $this->container['subscription_add_ons'] = $subscription_add_ons;

        return $this;
    }

    /**
     * Gets remove_add_ons
     *
     * @return string[]
     */
    public function getRemoveAddOns()
    {
        return $this->container['remove_add_ons'];
    }

    /**
     * Sets remove_add_ons
     *
     * @param string[] $remove_add_ons Subscription add-ons to remove from subscription by subscription add-on handle
     *
     * @return $this
     */
    public function setRemoveAddOns($remove_add_ons)
    {
        $this->container['remove_add_ons'] = $remove_add_ons;

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
