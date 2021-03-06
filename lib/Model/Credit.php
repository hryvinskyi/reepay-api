<?php
/**
 * Credit
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
 * Credit Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Credit implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Credit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'subscription' => 'string',
        'handle' => 'string',
        'amount' => 'int',
        'text' => 'string',
        'state' => 'string',
        'created' => '\DateTime',
        'valid_from' => 'string',
        'credit_invoices' => '\Reepay\Model\CreditInvoice[]',
        'pending_amount' => 'int',
        'invoice_credit_note' => '\Reepay\Model\InvoiceCreditNote'
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
        'subscription' => 'subscription',
        'handle' => 'handle',
        'amount' => 'amount',
        'text' => 'text',
        'state' => 'state',
        'created' => 'created',
        'valid_from' => 'valid_from',
        'credit_invoices' => 'credit_invoices',
        'pending_amount' => 'pending_amount',
        'invoice_credit_note' => 'invoice_credit_note'
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
        'subscription' => 'setSubscription',
        'handle' => 'setHandle',
        'amount' => 'setAmount',
        'text' => 'setText',
        'state' => 'setState',
        'created' => 'setCreated',
        'valid_from' => 'setValidFrom',
        'credit_invoices' => 'setCreditInvoices',
        'pending_amount' => 'setPendingAmount',
        'invoice_credit_note' => 'setInvoiceCreditNote'
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
        'subscription' => 'getSubscription',
        'handle' => 'getHandle',
        'amount' => 'getAmount',
        'text' => 'getText',
        'state' => 'getState',
        'created' => 'getCreated',
        'valid_from' => 'getValidFrom',
        'credit_invoices' => 'getCreditInvoices',
        'pending_amount' => 'getPendingAmount',
        'invoice_credit_note' => 'getInvoiceCreditNote'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATE_PENDING = 'pending';
    const STATE_TRANSFERRED = 'transferred';
    const STATE_CANCELLED = 'cancelled';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_TRANSFERRED,
            self::STATE_CANCELLED,
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
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['credit_invoices'] = isset($data['credit_invoices']) ? $data['credit_invoices'] : null;
        $this->container['pending_amount'] = isset($data['pending_amount']) ? $data['pending_amount'] : null;
        $this->container['invoice_credit_note'] = isset($data['invoice_credit_note']) ? $data['invoice_credit_note'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['subscription'] === null) {
            $invalid_properties[] = "'subscription' can't be null";
        }
        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.0.";
        }

        if ($this->container['text'] === null) {
            $invalid_properties[] = "'text' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = array("pending", "transferred", "cancelled");
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['pending_amount'] === null) {
            $invalid_properties[] = "'pending_amount' can't be null";
        }
        if (($this->container['pending_amount'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'pending_amount', must be bigger than or equal to 0.0.";
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
        if ($this->container['subscription'] === null) {
            return false;
        }
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0.0) {
            return false;
        }
        if ($this->container['text'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = array("pending", "transferred", "cancelled");
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['pending_amount'] === null) {
            return false;
        }
        if ($this->container['pending_amount'] < 0.0) {
            return false;
        }
        return true;
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
     * @param string $subscription Subscription by handle to add the credit to
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
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
     * @param string $handle Per account unique handle for the credit. Max length 255 with allowable characters [a-zA-Z0-9_.-@].
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

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
     * @param int $amount Credit amount in the smallest unit for the account currency
     * @return $this
     */
    public function setAmount($amount)
    {

        if ($amount < 0.0) {
            throw new \InvalidArgumentException('invalid value for $amount when calling Credit., must be bigger than or equal to 0.0.');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text Text describing the credit. Will be on affected invoices.
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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
     * @param string $state State of the credit, one of the following: `pending`, `transferred`, `cancelled`. Pending credits have not yet been transferred fully to invoices. Cancelled credits have been manually cancelled.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('pending', 'transferred', 'cancelled');
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'pending', 'transferred', 'cancelled'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created Date when the credit was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets valid_from
     * @return string
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     * @param string $valid_from Date on the form yyyy-MM-dd from which the credit is valid. The credit will not be deducted from invoices before this date.
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets credit_invoices
     * @return \Reepay\Model\CreditInvoice[]
     */
    public function getCreditInvoices()
    {
        return $this->container['credit_invoices'];
    }

    /**
     * Sets credit_invoices
     * @param \Reepay\Model\CreditInvoice[] $credit_invoices List of invoices where the credit is applied
     * @return $this
     */
    public function setCreditInvoices($credit_invoices)
    {
        $this->container['credit_invoices'] = $credit_invoices;

        return $this;
    }

    /**
     * Gets pending_amount
     * @return int
     */
    public function getPendingAmount()
    {
        return $this->container['pending_amount'];
    }

    /**
     * Sets pending_amount
     * @param int $pending_amount Remaining amount not transferred to invoices
     * @return $this
     */
    public function setPendingAmount($pending_amount)
    {

        if ($pending_amount < 0.0) {
            throw new \InvalidArgumentException('invalid value for $pending_amount when calling Credit., must be bigger than or equal to 0.0.');
        }
        $this->container['pending_amount'] = $pending_amount;

        return $this;
    }

    /**
     * Gets invoice_credit_note
     * @return \Reepay\Model\InvoiceCreditNote
     */
    public function getInvoiceCreditNote()
    {
        return $this->container['invoice_credit_note'];
    }

    /**
     * Sets invoice_credit_note
     * @param \Reepay\Model\InvoiceCreditNote $invoice_credit_note Invoice credit note if this credit was the result of crediting an invoice
     * @return $this
     */
    public function setInvoiceCreditNote($invoice_credit_note)
    {
        $this->container['invoice_credit_note'] = $invoice_credit_note;

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


