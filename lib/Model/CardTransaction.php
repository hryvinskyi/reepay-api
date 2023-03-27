<?php
/**
 * CardTransaction
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
 * Swagger Codegen version: 3.0.41
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
 * CardTransaction Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CardTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card' => '\Reepay\Model\Card',
        'error' => 'string',
        'fingerprint' => 'string',
        'provider' => 'string',
        'ref_transaction' => 'string',
        'gw_id' => 'string',
        'last_failed' => '\DateTime',
        'first_failed' => '\DateTime',
        'error_state' => 'string',
        'card_type' => 'string',
        'transaction_card_type' => 'string',
        'exp_date' => 'string',
        'masked_card' => 'string',
        'card_country' => 'string',
        'strong_authentication_status' => 'string',
        'three_d_secure_status' => 'string',
        'risk_rule' => 'string',
        'acquirer_code' => 'string',
        'acquirer_message' => 'string',
        'acquirer_reference' => 'string',
        'text_on_statement' => 'string',
        'surcharge_fee' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card' => null,
        'error' => null,
        'fingerprint' => null,
        'provider' => null,
        'ref_transaction' => null,
        'gw_id' => null,
        'last_failed' => 'date-time',
        'first_failed' => 'date-time',
        'error_state' => null,
        'card_type' => null,
        'transaction_card_type' => null,
        'exp_date' => null,
        'masked_card' => null,
        'card_country' => null,
        'strong_authentication_status' => null,
        'three_d_secure_status' => null,
        'risk_rule' => null,
        'acquirer_code' => null,
        'acquirer_message' => null,
        'acquirer_reference' => null,
        'text_on_statement' => null,
        'surcharge_fee' => 'int32'
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
        'card' => 'card',
        'error' => 'error',
        'fingerprint' => 'fingerprint',
        'provider' => 'provider',
        'ref_transaction' => 'ref_transaction',
        'gw_id' => 'gw_id',
        'last_failed' => 'last_failed',
        'first_failed' => 'first_failed',
        'error_state' => 'error_state',
        'card_type' => 'card_type',
        'transaction_card_type' => 'transaction_card_type',
        'exp_date' => 'exp_date',
        'masked_card' => 'masked_card',
        'card_country' => 'card_country',
        'strong_authentication_status' => 'strong_authentication_status',
        'three_d_secure_status' => 'three_d_secure_status',
        'risk_rule' => 'risk_rule',
        'acquirer_code' => 'acquirer_code',
        'acquirer_message' => 'acquirer_message',
        'acquirer_reference' => 'acquirer_reference',
        'text_on_statement' => 'text_on_statement',
        'surcharge_fee' => 'surcharge_fee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card' => 'setCard',
        'error' => 'setError',
        'fingerprint' => 'setFingerprint',
        'provider' => 'setProvider',
        'ref_transaction' => 'setRefTransaction',
        'gw_id' => 'setGwId',
        'last_failed' => 'setLastFailed',
        'first_failed' => 'setFirstFailed',
        'error_state' => 'setErrorState',
        'card_type' => 'setCardType',
        'transaction_card_type' => 'setTransactionCardType',
        'exp_date' => 'setExpDate',
        'masked_card' => 'setMaskedCard',
        'card_country' => 'setCardCountry',
        'strong_authentication_status' => 'setStrongAuthenticationStatus',
        'three_d_secure_status' => 'setThreeDSecureStatus',
        'risk_rule' => 'setRiskRule',
        'acquirer_code' => 'setAcquirerCode',
        'acquirer_message' => 'setAcquirerMessage',
        'acquirer_reference' => 'setAcquirerReference',
        'text_on_statement' => 'setTextOnStatement',
        'surcharge_fee' => 'setSurchargeFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card' => 'getCard',
        'error' => 'getError',
        'fingerprint' => 'getFingerprint',
        'provider' => 'getProvider',
        'ref_transaction' => 'getRefTransaction',
        'gw_id' => 'getGwId',
        'last_failed' => 'getLastFailed',
        'first_failed' => 'getFirstFailed',
        'error_state' => 'getErrorState',
        'card_type' => 'getCardType',
        'transaction_card_type' => 'getTransactionCardType',
        'exp_date' => 'getExpDate',
        'masked_card' => 'getMaskedCard',
        'card_country' => 'getCardCountry',
        'strong_authentication_status' => 'getStrongAuthenticationStatus',
        'three_d_secure_status' => 'getThreeDSecureStatus',
        'risk_rule' => 'getRiskRule',
        'acquirer_code' => 'getAcquirerCode',
        'acquirer_message' => 'getAcquirerMessage',
        'acquirer_reference' => 'getAcquirerReference',
        'text_on_statement' => 'getTextOnStatement',
        'surcharge_fee' => 'getSurchargeFee'
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

    const PROVIDER_REEPAY = 'reepay';
    const PROVIDER_CLEARHAUS = 'clearhaus';
    const PROVIDER_NETS = 'nets';
    const PROVIDER_SWEDBANK = 'swedbank';
    const PROVIDER_HANDELSBANKEN = 'handelsbanken';
    const PROVIDER_ELAVON = 'elavon';
    const PROVIDER_BAMBORA = 'bambora';
    const PROVIDER_VALITOR = 'valitor';
    const PROVIDER_DIBS = 'dibs';
    const PROVIDER_STRIPE = 'stripe';
    const PROVIDER_TEST = 'test';
    const ERROR_STATE_PENDING = 'pending';
    const ERROR_STATE_SOFT_DECLINED = 'soft_declined';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';
    const CARD_TYPE_UNKNOWN = 'unknown';
    const CARD_TYPE_VISA = 'visa';
    const CARD_TYPE_MC = 'mc';
    const CARD_TYPE_DANKORT = 'dankort';
    const CARD_TYPE_VISA_DK = 'visa_dk';
    const CARD_TYPE_FFK = 'ffk';
    const CARD_TYPE_VISA_ELEC = 'visa_elec';
    const CARD_TYPE_MAESTRO = 'maestro';
    const CARD_TYPE_LASER = 'laser';
    const CARD_TYPE_AMEX = 'amex';
    const CARD_TYPE_DINERS = 'diners';
    const CARD_TYPE_DISCOVER = 'discover';
    const CARD_TYPE_JCB = 'jcb';
    const TRANSACTION_CARD_TYPE_UNKNOWN = 'unknown';
    const TRANSACTION_CARD_TYPE_VISA = 'visa';
    const TRANSACTION_CARD_TYPE_MC = 'mc';
    const TRANSACTION_CARD_TYPE_DANKORT = 'dankort';
    const TRANSACTION_CARD_TYPE_VISA_DK = 'visa_dk';
    const TRANSACTION_CARD_TYPE_FFK = 'ffk';
    const TRANSACTION_CARD_TYPE_VISA_ELEC = 'visa_elec';
    const TRANSACTION_CARD_TYPE_MAESTRO = 'maestro';
    const TRANSACTION_CARD_TYPE_LASER = 'laser';
    const TRANSACTION_CARD_TYPE_AMEX = 'amex';
    const TRANSACTION_CARD_TYPE_DINERS = 'diners';
    const TRANSACTION_CARD_TYPE_DISCOVER = 'discover';
    const TRANSACTION_CARD_TYPE_JCB = 'jcb';
    const STRONG_AUTHENTICATION_STATUS_THREED_SECURE = 'threed_secure';
    const STRONG_AUTHENTICATION_STATUS_THREED_SECURE_NOT_ENROLLED = 'threed_secure_not_enrolled';
    const STRONG_AUTHENTICATION_STATUS_SECURED_BY_NETS = 'secured_by_nets';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProviderAllowableValues()
    {
        return [
            self::PROVIDER_REEPAY,
            self::PROVIDER_CLEARHAUS,
            self::PROVIDER_NETS,
            self::PROVIDER_SWEDBANK,
            self::PROVIDER_HANDELSBANKEN,
            self::PROVIDER_ELAVON,
            self::PROVIDER_BAMBORA,
            self::PROVIDER_VALITOR,
            self::PROVIDER_DIBS,
            self::PROVIDER_STRIPE,
            self::PROVIDER_TEST,
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
            self::ERROR_STATE_PENDING,
            self::ERROR_STATE_SOFT_DECLINED,
            self::ERROR_STATE_HARD_DECLINED,
            self::ERROR_STATE_PROCESSING_ERROR,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_UNKNOWN,
            self::CARD_TYPE_VISA,
            self::CARD_TYPE_MC,
            self::CARD_TYPE_DANKORT,
            self::CARD_TYPE_VISA_DK,
            self::CARD_TYPE_FFK,
            self::CARD_TYPE_VISA_ELEC,
            self::CARD_TYPE_MAESTRO,
            self::CARD_TYPE_LASER,
            self::CARD_TYPE_AMEX,
            self::CARD_TYPE_DINERS,
            self::CARD_TYPE_DISCOVER,
            self::CARD_TYPE_JCB,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionCardTypeAllowableValues()
    {
        return [
            self::TRANSACTION_CARD_TYPE_UNKNOWN,
            self::TRANSACTION_CARD_TYPE_VISA,
            self::TRANSACTION_CARD_TYPE_MC,
            self::TRANSACTION_CARD_TYPE_DANKORT,
            self::TRANSACTION_CARD_TYPE_VISA_DK,
            self::TRANSACTION_CARD_TYPE_FFK,
            self::TRANSACTION_CARD_TYPE_VISA_ELEC,
            self::TRANSACTION_CARD_TYPE_MAESTRO,
            self::TRANSACTION_CARD_TYPE_LASER,
            self::TRANSACTION_CARD_TYPE_AMEX,
            self::TRANSACTION_CARD_TYPE_DINERS,
            self::TRANSACTION_CARD_TYPE_DISCOVER,
            self::TRANSACTION_CARD_TYPE_JCB,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStrongAuthenticationStatusAllowableValues()
    {
        return [
            self::STRONG_AUTHENTICATION_STATUS_THREED_SECURE,
            self::STRONG_AUTHENTICATION_STATUS_THREED_SECURE_NOT_ENROLLED,
            self::STRONG_AUTHENTICATION_STATUS_SECURED_BY_NETS,
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
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['ref_transaction'] = isset($data['ref_transaction']) ? $data['ref_transaction'] : null;
        $this->container['gw_id'] = isset($data['gw_id']) ? $data['gw_id'] : null;
        $this->container['last_failed'] = isset($data['last_failed']) ? $data['last_failed'] : null;
        $this->container['first_failed'] = isset($data['first_failed']) ? $data['first_failed'] : null;
        $this->container['error_state'] = isset($data['error_state']) ? $data['error_state'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['transaction_card_type'] = isset($data['transaction_card_type']) ? $data['transaction_card_type'] : null;
        $this->container['exp_date'] = isset($data['exp_date']) ? $data['exp_date'] : null;
        $this->container['masked_card'] = isset($data['masked_card']) ? $data['masked_card'] : null;
        $this->container['card_country'] = isset($data['card_country']) ? $data['card_country'] : null;
        $this->container['strong_authentication_status'] = isset($data['strong_authentication_status']) ? $data['strong_authentication_status'] : null;
        $this->container['three_d_secure_status'] = isset($data['three_d_secure_status']) ? $data['three_d_secure_status'] : null;
        $this->container['risk_rule'] = isset($data['risk_rule']) ? $data['risk_rule'] : null;
        $this->container['acquirer_code'] = isset($data['acquirer_code']) ? $data['acquirer_code'] : null;
        $this->container['acquirer_message'] = isset($data['acquirer_message']) ? $data['acquirer_message'] : null;
        $this->container['acquirer_reference'] = isset($data['acquirer_reference']) ? $data['acquirer_reference'] : null;
        $this->container['text_on_statement'] = isset($data['text_on_statement']) ? $data['text_on_statement'] : null;
        $this->container['surcharge_fee'] = isset($data['surcharge_fee']) ? $data['surcharge_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProviderAllowableValues();
        if (!is_null($this->container['provider']) && !in_array($this->container['provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'provider', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getErrorStateAllowableValues();
        if (!is_null($this->container['error_state']) && !in_array(
                $this->container['error_state'],
                $allowedValues,
                true
            )) {
            $invalidProperties[] = sprintf(
                "invalid value for 'error_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['card_type'] === null) {
            $invalidProperties[] = "'card_type' can't be null";
        }
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($this->container['card_type']) && !in_array($this->container['card_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'card_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionCardTypeAllowableValues();
        if (!is_null($this->container['transaction_card_type']) && !in_array(
                $this->container['transaction_card_type'],
                $allowedValues,
                true
            )) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transaction_card_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStrongAuthenticationStatusAllowableValues();
        if (!is_null($this->container['strong_authentication_status']) && !in_array(
                $this->container['strong_authentication_status'],
                $allowedValues,
                true
            )) {
            $invalidProperties[] = sprintf(
                "invalid value for 'strong_authentication_status', must be one of '%s'",
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
     * Gets card
     *
     * @return \Reepay\Model\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \Reepay\Model\Card $card card
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

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
     * @param string $error Error code if failed. See [transaction errors](https://reference.reepay.com/api/#transaction-errors).
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets fingerprint
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string $fingerprint Uniquely identifies this particular card number
     *
     * @return $this
     */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider Acquirer or payment gateway used: `reepay`, `clearhaus`, `nets`, `swedbank`, `handelsbanken`, `elavon`, `bambora`, `valitor`, `dibs`, `stripe`, `test`
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $allowedValues = $this->getProviderAllowableValues();
        if (!is_null($provider) && !in_array($provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'provider', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['provider'] = $provider;

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
     * @param string $ref_transaction Id of a possible referenced transaction
     *
     * @return $this
     */
    public function setRefTransaction($ref_transaction)
    {
        $this->container['ref_transaction'] = $ref_transaction;

        return $this;
    }

    /**
     * Gets gw_id
     *
     * @return string
     */
    public function getGwId()
    {
        return $this->container['gw_id'];
    }

    /**
     * Sets gw_id
     *
     * @param string $gw_id Gateway id for card
     *
     * @return $this
     */
    public function setGwId($gw_id)
    {
        $this->container['gw_id'] = $gw_id;

        return $this;
    }

    /**
     * Gets last_failed
     *
     * @return \DateTime
     */
    public function getLastFailed()
    {
        return $this->container['last_failed'];
    }

    /**
     * Sets last_failed
     *
     * @param \DateTime $last_failed When the card transaction last failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setLastFailed($last_failed)
    {
        $this->container['last_failed'] = $last_failed;

        return $this;
    }

    /**
     * Gets first_failed
     *
     * @return \DateTime
     */
    public function getFirstFailed()
    {
        return $this->container['first_failed'];
    }

    /**
     * Sets first_failed
     *
     * @param \DateTime $first_failed When the card transaction first failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setFirstFailed($first_failed)
    {
        $this->container['first_failed'] = $first_failed;

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
     * @param string $error_state Error state if failed: `pending`, `soft_declined`, `hard_declined` or `processing_error`
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
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type Card type: `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!in_array($card_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'card_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets transaction_card_type
     *
     * @return string
     */
    public function getTransactionCardType()
    {
        return $this->container['transaction_card_type'];
    }

    /**
     * Sets transaction_card_type
     *
     * @param string $transaction_card_type Transaction card type. Will differ from `card_type` if co-branded card. Transaction card type is the card type used for the transaction. `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
     *
     * @return $this
     */
    public function setTransactionCardType($transaction_card_type)
    {
        $allowedValues = $this->getTransactionCardTypeAllowableValues();
        if (!is_null($transaction_card_type) && !in_array($transaction_card_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transaction_card_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_card_type'] = $transaction_card_type;

        return $this;
    }

    /**
     * Gets exp_date
     *
     * @return string
     */
    public function getExpDate()
    {
        return $this->container['exp_date'];
    }

    /**
     * Sets exp_date
     *
     * @param string $exp_date Card expire date on form MM-YY
     *
     * @return $this
     */
    public function setExpDate($exp_date)
    {
        $this->container['exp_date'] = $exp_date;

        return $this;
    }

    /**
     * Gets masked_card
     *
     * @return string
     */
    public function getMaskedCard()
    {
        return $this->container['masked_card'];
    }

    /**
     * Sets masked_card
     *
     * @param string $masked_card Masked card number
     *
     * @return $this
     */
    public function setMaskedCard($masked_card)
    {
        $this->container['masked_card'] = $masked_card;

        return $this;
    }

    /**
     * Gets card_country
     *
     * @return string
     */
    public function getCardCountry()
    {
        return $this->container['card_country'];
    }

    /**
     * Sets card_country
     *
     * @param string $card_country Card issuing country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)
     *
     * @return $this
     */
    public function setCardCountry($card_country)
    {
        $this->container['card_country'] = $card_country;

        return $this;
    }

    /**
     * Gets strong_authentication_status
     *
     * @return string
     */
    public function getStrongAuthenticationStatus()
    {
        return $this->container['strong_authentication_status'];
    }

    /**
     * Sets strong_authentication_status
     *
     * @param string $strong_authentication_status Status for strong customer authentication: `threed_secure` - 3D Secure authenticated, `threed_secure_not_enrolled` - 3D Secure authentication not performed as card not enrolled, `secured_by_nets` - Secure by Nets authenticated
     *
     * @return $this
     */
    public function setStrongAuthenticationStatus($strong_authentication_status)
    {
        $allowedValues = $this->getStrongAuthenticationStatusAllowableValues();
        if (!is_null($strong_authentication_status) && !in_array($strong_authentication_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'strong_authentication_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['strong_authentication_status'] = $strong_authentication_status;

        return $this;
    }

    /**
     * Gets three_d_secure_status
     *
     * @return string
     */
    public function getThreeDSecureStatus()
    {
        return $this->container['three_d_secure_status'];
    }

    /**
     * Sets three_d_secure_status
     *
     * @param string $three_d_secure_status If 3D Secure authenticated the 3D status will either be `Y` (fully authenticated) or `A` (attempted authenticated). An attempted authentication means that card issuer (e.g. bank) does not support 3D Secure so no full authentication has been performed. Attempted authentication normally means liability shift, but this can differ between acquirers.
     *
     * @return $this
     */
    public function setThreeDSecureStatus($three_d_secure_status)
    {
        $this->container['three_d_secure_status'] = $three_d_secure_status;

        return $this;
    }

    /**
     * Gets risk_rule
     *
     * @return string
     */
    public function getRiskRule()
    {
        return $this->container['risk_rule'];
    }

    /**
     * Sets risk_rule
     *
     * @param string $risk_rule If this parameter is set the transaction has either been flagged or declined by a Reepay Risk Filter rule. For flag action rules the transaction can be successful, but may require special attention. For block action rules the decline error will be `risk_filter_block`.
     *
     * @return $this
     */
    public function setRiskRule($risk_rule)
    {
        $this->container['risk_rule'] = $risk_rule;

        return $this;
    }

    /**
     * Gets acquirer_code
     *
     * @return string
     */
    public function getAcquirerCode()
    {
        return $this->container['acquirer_code'];
    }

    /**
     * Sets acquirer_code
     *
     * @param string $acquirer_code Acquirer error code in case of error
     *
     * @return $this
     */
    public function setAcquirerCode($acquirer_code)
    {
        $this->container['acquirer_code'] = $acquirer_code;

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
     * Gets acquirer_reference
     *
     * @return string
     */
    public function getAcquirerReference()
    {
        return $this->container['acquirer_reference'];
    }

    /**
     * Sets acquirer_reference
     *
     * @param string $acquirer_reference Acquirer reference to transaction. E.g. Nets order id or Clearhaus reference.
     *
     * @return $this
     */
    public function setAcquirerReference($acquirer_reference)
    {
        $this->container['acquirer_reference'] = $acquirer_reference;

        return $this;
    }

    /**
     * Gets text_on_statement
     *
     * @return string
     */
    public function getTextOnStatement()
    {
        return $this->container['text_on_statement'];
    }

    /**
     * Sets text_on_statement
     *
     * @param string $text_on_statement Resulting text on bank statement if known
     *
     * @return $this
     */
    public function setTextOnStatement($text_on_statement)
    {
        $this->container['text_on_statement'] = $text_on_statement;

        return $this;
    }

    /**
     * Gets surcharge_fee
     *
     * @return int
     */
    public function getSurchargeFee()
    {
        return $this->container['surcharge_fee'];
    }

    /**
     * Sets surcharge_fee
     *
     * @param int $surcharge_fee Potential card surcharge fee added to amount if surcharging enabled
     *
     * @return $this
     */
    public function setSurchargeFee($surcharge_fee)
    {
        $this->container['surcharge_fee'] = $surcharge_fee;

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
