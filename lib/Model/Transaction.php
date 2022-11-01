<?php
/**
 * Transaction
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
 * Transaction Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'state' => 'string',
        'invoice' => 'string',
        'type' => 'string',
        'amount' => 'int',
        'settled' => '\DateTime',
        'authorized' => '\DateTime',
        'failed' => '\DateTime',
        'refunded' => '\DateTime',
        'created' => '\DateTime',
        'paymentType' => 'string',
        'cardTransaction' => '\Reepay\Model\CardTransaction',
        'mpoTransaction' => '\Reepay\Model\CardTransaction',
        'vippsTransaction' => '\Reepay\Model\CardTransaction',
        'applepayTransaction' => '\Reepay\Model\CardTransaction',
        'googlepayTransaction' => '\Reepay\Model\CardTransaction',
        'manualTransaction' => '\Reepay\Model\ManualTransaction',
        'viabillTransaction' => '\Reepay\Model\ViabillTransaction',
        'anydayTransaction' => '\Reepay\Model\AnydayTransaction',
        'resursTransaction' => '\Reepay\Model\ResursTransaction',
        'klarnaTransaction' => '\Reepay\Model\KlarnaTransaction',
        'swishTransaction' => '\Reepay\Model\SwishTransaction',
        'paypalTransaction' => '\Reepay\Model\PaypalTransaction',
        'bancontactTransaction' => '\Reepay\Model\BancontactTransaction',
        'blikTransaction' => '\Reepay\Model\BlikTransaction',
        'giropayTransaction' => '\Reepay\Model\GiropayTransaction',
        'idealTransaction' => '\Reepay\Model\IdealTransaction',
        'p24Transaction' => '\Reepay\Model\P24Transaction',
        'sepaTransaction' => '\Reepay\Model\SepaTransaction',
        'verkkopankkiTransaction' => '\Reepay\Model\VerkkopankkiTransaction',
        'mpsTransaction' => '\Reepay\Model\MpsTransaction',
        'paymentContext' => 'string'
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
        'type' => null,
        'amount' => 'int32',
        'settled' => 'date-time',
        'authorized' => 'date-time',
        'failed' => 'date-time',
        'refunded' => 'date-time',
        'created' => 'date-time',
        'paymentType' => null,
        'cardTransaction' => null,
        'mpoTransaction' => null,
        'vippsTransaction' => null,
        'applepayTransaction' => null,
        'googlepayTransaction' => null,
        'manualTransaction' => null,
        'viabillTransaction' => null,
        'anydayTransaction' => null,
        'resursTransaction' => null,
        'klarnaTransaction' => null,
        'swishTransaction' => null,
        'paypalTransaction' => null,
        'bancontactTransaction' => null,
        'blikTransaction' => null,
        'giropayTransaction' => null,
        'idealTransaction' => null,
        'p24Transaction' => null,
        'sepaTransaction' => null,
        'verkkopankkiTransaction' => null,
        'mpsTransaction' => null,
        'paymentContext' => null
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
        'type' => 'type',
        'amount' => 'amount',
        'settled' => 'settled',
        'authorized' => 'authorized',
        'failed' => 'failed',
        'refunded' => 'refunded',
        'created' => 'created',
        'paymentType' => 'payment_type',
        'cardTransaction' => 'card_transaction',
        'mpoTransaction' => 'mpo_transaction',
        'vippsTransaction' => 'vipps_transaction',
        'applepayTransaction' => 'applepay_transaction',
        'googlepayTransaction' => 'googlepay_transaction',
        'manualTransaction' => 'manual_transaction',
        'viabillTransaction' => 'viabill_transaction',
        'anydayTransaction' => 'anyday_transaction',
        'resursTransaction' => 'resurs_transaction',
        'klarnaTransaction' => 'klarna_transaction',
        'swishTransaction' => 'swish_transaction',
        'paypalTransaction' => 'paypal_transaction',
        'bancontactTransaction' => 'bancontact_transaction',
        'blikTransaction' => 'blik_transaction',
        'giropayTransaction' => 'giropay_transaction',
        'idealTransaction' => 'ideal_transaction',
        'p24Transaction' => 'p24_transaction',
        'sepaTransaction' => 'sepa_transaction',
        'verkkopankkiTransaction' => 'verkkopankki_transaction',
        'mpsTransaction' => 'mps_transaction',
        'paymentContext' => 'payment_context'
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
        'type' => 'setType',
        'amount' => 'setAmount',
        'settled' => 'setSettled',
        'authorized' => 'setAuthorized',
        'failed' => 'setFailed',
        'refunded' => 'setRefunded',
        'created' => 'setCreated',
        'paymentType' => 'setPaymentType',
        'cardTransaction' => 'setCardTransaction',
        'mpoTransaction' => 'setMpoTransaction',
        'vippsTransaction' => 'setVippsTransaction',
        'applepayTransaction' => 'setApplepayTransaction',
        'googlepayTransaction' => 'setGooglepayTransaction',
        'manualTransaction' => 'setManualTransaction',
        'viabillTransaction' => 'setViabillTransaction',
        'anydayTransaction' => 'setAnydayTransaction',
        'resursTransaction' => 'setResursTransaction',
        'klarnaTransaction' => 'setKlarnaTransaction',
        'swishTransaction' => 'setSwishTransaction',
        'paypalTransaction' => 'setPaypalTransaction',
        'bancontactTransaction' => 'setBancontactTransaction',
        'blikTransaction' => 'setBlikTransaction',
        'giropayTransaction' => 'setGiropayTransaction',
        'idealTransaction' => 'setIdealTransaction',
        'p24Transaction' => 'setP24Transaction',
        'sepaTransaction' => 'setSepaTransaction',
        'verkkopankkiTransaction' => 'setVerkkopankkiTransaction',
        'mpsTransaction' => 'setMpsTransaction',
        'paymentContext' => 'setPaymentContext'
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
        'type' => 'getType',
        'amount' => 'getAmount',
        'settled' => 'getSettled',
        'authorized' => 'getAuthorized',
        'failed' => 'getFailed',
        'refunded' => 'getRefunded',
        'created' => 'getCreated',
        'paymentType' => 'getPaymentType',
        'cardTransaction' => 'getCardTransaction',
        'mpoTransaction' => 'getMpoTransaction',
        'vippsTransaction' => 'getVippsTransaction',
        'applepayTransaction' => 'getApplepayTransaction',
        'googlepayTransaction' => 'getGooglepayTransaction',
        'manualTransaction' => 'getManualTransaction',
        'viabillTransaction' => 'getViabillTransaction',
        'anydayTransaction' => 'getAnydayTransaction',
        'resursTransaction' => 'getResursTransaction',
        'klarnaTransaction' => 'getKlarnaTransaction',
        'swishTransaction' => 'getSwishTransaction',
        'paypalTransaction' => 'getPaypalTransaction',
        'bancontactTransaction' => 'getBancontactTransaction',
        'blikTransaction' => 'getBlikTransaction',
        'giropayTransaction' => 'getGiropayTransaction',
        'idealTransaction' => 'getIdealTransaction',
        'p24Transaction' => 'getP24Transaction',
        'sepaTransaction' => 'getSepaTransaction',
        'verkkopankkiTransaction' => 'getVerkkopankkiTransaction',
        'mpsTransaction' => 'getMpsTransaction',
        'paymentContext' => 'getPaymentContext'
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

    const STATE_PENDING = 'pending';
    const STATE_PROCESSING = 'processing';
    const STATE_AUTHORIZED = 'authorized';
    const STATE_SETTLED = 'settled';
    const STATE_REFUNDED = 'refunded';
    const STATE_FAILED = 'failed';
    const STATE_CANCELLED = 'cancelled';
    const TYPE_SETTLE = 'settle';
    const TYPE_REFUND = 'refund';
    const TYPE_AUTHORIZATION = 'authorization';
    const PAYMENT_TYPE_CARD = 'card';
    const PAYMENT_TYPE_MOBILEPAY = 'mobilepay';
    const PAYMENT_TYPE_VIPPS = 'vipps';
    const PAYMENT_TYPE_SWISH = 'swish';
    const PAYMENT_TYPE_VIABILL = 'viabill';
    const PAYMENT_TYPE_MANUAL = 'manual';
    const PAYMENT_TYPE_APPLEPAY = 'applepay';
    const PAYMENT_TYPE_GOOGLEPAY = 'googlepay';
    const PAYMENT_TYPE_PAYPAL = 'paypal';
    const PAYMENT_TYPE_KLARNA_PAY_NOW = 'klarna_pay_now';
    const PAYMENT_TYPE_KLARNA_PAY_LATER = 'klarna_pay_later';
    const PAYMENT_TYPE_KLARNA_SLICE_IT = 'klarna_slice_it';
    const PAYMENT_TYPE_KLARNA_DIRECT_BANK_TRANSFER = 'klarna_direct_bank_transfer';
    const PAYMENT_TYPE_KLARNA_DIRECT_DEBIT = 'klarna_direct_debit';
    const PAYMENT_TYPE_RESURS = 'resurs';
    const PAYMENT_TYPE_MOBILEPAY_SUBSCRIPTIONS = 'mobilepay_subscriptions';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_PROCESSING,
            self::STATE_AUTHORIZED,
            self::STATE_SETTLED,
            self::STATE_REFUNDED,
            self::STATE_FAILED,
            self::STATE_CANCELLED,
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
            self::TYPE_SETTLE,
            self::TYPE_REFUND,
            self::TYPE_AUTHORIZATION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_CARD,
            self::PAYMENT_TYPE_MOBILEPAY,
            self::PAYMENT_TYPE_VIPPS,
            self::PAYMENT_TYPE_SWISH,
            self::PAYMENT_TYPE_VIABILL,
            self::PAYMENT_TYPE_MANUAL,
            self::PAYMENT_TYPE_APPLEPAY,
            self::PAYMENT_TYPE_GOOGLEPAY,
            self::PAYMENT_TYPE_PAYPAL,
            self::PAYMENT_TYPE_KLARNA_PAY_NOW,
            self::PAYMENT_TYPE_KLARNA_PAY_LATER,
            self::PAYMENT_TYPE_KLARNA_SLICE_IT,
            self::PAYMENT_TYPE_KLARNA_DIRECT_BANK_TRANSFER,
            self::PAYMENT_TYPE_KLARNA_DIRECT_DEBIT,
            self::PAYMENT_TYPE_RESURS,
            self::PAYMENT_TYPE_MOBILEPAY_SUBSCRIPTIONS,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['settled'] = isset($data['settled']) ? $data['settled'] : null;
        $this->container['authorized'] = isset($data['authorized']) ? $data['authorized'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['refunded'] = isset($data['refunded']) ? $data['refunded'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
        $this->container['cardTransaction'] = isset($data['cardTransaction']) ? $data['cardTransaction'] : null;
        $this->container['mpoTransaction'] = isset($data['mpoTransaction']) ? $data['mpoTransaction'] : null;
        $this->container['vippsTransaction'] = isset($data['vippsTransaction']) ? $data['vippsTransaction'] : null;
        $this->container['applepayTransaction'] = isset($data['applepayTransaction']) ? $data['applepayTransaction'] : null;
        $this->container['googlepayTransaction'] = isset($data['googlepayTransaction']) ? $data['googlepayTransaction'] : null;
        $this->container['manualTransaction'] = isset($data['manualTransaction']) ? $data['manualTransaction'] : null;
        $this->container['viabillTransaction'] = isset($data['viabillTransaction']) ? $data['viabillTransaction'] : null;
        $this->container['anydayTransaction'] = isset($data['anydayTransaction']) ? $data['anydayTransaction'] : null;
        $this->container['resursTransaction'] = isset($data['resursTransaction']) ? $data['resursTransaction'] : null;
        $this->container['klarnaTransaction'] = isset($data['klarnaTransaction']) ? $data['klarnaTransaction'] : null;
        $this->container['swishTransaction'] = isset($data['swishTransaction']) ? $data['swishTransaction'] : null;
        $this->container['paypalTransaction'] = isset($data['paypalTransaction']) ? $data['paypalTransaction'] : null;
        $this->container['bancontactTransaction'] = isset($data['bancontactTransaction']) ? $data['bancontactTransaction'] : null;
        $this->container['blikTransaction'] = isset($data['blikTransaction']) ? $data['blikTransaction'] : null;
        $this->container['giropayTransaction'] = isset($data['giropayTransaction']) ? $data['giropayTransaction'] : null;
        $this->container['idealTransaction'] = isset($data['idealTransaction']) ? $data['idealTransaction'] : null;
        $this->container['p24Transaction'] = isset($data['p24Transaction']) ? $data['p24Transaction'] : null;
        $this->container['sepaTransaction'] = isset($data['sepaTransaction']) ? $data['sepaTransaction'] : null;
        $this->container['verkkopankkiTransaction'] = isset($data['verkkopankkiTransaction']) ? $data['verkkopankkiTransaction'] : null;
        $this->container['mpsTransaction'] = isset($data['mpsTransaction']) ? $data['mpsTransaction'] : null;
        $this->container['paymentContext'] = isset($data['paymentContext']) ? $data['paymentContext'] : null;
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['paymentType'] === null) {
            $invalidProperties[] = "'paymentType' can't be null";
        }
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['paymentType']) && !in_array($this->container['paymentType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paymentType', must be one of '%s'",
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
     * @param string $id Transaction id assigned by Reepay
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
     * @param string $state State of the transaction, one of the following: `pending`, `processing`, `authorized`, `settled`, `refunded`, `failed`, `cancelled`
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
     * @param string $invoice Invoice handle
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

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
     * @param string $type Transaction type, one of the following: `settle`, `refund`, `authorization`
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
     * @param int $amount The transaction amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling Transaction., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets settled
     *
     * @return \DateTime
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     *
     * @param \DateTime $settled When the transaction was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setSettled($settled)
    {
        $this->container['settled'] = $settled;

        return $this;
    }

    /**
     * Gets authorized
     *
     * @return \DateTime
     */
    public function getAuthorized()
    {
        return $this->container['authorized'];
    }

    /**
     * Sets authorized
     *
     * @param \DateTime $authorized When the transaction was authorized, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setAuthorized($authorized)
    {
        $this->container['authorized'] = $authorized;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return \DateTime
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param \DateTime $failed When the transaction failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return \DateTime
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param \DateTime $refunded When the transaction was refunded, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setRefunded($refunded)
    {
        $this->container['refunded'] = $refunded;

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
     * @param \DateTime $created Date when the transaction was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     *
     * @param string $paymentType Payment type for transaction, either: `card`, `mobilepay`, `vipps`, `swish`, `viabill`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs` or `mobilepay_subscriptions`
     *
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!in_array($paymentType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'paymentType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paymentType'] = $paymentType;

        return $this;
    }

    /**
     * Gets cardTransaction
     *
     * @return \Reepay\Model\CardTransaction
     */
    public function getCardTransaction()
    {
        return $this->container['cardTransaction'];
    }

    /**
     * Sets cardTransaction
     *
     * @param \Reepay\Model\CardTransaction $cardTransaction Specifics in case of card transaction
     *
     * @return $this
     */
    public function setCardTransaction($cardTransaction)
    {
        $this->container['cardTransaction'] = $cardTransaction;

        return $this;
    }

    /**
     * Gets mpoTransaction
     *
     * @return \Reepay\Model\CardTransaction
     */
    public function getMpoTransaction()
    {
        return $this->container['mpoTransaction'];
    }

    /**
     * Sets mpoTransaction
     *
     * @param \Reepay\Model\CardTransaction $mpoTransaction Specifics in case of MobilePay Online transaction
     *
     * @return $this
     */
    public function setMpoTransaction($mpoTransaction)
    {
        $this->container['mpoTransaction'] = $mpoTransaction;

        return $this;
    }

    /**
     * Gets vippsTransaction
     *
     * @return \Reepay\Model\CardTransaction
     */
    public function getVippsTransaction()
    {
        return $this->container['vippsTransaction'];
    }

    /**
     * Sets vippsTransaction
     *
     * @param \Reepay\Model\CardTransaction $vippsTransaction Specifics in case of Vipps transaction
     *
     * @return $this
     */
    public function setVippsTransaction($vippsTransaction)
    {
        $this->container['vippsTransaction'] = $vippsTransaction;

        return $this;
    }

    /**
     * Gets applepayTransaction
     *
     * @return \Reepay\Model\CardTransaction
     */
    public function getApplepayTransaction()
    {
        return $this->container['applepayTransaction'];
    }

    /**
     * Sets applepayTransaction
     *
     * @param \Reepay\Model\CardTransaction $applepayTransaction Specifics in case of ApplePay transaction
     *
     * @return $this
     */
    public function setApplepayTransaction($applepayTransaction)
    {
        $this->container['applepayTransaction'] = $applepayTransaction;

        return $this;
    }

    /**
     * Gets googlepayTransaction
     *
     * @return \Reepay\Model\CardTransaction
     */
    public function getGooglepayTransaction()
    {
        return $this->container['googlepayTransaction'];
    }

    /**
     * Sets googlepayTransaction
     *
     * @param \Reepay\Model\CardTransaction $googlepayTransaction Specifics in case of GooglePay transaction
     *
     * @return $this
     */
    public function setGooglepayTransaction($googlepayTransaction)
    {
        $this->container['googlepayTransaction'] = $googlepayTransaction;

        return $this;
    }

    /**
     * Gets manualTransaction
     *
     * @return \Reepay\Model\ManualTransaction
     */
    public function getManualTransaction()
    {
        return $this->container['manualTransaction'];
    }

    /**
     * Sets manualTransaction
     *
     * @param \Reepay\Model\ManualTransaction $manualTransaction Specifics in case of manual transaction
     *
     * @return $this
     */
    public function setManualTransaction($manualTransaction)
    {
        $this->container['manualTransaction'] = $manualTransaction;

        return $this;
    }

    /**
     * Gets viabillTransaction
     *
     * @return \Reepay\Model\ViabillTransaction
     */
    public function getViabillTransaction()
    {
        return $this->container['viabillTransaction'];
    }

    /**
     * Sets viabillTransaction
     *
     * @param \Reepay\Model\ViabillTransaction $viabillTransaction Specifics in case of ViaBill transaction
     *
     * @return $this
     */
    public function setViabillTransaction($viabillTransaction)
    {
        $this->container['viabillTransaction'] = $viabillTransaction;

        return $this;
    }

    /**
     * Gets anydayTransaction
     *
     * @return \Reepay\Model\AnydayTransaction
     */
    public function getAnydayTransaction()
    {
        return $this->container['anydayTransaction'];
    }

    /**
     * Sets anydayTransaction
     *
     * @param \Reepay\Model\AnydayTransaction $anydayTransaction Specifics in case of Anyday transaction
     *
     * @return $this
     */
    public function setAnydayTransaction($anydayTransaction)
    {
        $this->container['anydayTransaction'] = $anydayTransaction;

        return $this;
    }

    /**
     * Gets resursTransaction
     *
     * @return \Reepay\Model\ResursTransaction
     */
    public function getResursTransaction()
    {
        return $this->container['resursTransaction'];
    }

    /**
     * Sets resursTransaction
     *
     * @param \Reepay\Model\ResursTransaction $resursTransaction Specifics in case of Resurs Bank transaction
     *
     * @return $this
     */
    public function setResursTransaction($resursTransaction)
    {
        $this->container['resursTransaction'] = $resursTransaction;

        return $this;
    }

    /**
     * Gets klarnaTransaction
     *
     * @return \Reepay\Model\KlarnaTransaction
     */
    public function getKlarnaTransaction()
    {
        return $this->container['klarnaTransaction'];
    }

    /**
     * Sets klarnaTransaction
     *
     * @param \Reepay\Model\KlarnaTransaction $klarnaTransaction Specifics in case of Klarna transaction
     *
     * @return $this
     */
    public function setKlarnaTransaction($klarnaTransaction)
    {
        $this->container['klarnaTransaction'] = $klarnaTransaction;

        return $this;
    }

    /**
     * Gets swishTransaction
     *
     * @return \Reepay\Model\SwishTransaction
     */
    public function getSwishTransaction()
    {
        return $this->container['swishTransaction'];
    }

    /**
     * Sets swishTransaction
     *
     * @param \Reepay\Model\SwishTransaction $swishTransaction Specifics in case of Swish transaction
     *
     * @return $this
     */
    public function setSwishTransaction($swishTransaction)
    {
        $this->container['swishTransaction'] = $swishTransaction;

        return $this;
    }

    /**
     * Gets paypalTransaction
     *
     * @return \Reepay\Model\PaypalTransaction
     */
    public function getPaypalTransaction()
    {
        return $this->container['paypalTransaction'];
    }

    /**
     * Sets paypalTransaction
     *
     * @param \Reepay\Model\PaypalTransaction $paypalTransaction Specifics in case of PayPal transaction
     *
     * @return $this
     */
    public function setPaypalTransaction($paypalTransaction)
    {
        $this->container['paypalTransaction'] = $paypalTransaction;

        return $this;
    }

    /**
     * Gets bancontactTransaction
     *
     * @return \Reepay\Model\BancontactTransaction
     */
    public function getBancontactTransaction()
    {
        return $this->container['bancontactTransaction'];
    }

    /**
     * Sets bancontactTransaction
     *
     * @param \Reepay\Model\BancontactTransaction $bancontactTransaction Specifics in case of Bancontact transaction
     *
     * @return $this
     */
    public function setBancontactTransaction($bancontactTransaction)
    {
        $this->container['bancontactTransaction'] = $bancontactTransaction;

        return $this;
    }

    /**
     * Gets blikTransaction
     *
     * @return \Reepay\Model\BlikTransaction
     */
    public function getBlikTransaction()
    {
        return $this->container['blikTransaction'];
    }

    /**
     * Sets blikTransaction
     *
     * @param \Reepay\Model\BlikTransaction $blikTransaction Specifics in case of BLIK transaction
     *
     * @return $this
     */
    public function setBlikTransaction($blikTransaction)
    {
        $this->container['blikTransaction'] = $blikTransaction;

        return $this;
    }

    /**
     * Gets giropayTransaction
     *
     * @return \Reepay\Model\GiropayTransaction
     */
    public function getGiropayTransaction()
    {
        return $this->container['giropayTransaction'];
    }

    /**
     * Sets giropayTransaction
     *
     * @param \Reepay\Model\GiropayTransaction $giropayTransaction Specifics in case of Giropay transaction
     *
     * @return $this
     */
    public function setGiropayTransaction($giropayTransaction)
    {
        $this->container['giropayTransaction'] = $giropayTransaction;

        return $this;
    }

    /**
     * Gets idealTransaction
     *
     * @return \Reepay\Model\IdealTransaction
     */
    public function getIdealTransaction()
    {
        return $this->container['idealTransaction'];
    }

    /**
     * Sets idealTransaction
     *
     * @param \Reepay\Model\IdealTransaction $idealTransaction Specifics in case of IDEAL transaction
     *
     * @return $this
     */
    public function setIdealTransaction($idealTransaction)
    {
        $this->container['idealTransaction'] = $idealTransaction;

        return $this;
    }

    /**
     * Gets p24Transaction
     *
     * @return \Reepay\Model\P24Transaction
     */
    public function getP24Transaction()
    {
        return $this->container['p24Transaction'];
    }

    /**
     * Sets p24Transaction
     *
     * @param \Reepay\Model\P24Transaction $p24Transaction Specifics in case of P24 transaction
     *
     * @return $this
     */
    public function setP24Transaction($p24Transaction)
    {
        $this->container['p24Transaction'] = $p24Transaction;

        return $this;
    }

    /**
     * Gets sepaTransaction
     *
     * @return \Reepay\Model\SepaTransaction
     */
    public function getSepaTransaction()
    {
        return $this->container['sepaTransaction'];
    }

    /**
     * Sets sepaTransaction
     *
     * @param \Reepay\Model\SepaTransaction $sepaTransaction Specifics in case of SEPA transaction
     *
     * @return $this
     */
    public function setSepaTransaction($sepaTransaction)
    {
        $this->container['sepaTransaction'] = $sepaTransaction;

        return $this;
    }

    /**
     * Gets verkkopankkiTransaction
     *
     * @return \Reepay\Model\VerkkopankkiTransaction
     */
    public function getVerkkopankkiTransaction()
    {
        return $this->container['verkkopankkiTransaction'];
    }

    /**
     * Sets verkkopankkiTransaction
     *
     * @param \Reepay\Model\VerkkopankkiTransaction $verkkopankkiTransaction Specifics in case of Verkkopankki transaction
     *
     * @return $this
     */
    public function setVerkkopankkiTransaction($verkkopankkiTransaction)
    {
        $this->container['verkkopankkiTransaction'] = $verkkopankkiTransaction;

        return $this;
    }

    /**
     * Gets mpsTransaction
     *
     * @return \Reepay\Model\MpsTransaction
     */
    public function getMpsTransaction()
    {
        return $this->container['mpsTransaction'];
    }

    /**
     * Sets mpsTransaction
     *
     * @param \Reepay\Model\MpsTransaction $mpsTransaction Specifics in case of MobilePay Subscriptions transaction
     *
     * @return $this
     */
    public function setMpsTransaction($mpsTransaction)
    {
        $this->container['mpsTransaction'] = $mpsTransaction;

        return $this;
    }

    /**
     * Gets paymentContext
     *
     * @return string
     */
    public function getPaymentContext()
    {
        return $this->container['paymentContext'];
    }

    /**
     * Sets paymentContext
     *
     * @param string $paymentContext Payment context describing if the transaction is customer or merchant initiated, one of the following values: `cit`, `mit`, `cit_cof`
     *
     * @return $this
     */
    public function setPaymentContext($paymentContext)
    {
        $this->container['paymentContext'] = $paymentContext;

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


