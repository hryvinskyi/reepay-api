<?php
/**
 * MpsTransaction
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
 * MpsTransaction Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MpsTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MpsTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error' => 'string',
        'refTransaction' => 'string',
        'errorState' => 'string',
        'acquirerMessage' => 'string',
        'mpsId' => 'string',
        'mpsSubscription' => '\Reepay\Model\MpsSubscription',
        'mpsPaymentType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error' => null,
        'refTransaction' => null,
        'errorState' => null,
        'acquirerMessage' => null,
        'mpsId' => null,
        'mpsSubscription' => null,
        'mpsPaymentType' => null
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
        'error' => 'error',
        'refTransaction' => 'ref_transaction',
        'errorState' => 'error_state',
        'acquirerMessage' => 'acquirer_message',
        'mpsId' => 'mps_id',
        'mpsSubscription' => 'mps_subscription',
        'mpsPaymentType' => 'mps_payment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error' => 'setError',
        'refTransaction' => 'setRefTransaction',
        'errorState' => 'setErrorState',
        'acquirerMessage' => 'setAcquirerMessage',
        'mpsId' => 'setMpsId',
        'mpsSubscription' => 'setMpsSubscription',
        'mpsPaymentType' => 'setMpsPaymentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error' => 'getError',
        'refTransaction' => 'getRefTransaction',
        'errorState' => 'getErrorState',
        'acquirerMessage' => 'getAcquirerMessage',
        'mpsId' => 'getMpsId',
        'mpsSubscription' => 'getMpsSubscription',
        'mpsPaymentType' => 'getMpsPaymentType'
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

    const ERROR_STATE_PENDING = 'pending';
    const ERROR_STATE_SOFT_DECLINED = 'soft_declined';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';
    const MPS_PAYMENT_TYPE_REGULAR = 'regular';
    const MPS_PAYMENT_TYPE_ONE_OFF_CIT = 'one_off_cit';
    const MPS_PAYMENT_TYPE_ONE_OFF_MIT = 'one_off_mit';

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
    public function getMpsPaymentTypeAllowableValues()
    {
        return [
            self::MPS_PAYMENT_TYPE_REGULAR,
            self::MPS_PAYMENT_TYPE_ONE_OFF_CIT,
            self::MPS_PAYMENT_TYPE_ONE_OFF_MIT,
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
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['refTransaction'] = isset($data['refTransaction']) ? $data['refTransaction'] : null;
        $this->container['errorState'] = isset($data['errorState']) ? $data['errorState'] : null;
        $this->container['acquirerMessage'] = isset($data['acquirerMessage']) ? $data['acquirerMessage'] : null;
        $this->container['mpsId'] = isset($data['mpsId']) ? $data['mpsId'] : null;
        $this->container['mpsSubscription'] = isset($data['mpsSubscription']) ? $data['mpsSubscription'] : null;
        $this->container['mpsPaymentType'] = isset($data['mpsPaymentType']) ? $data['mpsPaymentType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getErrorStateAllowableValues();
        if (!is_null($this->container['errorState']) && !in_array($this->container['errorState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'errorState', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['mpsId'] === null) {
            $invalidProperties[] = "'mpsId' can't be null";
        }
        if ($this->container['mpsSubscription'] === null) {
            $invalidProperties[] = "'mpsSubscription' can't be null";
        }
        if ($this->container['mpsPaymentType'] === null) {
            $invalidProperties[] = "'mpsPaymentType' can't be null";
        }
        $allowedValues = $this->getMpsPaymentTypeAllowableValues();
        if (!is_null($this->container['mpsPaymentType']) && !in_array($this->container['mpsPaymentType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mpsPaymentType', must be one of '%s'",
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
     * Gets refTransaction
     *
     * @return string
     */
    public function getRefTransaction()
    {
        return $this->container['refTransaction'];
    }

    /**
     * Sets refTransaction
     *
     * @param string $refTransaction Id of a possible referenced transaction
     *
     * @return $this
     */
    public function setRefTransaction($refTransaction)
    {
        $this->container['refTransaction'] = $refTransaction;

        return $this;
    }

    /**
     * Gets errorState
     *
     * @return string
     */
    public function getErrorState()
    {
        return $this->container['errorState'];
    }

    /**
     * Sets errorState
     *
     * @param string $errorState Error state if failed: `pending`, `soft_declined`, `hard_declined` or `processing_error`
     *
     * @return $this
     */
    public function setErrorState($errorState)
    {
        $allowedValues = $this->getErrorStateAllowableValues();
        if (!is_null($errorState) && !in_array($errorState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'errorState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['errorState'] = $errorState;

        return $this;
    }

    /**
     * Gets acquirerMessage
     *
     * @return string
     */
    public function getAcquirerMessage()
    {
        return $this->container['acquirerMessage'];
    }

    /**
     * Sets acquirerMessage
     *
     * @param string $acquirerMessage Acquirer message in case of error
     *
     * @return $this
     */
    public function setAcquirerMessage($acquirerMessage)
    {
        $this->container['acquirerMessage'] = $acquirerMessage;

        return $this;
    }

    /**
     * Gets mpsId
     *
     * @return string
     */
    public function getMpsId()
    {
        return $this->container['mpsId'];
    }

    /**
     * Sets mpsId
     *
     * @param string $mpsId MobilePay Subscriptions id
     *
     * @return $this
     */
    public function setMpsId($mpsId)
    {
        $this->container['mpsId'] = $mpsId;

        return $this;
    }

    /**
     * Gets mpsSubscription
     *
     * @return \Reepay\Model\MpsSubscription
     */
    public function getMpsSubscription()
    {
        return $this->container['mpsSubscription'];
    }

    /**
     * Sets mpsSubscription
     *
     * @param \Reepay\Model\MpsSubscription $mpsSubscription mpsSubscription
     *
     * @return $this
     */
    public function setMpsSubscription($mpsSubscription)
    {
        $this->container['mpsSubscription'] = $mpsSubscription;

        return $this;
    }

    /**
     * Gets mpsPaymentType
     *
     * @return string
     */
    public function getMpsPaymentType()
    {
        return $this->container['mpsPaymentType'];
    }

    /**
     * Sets mpsPaymentType
     *
     * @param string $mpsPaymentType MobilePay Subscriptions payment type: `regular`, `one_off_cit` (customer initiated), `one_off_mit` (merchant initiated auto reserve)
     *
     * @return $this
     */
    public function setMpsPaymentType($mpsPaymentType)
    {
        $allowedValues = $this->getMpsPaymentTypeAllowableValues();
        if (!in_array($mpsPaymentType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mpsPaymentType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mpsPaymentType'] = $mpsPaymentType;

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
