<?php
/**
 * PaypalTransaction
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
 * PaypalTransaction Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaypalTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaypalTransaction';

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
        'paypalId' => 'string'
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
        'paypalId' => null
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
        'paypalId' => 'paypal_id'
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
        'paypalId' => 'setPaypalId'
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
        'paypalId' => 'getPaypalId'
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
        $this->container['paypalId'] = isset($data['paypalId']) ? $data['paypalId'] : null;
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
     * Gets paypalId
     *
     * @return string
     */
    public function getPaypalId()
    {
        return $this->container['paypalId'];
    }

    /**
     * Sets paypalId
     *
     * @param string $paypalId PayPal id
     *
     * @return $this
     */
    public function setPaypalId($paypalId)
    {
        $this->container['paypalId'] = $paypalId;

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
