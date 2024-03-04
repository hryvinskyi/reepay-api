<?php
/**
 * AccountFundingInformation
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
 * AccountFundingInformation Class Doc Comment
 *
 * @category Class
 * @description Optional sender information required for Account Funding Transaction (AFT). If not provided when requesting account funding transaction with &#x60;account_funding&#x3D;true&#x60;, information will be gathered from invoice billing address and customer.
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountFundingInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountFundingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sender_account_number' => 'string',
        'sender_reference' => 'string',
        'sender_first_name' => 'string',
        'sender_last_name' => 'string',
        'sender_address' => 'string',
        'sender_city' => 'string',
        'sender_postal_code' => 'string',
        'sender_state' => 'string',
        'sender_country' => 'string',
        'sender_date_of_birth' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sender_account_number' => null,
        'sender_reference' => null,
        'sender_first_name' => null,
        'sender_last_name' => null,
        'sender_address' => null,
        'sender_city' => null,
        'sender_postal_code' => null,
        'sender_state' => null,
        'sender_country' => null,
        'sender_date_of_birth' => null
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
        'sender_account_number' => 'sender_account_number',
        'sender_reference' => 'sender_reference',
        'sender_first_name' => 'sender_first_name',
        'sender_last_name' => 'sender_last_name',
        'sender_address' => 'sender_address',
        'sender_city' => 'sender_city',
        'sender_postal_code' => 'sender_postal_code',
        'sender_state' => 'sender_state',
        'sender_country' => 'sender_country',
        'sender_date_of_birth' => 'sender_date_of_birth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sender_account_number' => 'setSenderAccountNumber',
        'sender_reference' => 'setSenderReference',
        'sender_first_name' => 'setSenderFirstName',
        'sender_last_name' => 'setSenderLastName',
        'sender_address' => 'setSenderAddress',
        'sender_city' => 'setSenderCity',
        'sender_postal_code' => 'setSenderPostalCode',
        'sender_state' => 'setSenderState',
        'sender_country' => 'setSenderCountry',
        'sender_date_of_birth' => 'setSenderDateOfBirth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sender_account_number' => 'getSenderAccountNumber',
        'sender_reference' => 'getSenderReference',
        'sender_first_name' => 'getSenderFirstName',
        'sender_last_name' => 'getSenderLastName',
        'sender_address' => 'getSenderAddress',
        'sender_city' => 'getSenderCity',
        'sender_postal_code' => 'getSenderPostalCode',
        'sender_state' => 'getSenderState',
        'sender_country' => 'getSenderCountry',
        'sender_date_of_birth' => 'getSenderDateOfBirth'
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
        $this->container['sender_account_number'] = isset($data['sender_account_number']) ? $data['sender_account_number'] : null;
        $this->container['sender_reference'] = isset($data['sender_reference']) ? $data['sender_reference'] : null;
        $this->container['sender_first_name'] = isset($data['sender_first_name']) ? $data['sender_first_name'] : null;
        $this->container['sender_last_name'] = isset($data['sender_last_name']) ? $data['sender_last_name'] : null;
        $this->container['sender_address'] = isset($data['sender_address']) ? $data['sender_address'] : null;
        $this->container['sender_city'] = isset($data['sender_city']) ? $data['sender_city'] : null;
        $this->container['sender_postal_code'] = isset($data['sender_postal_code']) ? $data['sender_postal_code'] : null;
        $this->container['sender_state'] = isset($data['sender_state']) ? $data['sender_state'] : null;
        $this->container['sender_country'] = isset($data['sender_country']) ? $data['sender_country'] : null;
        $this->container['sender_date_of_birth'] = isset($data['sender_date_of_birth']) ? $data['sender_date_of_birth'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets sender_account_number
     *
     * @return string
     */
    public function getSenderAccountNumber()
    {
        return $this->container['sender_account_number'];
    }

    /**
     * Sets sender_account_number
     *
     * @param string $sender_account_number The sender’s account number, i.e. an identification of the account being funded by the debit. It can be an IBAN, a proprietary wallet number, a prepaid PAN, etc.
     *
     * @return $this
     */
    public function setSenderAccountNumber($sender_account_number)
    {
        $this->container['sender_account_number'] = $sender_account_number;

        return $this;
    }

    /**
     * Gets sender_reference
     *
     * @return string
     */
    public function getSenderReference()
    {
        return $this->container['sender_reference'];
    }

    /**
     * Sets sender_reference
     *
     * @param string $sender_reference Sender's reference number. You must be able to uniquely identify the sender using this number. Required if the merchant account’s Business Application Identifier (BAI) is Funds Disbursement (FD).
     *
     * @return $this
     */
    public function setSenderReference($sender_reference)
    {
        $this->container['sender_reference'] = $sender_reference;

        return $this;
    }

    /**
     * Gets sender_first_name
     *
     * @return string
     */
    public function getSenderFirstName()
    {
        return $this->container['sender_first_name'];
    }

    /**
     * Sets sender_first_name
     *
     * @param string $sender_first_name Sender’s first name. Required only if 'sender_address' is provided.
     *
     * @return $this
     */
    public function setSenderFirstName($sender_first_name)
    {
        $this->container['sender_first_name'] = $sender_first_name;

        return $this;
    }

    /**
     * Gets sender_last_name
     *
     * @return string
     */
    public function getSenderLastName()
    {
        return $this->container['sender_last_name'];
    }

    /**
     * Sets sender_last_name
     *
     * @param string $sender_last_name Sender’s last name. Required only if 'sender_address' is provided.
     *
     * @return $this
     */
    public function setSenderLastName($sender_last_name)
    {
        $this->container['sender_last_name'] = $sender_last_name;

        return $this;
    }

    /**
     * Gets sender_address
     *
     * @return string
     */
    public function getSenderAddress()
    {
        return $this->container['sender_address'];
    }

    /**
     * Sets sender_address
     *
     * @param string $sender_address Sender’s address (street name, house number, etc.)
     *
     * @return $this
     */
    public function setSenderAddress($sender_address)
    {
        $this->container['sender_address'] = $sender_address;

        return $this;
    }

    /**
     * Gets sender_city
     *
     * @return string
     */
    public function getSenderCity()
    {
        return $this->container['sender_city'];
    }

    /**
     * Sets sender_city
     *
     * @param string $sender_city Sender’s city
     *
     * @return $this
     */
    public function setSenderCity($sender_city)
    {
        $this->container['sender_city'] = $sender_city;

        return $this;
    }

    /**
     * Gets sender_postal_code
     *
     * @return string
     */
    public function getSenderPostalCode()
    {
        return $this->container['sender_postal_code'];
    }

    /**
     * Sets sender_postal_code
     *
     * @param string $sender_postal_code Sender’s postal code
     *
     * @return $this
     */
    public function setSenderPostalCode($sender_postal_code)
    {
        $this->container['sender_postal_code'] = $sender_postal_code;

        return $this;
    }

    /**
     * Gets sender_state
     *
     * @return string
     */
    public function getSenderState()
    {
        return $this->container['sender_state'];
    }

    /**
     * Sets sender_state
     *
     * @param string $sender_state Sender’s state. Required for countries US and CA
     *
     * @return $this
     */
    public function setSenderState($sender_state)
    {
        $this->container['sender_state'] = $sender_state;

        return $this;
    }

    /**
     * Gets sender_country
     *
     * @return string
     */
    public function getSenderCountry()
    {
        return $this->container['sender_country'];
    }

    /**
     * Sets sender_country
     *
     * @param string $sender_country Sender’s country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)
     *
     * @return $this
     */
    public function setSenderCountry($sender_country)
    {
        $this->container['sender_country'] = $sender_country;

        return $this;
    }

    /**
     * Gets sender_date_of_birth
     *
     * @return string
     */
    public function getSenderDateOfBirth()
    {
        return $this->container['sender_date_of_birth'];
    }

    /**
     * Sets sender_date_of_birth
     *
     * @param string $sender_date_of_birth Sender’s date of birth in format yyyy-MM-dd.
     *
     * @return $this
     */
    public function setSenderDateOfBirth($sender_date_of_birth)
    {
        $this->container['sender_date_of_birth'] = $sender_date_of_birth;

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