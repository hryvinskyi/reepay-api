<?php
/**
 * CardV2
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
 * CardV2 Class Doc Comment
 *
 * @category Class
 * @description Card object in case of Apple Pay payment method
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CardV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gateway' => 'string',
        'fingerprint' => 'string',
        'reactivated' => '\DateTime',
        'gw_ref' => 'string',
        'card_type' => 'string',
        'transaction_card_type' => 'string',
        'card_agreement' => 'string',
        'exp_date' => 'string',
        'masked_card' => 'string',
        'last_success' => '\DateTime',
        'last_failed' => '\DateTime',
        'first_fail' => '\DateTime',
        'error_code' => 'string',
        'error_state' => 'string',
        'declined_count' => 'int',
        'strong_authentication_status' => 'string',
        'three_d_secure_status' => 'string',
        'risk_rule' => 'string',
        'card_country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gateway' => null,
        'fingerprint' => null,
        'reactivated' => 'date-time',
        'gw_ref' => null,
        'card_type' => null,
        'transaction_card_type' => null,
        'card_agreement' => null,
        'exp_date' => null,
        'masked_card' => null,
        'last_success' => 'date-time',
        'last_failed' => 'date-time',
        'first_fail' => 'date-time',
        'error_code' => null,
        'error_state' => null,
        'declined_count' => 'int32',
        'strong_authentication_status' => null,
        'three_d_secure_status' => null,
        'risk_rule' => null,
        'card_country' => null
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
        'gateway' => 'gateway',
        'fingerprint' => 'fingerprint',
        'reactivated' => 'reactivated',
        'gw_ref' => 'gw_ref',
        'card_type' => 'card_type',
        'transaction_card_type' => 'transaction_card_type',
        'card_agreement' => 'card_agreement',
        'exp_date' => 'exp_date',
        'masked_card' => 'masked_card',
        'last_success' => 'last_success',
        'last_failed' => 'last_failed',
        'first_fail' => 'first_fail',
        'error_code' => 'error_code',
        'error_state' => 'error_state',
        'declined_count' => 'declined_count',
        'strong_authentication_status' => 'strong_authentication_status',
        'three_d_secure_status' => 'three_d_secure_status',
        'risk_rule' => 'risk_rule',
        'card_country' => 'card_country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gateway' => 'setGateway',
        'fingerprint' => 'setFingerprint',
        'reactivated' => 'setReactivated',
        'gw_ref' => 'setGwRef',
        'card_type' => 'setCardType',
        'transaction_card_type' => 'setTransactionCardType',
        'card_agreement' => 'setCardAgreement',
        'exp_date' => 'setExpDate',
        'masked_card' => 'setMaskedCard',
        'last_success' => 'setLastSuccess',
        'last_failed' => 'setLastFailed',
        'first_fail' => 'setFirstFail',
        'error_code' => 'setErrorCode',
        'error_state' => 'setErrorState',
        'declined_count' => 'setDeclinedCount',
        'strong_authentication_status' => 'setStrongAuthenticationStatus',
        'three_d_secure_status' => 'setThreeDSecureStatus',
        'risk_rule' => 'setRiskRule',
        'card_country' => 'setCardCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gateway' => 'getGateway',
        'fingerprint' => 'getFingerprint',
        'reactivated' => 'getReactivated',
        'gw_ref' => 'getGwRef',
        'card_type' => 'getCardType',
        'transaction_card_type' => 'getTransactionCardType',
        'card_agreement' => 'getCardAgreement',
        'exp_date' => 'getExpDate',
        'masked_card' => 'getMaskedCard',
        'last_success' => 'getLastSuccess',
        'last_failed' => 'getLastFailed',
        'first_fail' => 'getFirstFail',
        'error_code' => 'getErrorCode',
        'error_state' => 'getErrorState',
        'declined_count' => 'getDeclinedCount',
        'strong_authentication_status' => 'getStrongAuthenticationStatus',
        'three_d_secure_status' => 'getThreeDSecureStatus',
        'risk_rule' => 'getRiskRule',
        'card_country' => 'getCardCountry'
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
    const ERROR_STATE_PENDING = 'pending';
    const ERROR_STATE_SOFT_DECLINED = 'soft_declined';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';
    const STRONG_AUTHENTICATION_STATUS_THREED_SECURE = 'threed_secure';
    const STRONG_AUTHENTICATION_STATUS_THREED_SECURE_NOT_ENROLLED = 'threed_secure_not_enrolled';
    const STRONG_AUTHENTICATION_STATUS_SECURED_BY_NETS = 'secured_by_nets';

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
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['reactivated'] = isset($data['reactivated']) ? $data['reactivated'] : null;
        $this->container['gw_ref'] = isset($data['gw_ref']) ? $data['gw_ref'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['transaction_card_type'] = isset($data['transaction_card_type']) ? $data['transaction_card_type'] : null;
        $this->container['card_agreement'] = isset($data['card_agreement']) ? $data['card_agreement'] : null;
        $this->container['exp_date'] = isset($data['exp_date']) ? $data['exp_date'] : null;
        $this->container['masked_card'] = isset($data['masked_card']) ? $data['masked_card'] : null;
        $this->container['last_success'] = isset($data['last_success']) ? $data['last_success'] : null;
        $this->container['last_failed'] = isset($data['last_failed']) ? $data['last_failed'] : null;
        $this->container['first_fail'] = isset($data['first_fail']) ? $data['first_fail'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_state'] = isset($data['error_state']) ? $data['error_state'] : null;
        $this->container['declined_count'] = isset($data['declined_count']) ? $data['declined_count'] : null;
        $this->container['strong_authentication_status'] = isset($data['strong_authentication_status']) ? $data['strong_authentication_status'] : null;
        $this->container['three_d_secure_status'] = isset($data['three_d_secure_status']) ? $data['three_d_secure_status'] : null;
        $this->container['risk_rule'] = isset($data['risk_rule']) ? $data['risk_rule'] : null;
        $this->container['card_country'] = isset($data['card_country']) ? $data['card_country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gateway'] === null) {
            $invalidProperties[] = "'gateway' can't be null";
        }
        if ($this->container['gw_ref'] === null) {
            $invalidProperties[] = "'gw_ref' can't be null";
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
        if (!is_null($this->container['transaction_card_type']) && !in_array($this->container['transaction_card_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transaction_card_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['card_agreement'] === null) {
            $invalidProperties[] = "'card_agreement' can't be null";
        }
        $allowedValues = $this->getErrorStateAllowableValues();
        if (!is_null($this->container['error_state']) && !in_array($this->container['error_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'error_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStrongAuthenticationStatusAllowableValues();
        if (!is_null($this->container['strong_authentication_status']) && !in_array($this->container['strong_authentication_status'], $allowedValues, true)) {
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
     * Gets gateway
     *
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     *
     * @param string $gateway Card gateway tied to card
     *
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;

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
     * Gets reactivated
     *
     * @return \DateTime
     */
    public function getReactivated()
    {
        return $this->container['reactivated'];
    }

    /**
     * Sets reactivated
     *
     * @param \DateTime $reactivated Date and time of reactivation if the card has been reactivated from failed state. In ISO-8601 extended offset date-time format.
     *
     * @return $this
     */
    public function setReactivated($reactivated)
    {
        $this->container['reactivated'] = $reactivated;

        return $this;
    }

    /**
     * Gets gw_ref
     *
     * @return string
     */
    public function getGwRef()
    {
        return $this->container['gw_ref'];
    }

    /**
     * Sets gw_ref
     *
     * @param string $gw_ref Card gateway reference id
     *
     * @return $this
     */
    public function setGwRef($gw_ref)
    {
        $this->container['gw_ref'] = $gw_ref;

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
     * @param string $transaction_card_type Card type used in authentication and the card type used for subsequent MIT transactions. Will differ from `card_type` if co-branded card. `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
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
     * Gets card_agreement
     *
     * @return string
     */
    public function getCardAgreement()
    {
        return $this->container['card_agreement'];
    }

    /**
     * Sets card_agreement
     *
     * @param string $card_agreement Card agreement id
     *
     * @return $this
     */
    public function setCardAgreement($card_agreement)
    {
        $this->container['card_agreement'] = $card_agreement;

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
     * Gets last_success
     *
     * @return \DateTime
     */
    public function getLastSuccess()
    {
        return $this->container['last_success'];
    }

    /**
     * Sets last_success
     *
     * @param \DateTime $last_success Date and time of last successful use of the card. In ISO-8601 extended offset date-time format.
     *
     * @return $this
     */
    public function setLastSuccess($last_success)
    {
        $this->container['last_success'] = $last_success;

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
     * @param \DateTime $last_failed Date and time of last failed use of the card. In ISO-8601 extended offset date-time format.
     *
     * @return $this
     */
    public function setLastFailed($last_failed)
    {
        $this->container['last_failed'] = $last_failed;

        return $this;
    }

    /**
     * Gets first_fail
     *
     * @return \DateTime
     */
    public function getFirstFail()
    {
        return $this->container['first_fail'];
    }

    /**
     * Sets first_fail
     *
     * @param \DateTime $first_fail Date and time of first successful use of the card. In ISO-8601 extended offset date-time format.
     *
     * @return $this
     */
    public function setFirstFail($first_fail)
    {
        $this->container['first_fail'] = $first_fail;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string $error_code An error code from the last failed use of the card. See [transaction errors](https://reference.reepay.com/api/#transaction-errors).
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

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
     * @param string $error_state Error state from last failed use of the card: `pending`, `soft_declined`, `hard_declined` or `processing_error`
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
     * Gets declined_count
     *
     * @return int
     */
    public function getDeclinedCount()
    {
        return $this->container['declined_count'];
    }

    /**
     * Sets declined_count
     *
     * @param int $declined_count Number of soft and hard declined attempts for the card since created or since last successful transaction
     *
     * @return $this
     */
    public function setDeclinedCount($declined_count)
    {
        $this->container['declined_count'] = $declined_count;

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
     * @param string $risk_rule If this parameter is set the card has been flagged by Reepay Risk Filter with a flag rule. Special attention may be required before using the card for recurring payments or subscription sign-up.
     *
     * @return $this
     */
    public function setRiskRule($risk_rule)
    {
        $this->container['risk_rule'] = $risk_rule;

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
