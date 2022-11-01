<?php
/**
 * CreateRefund
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
 * CreateRefund Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateRefund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateRefund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice' => 'string',
        'key' => 'string',
        'amount' => 'int',
        'text' => 'string',
        'noteLines' => '\Reepay\Model\CreateCreditNoteLine[]',
        'manualTransfer' => '\Reepay\Model\ManualRefundTransfer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice' => null,
        'key' => null,
        'amount' => 'int32',
        'text' => null,
        'noteLines' => null,
        'manualTransfer' => null
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
        'invoice' => 'invoice',
        'key' => 'key',
        'amount' => 'amount',
        'text' => 'text',
        'noteLines' => 'note_lines',
        'manualTransfer' => 'manual_transfer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice' => 'setInvoice',
        'key' => 'setKey',
        'amount' => 'setAmount',
        'text' => 'setText',
        'noteLines' => 'setNoteLines',
        'manualTransfer' => 'setManualTransfer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice' => 'getInvoice',
        'key' => 'getKey',
        'amount' => 'getAmount',
        'text' => 'getText',
        'noteLines' => 'getNoteLines',
        'manualTransfer' => 'getManualTransfer'
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
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['noteLines'] = isset($data['noteLines']) ? $data['noteLines'] : null;
        $this->container['manualTransfer'] = isset($data['manualTransfer']) ? $data['manualTransfer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoice'] === null) {
            $invalidProperties[] = "'invoice' can't be null";
        }
        if (!is_null($this->container['amount']) && ($this->container['amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
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
     * Gets invoice
     *
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param string $invoice Handle or id for invoice/charge to refund
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key Optional idempotency key. Only one refund can be performed for the same key. An idempotency key identifies uniquely the request and multiple requests with the same key and invoice will yield the same result. In case of networking errors the same request with same key can safely be retried.
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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
     * @param int $amount Optional amount in the smallest unit for the account currency. Either `amount` or `note_lines` can be provided, if neither is provided the full refundable amount is refunded.
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateRefund., must be bigger than or equal to 1.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Optional refund text to use on credit note. Used in conjunction with `amount`. Ignored if `note_lines` is provided.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets noteLines
     *
     * @return \Reepay\Model\CreateCreditNoteLine[]
     */
    public function getNoteLines()
    {
        return $this->container['noteLines'];
    }

    /**
     * Sets noteLines
     *
     * @param \Reepay\Model\CreateCreditNoteLine[] $noteLines Refund credit note lines to give detailed information for credit note. Alternative to `amount`.
     *
     * @return $this
     */
    public function setNoteLines($noteLines)
    {
        $this->container['noteLines'] = $noteLines;

        return $this;
    }

    /**
     * Gets manualTransfer
     *
     * @return \Reepay\Model\ManualRefundTransfer
     */
    public function getManualTransfer()
    {
        return $this->container['manualTransfer'];
    }

    /**
     * Sets manualTransfer
     *
     * @param \Reepay\Model\ManualRefundTransfer $manualTransfer Optional manual transfer. If given no refund will be performed on potential online settled transaction like card transaction.
     *
     * @return $this
     */
    public function setManualTransfer($manualTransfer)
    {
        $this->container['manualTransfer'] = $manualTransfer;

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


