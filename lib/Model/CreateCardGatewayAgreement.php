<?php
/**
 * CreateCardGatewayAgreement
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
 * CreateCardGatewayAgreement Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateCardGatewayAgreement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateCardGatewayAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currencies' => 'string[]',
        'surcharge' => 'bool',
        'provider' => 'string',
        'cardTypes' => 'string[]',
        'paymentTypes' => 'string[]',
        'providerSettings' => 'map[string,object]',
        'feeConfiguration' => 'map[string,object][]',
        'threedSecure' => 'bool',
        'threedSecureRecurring' => 'bool',
        'securedByNets' => 'bool',
        'securedByNetsRecurring' => 'bool',
        'defaultRequireSca' => 'bool',
        'disallowThreedSecureAttempted' => 'bool',
        'payout' => 'bool',
        'vtsConfiguration' => '\Reepay\Model\VtsConfiguration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currencies' => null,
        'surcharge' => null,
        'provider' => null,
        'cardTypes' => null,
        'paymentTypes' => null,
        'providerSettings' => null,
        'feeConfiguration' => null,
        'threedSecure' => null,
        'threedSecureRecurring' => null,
        'securedByNets' => null,
        'securedByNetsRecurring' => null,
        'defaultRequireSca' => null,
        'disallowThreedSecureAttempted' => null,
        'payout' => null,
        'vtsConfiguration' => null
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
        'currencies' => 'currencies',
        'surcharge' => 'surcharge',
        'provider' => 'provider',
        'cardTypes' => 'card_types',
        'paymentTypes' => 'payment_types',
        'providerSettings' => 'provider_settings',
        'feeConfiguration' => 'fee_configuration',
        'threedSecure' => 'threed_secure',
        'threedSecureRecurring' => 'threed_secure_recurring',
        'securedByNets' => 'secured_by_nets',
        'securedByNetsRecurring' => 'secured_by_nets_recurring',
        'defaultRequireSca' => 'default_require_sca',
        'disallowThreedSecureAttempted' => 'disallow_threed_secure_attempted',
        'payout' => 'payout',
        'vtsConfiguration' => 'vts_configuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currencies' => 'setCurrencies',
        'surcharge' => 'setSurcharge',
        'provider' => 'setProvider',
        'cardTypes' => 'setCardTypes',
        'paymentTypes' => 'setPaymentTypes',
        'providerSettings' => 'setProviderSettings',
        'feeConfiguration' => 'setFeeConfiguration',
        'threedSecure' => 'setThreedSecure',
        'threedSecureRecurring' => 'setThreedSecureRecurring',
        'securedByNets' => 'setSecuredByNets',
        'securedByNetsRecurring' => 'setSecuredByNetsRecurring',
        'defaultRequireSca' => 'setDefaultRequireSca',
        'disallowThreedSecureAttempted' => 'setDisallowThreedSecureAttempted',
        'payout' => 'setPayout',
        'vtsConfiguration' => 'setVtsConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currencies' => 'getCurrencies',
        'surcharge' => 'getSurcharge',
        'provider' => 'getProvider',
        'cardTypes' => 'getCardTypes',
        'paymentTypes' => 'getPaymentTypes',
        'providerSettings' => 'getProviderSettings',
        'feeConfiguration' => 'getFeeConfiguration',
        'threedSecure' => 'getThreedSecure',
        'threedSecureRecurring' => 'getThreedSecureRecurring',
        'securedByNets' => 'getSecuredByNets',
        'securedByNetsRecurring' => 'getSecuredByNetsRecurring',
        'defaultRequireSca' => 'getDefaultRequireSca',
        'disallowThreedSecureAttempted' => 'getDisallowThreedSecureAttempted',
        'payout' => 'getPayout',
        'vtsConfiguration' => 'getVtsConfiguration'
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
        $this->container['currencies'] = isset($data['currencies']) ? $data['currencies'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['cardTypes'] = isset($data['cardTypes']) ? $data['cardTypes'] : null;
        $this->container['paymentTypes'] = isset($data['paymentTypes']) ? $data['paymentTypes'] : null;
        $this->container['providerSettings'] = isset($data['providerSettings']) ? $data['providerSettings'] : null;
        $this->container['feeConfiguration'] = isset($data['feeConfiguration']) ? $data['feeConfiguration'] : null;
        $this->container['threedSecure'] = isset($data['threedSecure']) ? $data['threedSecure'] : null;
        $this->container['threedSecureRecurring'] = isset($data['threedSecureRecurring']) ? $data['threedSecureRecurring'] : null;
        $this->container['securedByNets'] = isset($data['securedByNets']) ? $data['securedByNets'] : null;
        $this->container['securedByNetsRecurring'] = isset($data['securedByNetsRecurring']) ? $data['securedByNetsRecurring'] : null;
        $this->container['defaultRequireSca'] = isset($data['defaultRequireSca']) ? $data['defaultRequireSca'] : null;
        $this->container['disallowThreedSecureAttempted'] = isset($data['disallowThreedSecureAttempted']) ? $data['disallowThreedSecureAttempted'] : null;
        $this->container['payout'] = isset($data['payout']) ? $data['payout'] : null;
        $this->container['vtsConfiguration'] = isset($data['vtsConfiguration']) ? $data['vtsConfiguration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currencies'] === null) {
            $invalidProperties[] = "'currencies' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
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
     * Gets currencies
     *
     * @return string[]
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param string[] $currencies Set of currencies supported by agreement. Each currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code.
     *
     * @return $this
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return bool
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param bool $surcharge Add acquirer surcharge fee if possible
     *
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

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
     * @param string $provider Card gateway provider type
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets cardTypes
     *
     * @return string[]
     */
    public function getCardTypes()
    {
        return $this->container['cardTypes'];
    }

    /**
     * Sets cardTypes
     *
     * @param string[] $cardTypes Card types supported by agreement
     *
     * @return $this
     */
    public function setCardTypes($cardTypes)
    {
        $this->container['cardTypes'] = $cardTypes;

        return $this;
    }

    /**
     * Gets paymentTypes
     *
     * @return string[]
     */
    public function getPaymentTypes()
    {
        return $this->container['paymentTypes'];
    }

    /**
     * Sets paymentTypes
     *
     * @param string[] $paymentTypes Set of supported payment types for agreement: `card`, `applepay`, `googlepay`, `mobilepay`, `vipps`. If not defined defaults to all.
     *
     * @return $this
     */
    public function setPaymentTypes($paymentTypes)
    {
        $this->container['paymentTypes'] = $paymentTypes;

        return $this;
    }

    /**
     * Gets providerSettings
     *
     * @return map[string,object]
     */
    public function getProviderSettings()
    {
        return $this->container['providerSettings'];
    }

    /**
     * Sets providerSettings
     *
     * @param map[string,object] $providerSettings Key value map of provider settings
     *
     * @return $this
     */
    public function setProviderSettings($providerSettings)
    {
        $this->container['providerSettings'] = $providerSettings;

        return $this;
    }

    /**
     * Gets feeConfiguration
     *
     * @return map[string,object][]
     */
    public function getFeeConfiguration()
    {
        return $this->container['feeConfiguration'];
    }

    /**
     * Sets feeConfiguration
     *
     * @param map[string,object][] $feeConfiguration Prioritized list of fee configuration entries
     *
     * @return $this
     */
    public function setFeeConfiguration($feeConfiguration)
    {
        $this->container['feeConfiguration'] = $feeConfiguration;

        return $this;
    }

    /**
     * Gets threedSecure
     *
     * @return bool
     */
    public function getThreedSecure()
    {
        return $this->container['threedSecure'];
    }

    /**
     * Sets threedSecure
     *
     * @param bool $threedSecure Use 3DSecure for non-recurring payments (if supported by provider)
     *
     * @return $this
     */
    public function setThreedSecure($threedSecure)
    {
        $this->container['threedSecure'] = $threedSecure;

        return $this;
    }

    /**
     * Gets threedSecureRecurring
     *
     * @return bool
     */
    public function getThreedSecureRecurring()
    {
        return $this->container['threedSecureRecurring'];
    }

    /**
     * Sets threedSecureRecurring
     *
     * @param bool $threedSecureRecurring Use 3DSecure for recurring payments (if supported by provider)
     *
     * @return $this
     */
    public function setThreedSecureRecurring($threedSecureRecurring)
    {
        $this->container['threedSecureRecurring'] = $threedSecureRecurring;

        return $this;
    }

    /**
     * Gets securedByNets
     *
     * @return bool
     */
    public function getSecuredByNets()
    {
        return $this->container['securedByNets'];
    }

    /**
     * Sets securedByNets
     *
     * @param bool $securedByNets Use Secured By Nets for non-recurring payments (if supported by provider)
     *
     * @return $this
     */
    public function setSecuredByNets($securedByNets)
    {
        $this->container['securedByNets'] = $securedByNets;

        return $this;
    }

    /**
     * Gets securedByNetsRecurring
     *
     * @return bool
     */
    public function getSecuredByNetsRecurring()
    {
        return $this->container['securedByNetsRecurring'];
    }

    /**
     * Sets securedByNetsRecurring
     *
     * @param bool $securedByNetsRecurring Use Secured By Nets for recurring payments (if supported by provider)
     *
     * @return $this
     */
    public function setSecuredByNetsRecurring($securedByNetsRecurring)
    {
        $this->container['securedByNetsRecurring'] = $securedByNetsRecurring;

        return $this;
    }

    /**
     * Gets defaultRequireSca
     *
     * @return bool
     */
    public function getDefaultRequireSca()
    {
        return $this->container['defaultRequireSca'];
    }

    /**
     * Sets defaultRequireSca
     *
     * @param bool $defaultRequireSca Default behaviour if no specific SCA handing is defined in payment sessions. If enabled SCA will be required and un-enrolled cards will be declined.
     *
     * @return $this
     */
    public function setDefaultRequireSca($defaultRequireSca)
    {
        $this->container['defaultRequireSca'] = $defaultRequireSca;

        return $this;
    }

    /**
     * Gets disallowThreedSecureAttempted
     *
     * @return bool
     */
    public function getDisallowThreedSecureAttempted()
    {
        return $this->container['disallowThreedSecureAttempted'];
    }

    /**
     * Sets disallowThreedSecureAttempted
     *
     * @param bool $disallowThreedSecureAttempted Disallow 3D Secure status attempted which means that card issuer does not support 3D Secure so authentication could not be performed. An attempted 3D Secure flow normally results in liability shift.
     *
     * @return $this
     */
    public function setDisallowThreedSecureAttempted($disallowThreedSecureAttempted)
    {
        $this->container['disallowThreedSecureAttempted'] = $disallowThreedSecureAttempted;

        return $this;
    }

    /**
     * Gets payout
     *
     * @return bool
     */
    public function getPayout()
    {
        return $this->container['payout'];
    }

    /**
     * Sets payout
     *
     * @param bool $payout Use agreement for payout (if supported by provider)
     *
     * @return $this
     */
    public function setPayout($payout)
    {
        $this->container['payout'] = $payout;

        return $this;
    }

    /**
     * Gets vtsConfiguration
     *
     * @return \Reepay\Model\VtsConfiguration
     */
    public function getVtsConfiguration()
    {
        return $this->container['vtsConfiguration'];
    }

    /**
     * Sets vtsConfiguration
     *
     * @param \Reepay\Model\VtsConfiguration $vtsConfiguration vtsConfiguration
     *
     * @return $this
     */
    public function setVtsConfiguration($vtsConfiguration)
    {
        $this->container['vtsConfiguration'] = $vtsConfiguration;

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
