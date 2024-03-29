<?php
/**
 * Refund
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
 * Refund Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Refund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'state' => 'string',
        'invoice' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'transaction' => 'string',
        'error' => 'string',
        'type' => 'string',
        'created' => '\DateTime',
        'credit_note_id' => 'string',
        'ref_transaction' => 'string',
        'error_state' => 'string',
        'acquirer_message' => 'string',
        'accounting_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'state' => null,
        'invoice' => null,
        'amount' => 'int32',
        'currency' => null,
        'transaction' => null,
        'error' => null,
        'type' => null,
        'created' => 'date-time',
        'credit_note_id' => null,
        'ref_transaction' => null,
        'error_state' => null,
        'acquirer_message' => null,
        'accounting_number' => null
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
        'id' => 'id',
        'state' => 'state',
        'invoice' => 'invoice',
        'amount' => 'amount',
        'currency' => 'currency',
        'transaction' => 'transaction',
        'error' => 'error',
        'type' => 'type',
        'created' => 'created',
        'credit_note_id' => 'credit_note_id',
        'ref_transaction' => 'ref_transaction',
        'error_state' => 'error_state',
        'acquirer_message' => 'acquirer_message',
        'accounting_number' => 'accounting_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'invoice' => 'setInvoice',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'transaction' => 'setTransaction',
        'error' => 'setError',
        'type' => 'setType',
        'created' => 'setCreated',
        'credit_note_id' => 'setCreditNoteId',
        'ref_transaction' => 'setRefTransaction',
        'error_state' => 'setErrorState',
        'acquirer_message' => 'setAcquirerMessage',
        'accounting_number' => 'setAccountingNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'invoice' => 'getInvoice',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'transaction' => 'getTransaction',
        'error' => 'getError',
        'type' => 'getType',
        'created' => 'getCreated',
        'credit_note_id' => 'getCreditNoteId',
        'ref_transaction' => 'getRefTransaction',
        'error_state' => 'getErrorState',
        'acquirer_message' => 'getAcquirerMessage',
        'accounting_number' => 'getAccountingNumber'
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

    const STATE_REFUNDED = 'refunded';
    const STATE_FAILED = 'failed';
    const STATE_PROCESSING = 'processing';
    const TYPE_CARD = 'card';
    const TYPE_MPO = 'mpo';
    const TYPE_MOBILEPAY = 'mobilepay';
    const TYPE_VIPPS = 'vipps';
    const TYPE_VIPPS_RECURRING = 'vipps_recurring';
    const TYPE_SWISH = 'swish';
    const TYPE_VIABILL = 'viabill';
    const TYPE_ANYDAY = 'anyday';
    const TYPE_MANUAL = 'manual';
    const TYPE_APPLEPAY = 'applepay';
    const TYPE_GOOGLEPAY = 'googlepay';
    const TYPE_PAYPAL = 'paypal';
    const TYPE_KLARNA_PAY_NOW = 'klarna_pay_now';
    const TYPE_KLARNA_PAY_LATER = 'klarna_pay_later';
    const TYPE_KLARNA_SLICE_IT = 'klarna_slice_it';
    const TYPE_KLARNA_DIRECT_BANK_TRANSFER = 'klarna_direct_bank_transfer';
    const TYPE_KLARNA_DIRECT_DEBIT = 'klarna_direct_debit';
    const TYPE_RESURS = 'resurs';
    const TYPE_MOBILEPAY_SUBSCRIPTIONS = 'mobilepay_subscriptions';
    const TYPE_EMV_TOKEN = 'emv_token';
    const TYPE_BCMC = 'bcmc';
    const TYPE_BLIK = 'blik';
    const TYPE_PP_BLIK_OC = 'pp_blik_oc';
    const TYPE_GIROPAY = 'giropay';
    const TYPE_IDEAL = 'ideal';
    const TYPE_P24 = 'p24';
    const TYPE_SEPA = 'sepa';
    const TYPE_VERKKOPANKKI = 'verkkopankki';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_REFUNDED,
            self::STATE_FAILED,
            self::STATE_PROCESSING,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CARD,
            self::TYPE_MPO,
            self::TYPE_MOBILEPAY,
            self::TYPE_VIPPS,
            self::TYPE_VIPPS_RECURRING,
            self::TYPE_SWISH,
            self::TYPE_VIABILL,
            self::TYPE_ANYDAY,
            self::TYPE_MANUAL,
            self::TYPE_APPLEPAY,
            self::TYPE_GOOGLEPAY,
            self::TYPE_PAYPAL,
            self::TYPE_KLARNA_PAY_NOW,
            self::TYPE_KLARNA_PAY_LATER,
            self::TYPE_KLARNA_SLICE_IT,
            self::TYPE_KLARNA_DIRECT_BANK_TRANSFER,
            self::TYPE_KLARNA_DIRECT_DEBIT,
            self::TYPE_RESURS,
            self::TYPE_MOBILEPAY_SUBSCRIPTIONS,
            self::TYPE_EMV_TOKEN,
            self::TYPE_BCMC,
            self::TYPE_BLIK,
            self::TYPE_PP_BLIK_OC,
            self::TYPE_GIROPAY,
            self::TYPE_IDEAL,
            self::TYPE_P24,
            self::TYPE_SEPA,
            self::TYPE_VERKKOPANKKI,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorStateAllowableValues()
    {
        return [
            self::ERROR_STATE_HARD_DECLINED,
            self::ERROR_STATE_PROCESSING_ERROR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['credit_note_id'] = isset($data['credit_note_id']) ? $data['credit_note_id'] : null;
        $this->container['ref_transaction'] = isset($data['ref_transaction']) ? $data['ref_transaction'] : null;
        $this->container['error_state'] = isset($data['error_state']) ? $data['error_state'] : null;
        $this->container['acquirer_message'] = isset($data['acquirer_message']) ? $data['acquirer_message'] : null;
        $this->container['accounting_number'] = isset($data['accounting_number']) ? $data['accounting_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['invoice'] === null) {
            $invalidProperties[] = "'invoice' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['transaction'] === null) {
            $invalidProperties[] = "'transaction' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        $allowedValues = $this->getErrorStateAllowableValues();
        if (!is_null($this->container['error_state']) && !in_array($this->container['error_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'error_state', must be one of '%s'",
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Refund id assigned by Reepay
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The refund state either `refunded`, `failed` or `processing`. The processing state can only be returned for asynchronous payment method (not card).
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
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
     * @param string $invoice Invoice/charge handle
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

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
     * @param int $amount Refunded amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency for the account in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return string
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param string $transaction Transaction id assigned by Reepay
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error Reepay error code if failed. See [transaction errors](https://reference.reepay.com/api/#transaction-errors).
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of refund, either `card`, `mpo`, `mobilepay`, `vipps`, `vipps_recurring`, `swish`, `viabill`, `anyday`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs`, `mobilepay_subscriptions`, `emv_token`, `bcmc`, `blik`, `pp_blik_oc`, `giropay`, `ideal`, `p24`, `sepa`, or `verkkopankki`
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param \DateTime $created When the refund was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets credit_note_id
     *
     * @return string
     */
    public function getCreditNoteId()
    {
        return $this->container['credit_note_id'];
    }

    /**
     * Sets credit_note_id
     *
     * @param string $credit_note_id Credit note id for successful refund
     *
     * @return $this
     */
    public function setCreditNoteId($credit_note_id)
    {
        $this->container['credit_note_id'] = $credit_note_id;

        return $this;
    }

    /**
     * Gets ref_transaction
     *
     * @return string
     */
    public function getRefTransaction()
    {
        return $this->container['ref_transaction'];
    }

    /**
     * Sets ref_transaction
     *
     * @param string $ref_transaction Id of a possible settled transaction that has been refunded
     *
     * @return $this
     */
    public function setRefTransaction($ref_transaction)
    {
        $this->container['ref_transaction'] = $ref_transaction;

        return $this;
    }

    /**
     * Gets error_state
     *
     * @return string
     */
    public function getErrorState()
    {
        return $this->container['error_state'];
    }

    /**
     * Sets error_state
     *
     * @param string $error_state Reepay error state if failed: `hard_declined` or `processing_error`. A hard decline indicates a refund decline by acquirer. A processing error indicates an error processing the refund either at Reepay, the acquirer, or between Reepay and the acquirer.
     *
     * @return $this
     */
    public function setErrorState($error_state)
    {
        $allowedValues = $this->getErrorStateAllowableValues();
        if (!is_null($error_state) && !in_array($error_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_state'] = $error_state;

        return $this;
    }

    /**
     * Gets acquirer_message
     *
     * @return string
     */
    public function getAcquirerMessage()
    {
        return $this->container['acquirer_message'];
    }

    /**
     * Sets acquirer_message
     *
     * @param string $acquirer_message Acquirer message in case of error
     *
     * @return $this
     */
    public function setAcquirerMessage($acquirer_message)
    {
        $this->container['acquirer_message'] = $acquirer_message;

        return $this;
    }

    /**
     * Gets accounting_number
     *
     * @return string
     */
    public function getAccountingNumber()
    {
        return $this->container['accounting_number'];
    }

    /**
     * Sets accounting_number
     *
     * @param string $accounting_number Invoice accounting number
     *
     * @return $this
     */
    public function setAccountingNumber($accounting_number)
    {
        $this->container['accounting_number'] = $accounting_number;

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
