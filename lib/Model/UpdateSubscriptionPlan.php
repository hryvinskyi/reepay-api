<?php
/**
 * UpdateSubscriptionPlan
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
 * UpdateSubscriptionPlan Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateSubscriptionPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateSubscriptionPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'vat' => 'float',
        'dunningPlan' => 'string',
        'renewalReminderEmailDays' => 'int',
        'trialReminderEmailDays' => 'int',
        'partialPeriodHandling' => 'string',
        'includeZeroAmount' => 'bool',
        'setupFee' => 'int',
        'setupFeeText' => 'string',
        'setupFeeHandling' => 'string',
        'partialProrationDays' => 'bool',
        'fixedTrialDays' => 'bool',
        'minimumProratedAmount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'vat' => 'float',
        'dunningPlan' => null,
        'renewalReminderEmailDays' => 'int32',
        'trialReminderEmailDays' => 'int32',
        'partialPeriodHandling' => null,
        'includeZeroAmount' => null,
        'setupFee' => 'int32',
        'setupFeeText' => null,
        'setupFeeHandling' => null,
        'partialProrationDays' => null,
        'fixedTrialDays' => null,
        'minimumProratedAmount' => 'int32'
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
        'name' => 'name',
        'description' => 'description',
        'vat' => 'vat',
        'dunningPlan' => 'dunning_plan',
        'renewalReminderEmailDays' => 'renewal_reminder_email_days',
        'trialReminderEmailDays' => 'trial_reminder_email_days',
        'partialPeriodHandling' => 'partial_period_handling',
        'includeZeroAmount' => 'include_zero_amount',
        'setupFee' => 'setup_fee',
        'setupFeeText' => 'setup_fee_text',
        'setupFeeHandling' => 'setup_fee_handling',
        'partialProrationDays' => 'partial_proration_days',
        'fixedTrialDays' => 'fixed_trial_days',
        'minimumProratedAmount' => 'minimum_prorated_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'vat' => 'setVat',
        'dunningPlan' => 'setDunningPlan',
        'renewalReminderEmailDays' => 'setRenewalReminderEmailDays',
        'trialReminderEmailDays' => 'setTrialReminderEmailDays',
        'partialPeriodHandling' => 'setPartialPeriodHandling',
        'includeZeroAmount' => 'setIncludeZeroAmount',
        'setupFee' => 'setSetupFee',
        'setupFeeText' => 'setSetupFeeText',
        'setupFeeHandling' => 'setSetupFeeHandling',
        'partialProrationDays' => 'setPartialProrationDays',
        'fixedTrialDays' => 'setFixedTrialDays',
        'minimumProratedAmount' => 'setMinimumProratedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'vat' => 'getVat',
        'dunningPlan' => 'getDunningPlan',
        'renewalReminderEmailDays' => 'getRenewalReminderEmailDays',
        'trialReminderEmailDays' => 'getTrialReminderEmailDays',
        'partialPeriodHandling' => 'getPartialPeriodHandling',
        'includeZeroAmount' => 'getIncludeZeroAmount',
        'setupFee' => 'getSetupFee',
        'setupFeeText' => 'getSetupFeeText',
        'setupFeeHandling' => 'getSetupFeeHandling',
        'partialProrationDays' => 'getPartialProrationDays',
        'fixedTrialDays' => 'getFixedTrialDays',
        'minimumProratedAmount' => 'getMinimumProratedAmount'
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

    const PARTIAL_PERIOD_HANDLING_BILL_FULL = 'bill_full';
    const PARTIAL_PERIOD_HANDLING_BILL_PRORATED = 'bill_prorated';
    const PARTIAL_PERIOD_HANDLING_BILL_ZERO_AMOUNT = 'bill_zero_amount';
    const PARTIAL_PERIOD_HANDLING_NO_BILL = 'no_bill';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPartialPeriodHandlingAllowableValues()
    {
        return [
            self::PARTIAL_PERIOD_HANDLING_BILL_FULL,
            self::PARTIAL_PERIOD_HANDLING_BILL_PRORATED,
            self::PARTIAL_PERIOD_HANDLING_BILL_ZERO_AMOUNT,
            self::PARTIAL_PERIOD_HANDLING_NO_BILL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['dunningPlan'] = isset($data['dunningPlan']) ? $data['dunningPlan'] : null;
        $this->container['renewalReminderEmailDays'] = isset($data['renewalReminderEmailDays']) ? $data['renewalReminderEmailDays'] : null;
        $this->container['trialReminderEmailDays'] = isset($data['trialReminderEmailDays']) ? $data['trialReminderEmailDays'] : null;
        $this->container['partialPeriodHandling'] = isset($data['partialPeriodHandling']) ? $data['partialPeriodHandling'] : null;
        $this->container['includeZeroAmount'] = isset($data['includeZeroAmount']) ? $data['includeZeroAmount'] : null;
        $this->container['setupFee'] = isset($data['setupFee']) ? $data['setupFee'] : null;
        $this->container['setupFeeText'] = isset($data['setupFeeText']) ? $data['setupFeeText'] : null;
        $this->container['setupFeeHandling'] = isset($data['setupFeeHandling']) ? $data['setupFeeHandling'] : null;
        $this->container['partialProrationDays'] = isset($data['partialProrationDays']) ? $data['partialProrationDays'] : null;
        $this->container['fixedTrialDays'] = isset($data['fixedTrialDays']) ? $data['fixedTrialDays'] : null;
        $this->container['minimumProratedAmount'] = isset($data['minimumProratedAmount']) ? $data['minimumProratedAmount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getPartialPeriodHandlingAllowableValues();
        if (!is_null($this->container['partialPeriodHandling']) && !in_array($this->container['partialPeriodHandling'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'partialPeriodHandling', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the plan
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the plan
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param float $vat Optional vat for this plan. Account default is used if none given.
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets dunningPlan
     *
     * @return string
     */
    public function getDunningPlan()
    {
        return $this->container['dunningPlan'];
    }

    /**
     * Sets dunningPlan
     *
     * @param string $dunningPlan Dunning plan handle
     *
     * @return $this
     */
    public function setDunningPlan($dunningPlan)
    {
        $this->container['dunningPlan'] = $dunningPlan;

        return $this;
    }

    /**
     * Gets renewalReminderEmailDays
     *
     * @return int
     */
    public function getRenewalReminderEmailDays()
    {
        return $this->container['renewalReminderEmailDays'];
    }

    /**
     * Sets renewalReminderEmailDays
     *
     * @param int $renewalReminderEmailDays Optional renewal reminder email settings. Number of days before next billing to send a reminder email.
     *
     * @return $this
     */
    public function setRenewalReminderEmailDays($renewalReminderEmailDays)
    {
        $this->container['renewalReminderEmailDays'] = $renewalReminderEmailDays;

        return $this;
    }

    /**
     * Gets trialReminderEmailDays
     *
     * @return int
     */
    public function getTrialReminderEmailDays()
    {
        return $this->container['trialReminderEmailDays'];
    }

    /**
     * Sets trialReminderEmailDays
     *
     * @param int $trialReminderEmailDays Optional end of trial reminder email settings. Number of days before end of trial to send a reminder email.
     *
     * @return $this
     */
    public function setTrialReminderEmailDays($trialReminderEmailDays)
    {
        $this->container['trialReminderEmailDays'] = $trialReminderEmailDays;

        return $this;
    }

    /**
     * Gets partialPeriodHandling
     *
     * @return string
     */
    public function getPartialPeriodHandling()
    {
        return $this->container['partialPeriodHandling'];
    }

    /**
     * Sets partialPeriodHandling
     *
     * @param string $partialPeriodHandling How to handle a potential initial partial billing period for fixed day scheduling. The options are to bill for a full period, bill prorated for the partial period, bill a zero amoumt, or not to consider the period before first fixed day a billing period. The default is to bill prorated. Options: `bill_full`, `bill_prorated`, `bill_zero_amount`, `no_bill`.
     *
     * @return $this
     */
    public function setPartialPeriodHandling($partialPeriodHandling)
    {
        $allowedValues = $this->getPartialPeriodHandlingAllowableValues();
        if (!is_null($partialPeriodHandling) && !in_array($partialPeriodHandling, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'partialPeriodHandling', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['partialPeriodHandling'] = $partialPeriodHandling;

        return $this;
    }

    /**
     * Gets includeZeroAmount
     *
     * @return bool
     */
    public function getIncludeZeroAmount()
    {
        return $this->container['includeZeroAmount'];
    }

    /**
     * Sets includeZeroAmount
     *
     * @param bool $includeZeroAmount Whether to add a zero amount order line to subscription invoices if plan amount is zero or the subscription overrides to zero amount. The default is to not include the line. If no other order lines are present the plan order line will be added.
     *
     * @return $this
     */
    public function setIncludeZeroAmount($includeZeroAmount)
    {
        $this->container['includeZeroAmount'] = $includeZeroAmount;

        return $this;
    }

    /**
     * Gets setupFee
     *
     * @return int
     */
    public function getSetupFee()
    {
        return $this->container['setupFee'];
    }

    /**
     * Sets setupFee
     *
     * @param int $setupFee Optional one-time setup fee billed with the first invoice or as a separate invoice depending on the setting `setup_fee_handling`.
     *
     * @return $this
     */
    public function setSetupFee($setupFee)
    {
        $this->container['setupFee'] = $setupFee;

        return $this;
    }

    /**
     * Gets setupFeeText
     *
     * @return string
     */
    public function getSetupFeeText()
    {
        return $this->container['setupFeeText'];
    }

    /**
     * Sets setupFeeText
     *
     * @param string $setupFeeText Optional invoice order text for the setup fee that
     *
     * @return $this
     */
    public function setSetupFeeText($setupFeeText)
    {
        $this->container['setupFeeText'] = $setupFeeText;

        return $this;
    }

    /**
     * Gets setupFeeHandling
     *
     * @return string
     */
    public function getSetupFeeHandling()
    {
        return $this->container['setupFeeHandling'];
    }

    /**
     * Sets setupFeeHandling
     *
     * @param string $setupFeeHandling How the billing of the setup fee should be done. The options are: `first` - include setup fee as order line on the first scheduled invoice. `separate` - create a separate invoice for the setup fee, is appropriate if first invoice is not in conjunction with creation. `separate_conditional` - create a separate invoice for setup fee if the first invoice is not created in conjunction with the creation. Default is `first`.
     *
     * @return $this
     */
    public function setSetupFeeHandling($setupFeeHandling)
    {
        $this->container['setupFeeHandling'] = $setupFeeHandling;

        return $this;
    }

    /**
     * Gets partialProrationDays
     *
     * @return bool
     */
    public function getPartialProrationDays()
    {
        return $this->container['partialProrationDays'];
    }

    /**
     * Sets partialProrationDays
     *
     * @param bool $partialProrationDays For fixed day scheduling and prorated partial handling calculate prorated amount using whole days counting start day as a full day, or use by the minute proration calculation from start date time to the next period start. Default is true (whole days).
     *
     * @return $this
     */
    public function setPartialProrationDays($partialProrationDays)
    {
        $this->container['partialProrationDays'] = $partialProrationDays;

        return $this;
    }

    /**
     * Gets fixedTrialDays
     *
     * @return bool
     */
    public function getFixedTrialDays()
    {
        return $this->container['fixedTrialDays'];
    }

    /**
     * Sets fixedTrialDays
     *
     * @param bool $fixedTrialDays When using trial for fixed day scheduling use this setting to control if trial expires at midnight or the trial period is down to the minute. Default is true (trial until start of day). Trial in days can only be true if `partial_proration_days` is also set to true.
     *
     * @return $this
     */
    public function setFixedTrialDays($fixedTrialDays)
    {
        $this->container['fixedTrialDays'] = $fixedTrialDays;

        return $this;
    }

    /**
     * Gets minimumProratedAmount
     *
     * @return int
     */
    public function getMinimumProratedAmount()
    {
        return $this->container['minimumProratedAmount'];
    }

    /**
     * Sets minimumProratedAmount
     *
     * @param int $minimumProratedAmount When using prorated partial handling the prorated amount for plan and add-ons might result in very small amounts. A minimum prorated amount for plan and add-ons can be defined. If the prorated amount is below this minimum the amount will be changed to zero.
     *
     * @return $this
     */
    public function setMinimumProratedAmount($minimumProratedAmount)
    {
        $this->container['minimumProratedAmount'] = $minimumProratedAmount;

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
