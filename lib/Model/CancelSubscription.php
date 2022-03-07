<?php
/**
 * CancelSubscription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;

/**
 * CancelSubscription Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Reepay
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CancelSubscription implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CancelSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'notice_periods' => 'int',
        'notice_periods_after_current' => 'bool',
        'expire_at' => 'string',
        'trial_with_notice_and_fixation' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'notice_periods' => 'notice_periods',
        'notice_periods_after_current' => 'notice_periods_after_current',
        'expire_at' => 'expire_at',
        'trial_with_notice_and_fixation' => 'trial_with_notice_and_fixation'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'notice_periods' => 'setNoticePeriods',
        'notice_periods_after_current' => 'setNoticePeriodsAfterCurrent',
        'expire_at' => 'setExpireAt',
        'trial_with_notice_and_fixation' => 'setTrialWithNoticeAndFixation'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'notice_periods' => 'getNoticePeriods',
        'notice_periods_after_current' => 'getNoticePeriodsAfterCurrent',
        'expire_at' => 'getExpireAt',
        'trial_with_notice_and_fixation' => 'getTrialWithNoticeAndFixation'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['notice_periods'] = isset($data['notice_periods']) ? $data['notice_periods'] : null;
        $this->container['notice_periods_after_current'] = isset($data['notice_periods_after_current']) ? $data['notice_periods_after_current'] : null;
        $this->container['expire_at'] = isset($data['expire_at']) ? $data['expire_at'] : null;
        $this->container['trial_with_notice_and_fixation'] = isset($data['trial_with_notice_and_fixation']) ? $data['trial_with_notice_and_fixation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets notice_periods
     * @return int
     */
    public function getNoticePeriods()
    {
        return $this->container['notice_periods'];
    }

    /**
     * Sets notice_periods
     * @param int $notice_periods Optional override of the notice periods set for plan. See plan for the definition of notice periods.
     * @return $this
     */
    public function setNoticePeriods($notice_periods)
    {
        $this->container['notice_periods'] = $notice_periods;

        return $this;
    }

    /**
     * Gets notice_periods_after_current
     * @return bool
     */
    public function getNoticePeriodsAfterCurrent()
    {
        return $this->container['notice_periods_after_current'];
    }

    /**
     * Sets notice_periods_after_current
     * @param bool $notice_periods_after_current Optional override of the notice periods after current setting for plan. See plan for the definition of notice periods.
     * @return $this
     */
    public function setNoticePeriodsAfterCurrent($notice_periods_after_current)
    {
        $this->container['notice_periods_after_current'] = $notice_periods_after_current;

        return $this;
    }

    /**
     * Gets expire_at
     * @return string
     */
    public function getExpireAt()
    {
        return $this->container['expire_at'];
    }

    /**
     * Sets expire_at
     * @param string $expire_at Optional fixed date and time on when the subscription should expire. Using this option results in prorated billing for the last partial period. Notice that when using this option the cancellation cannot be uncancelled in the last partial period. The fixed expire date takes precedence over notice periods and fixation period. The fixed expire date must be after the end of the current periods. On the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss`.
     * @return $this
     */
    public function setExpireAt($expire_at)
    {
        $this->container['expire_at'] = $expire_at;

        return $this;
    }

    /**
     * Gets trial_with_notice_and_fixation
     * @return bool
     */
    public function getTrialWithNoticeAndFixation()
    {
        return $this->container['trial_with_notice_and_fixation'];
    }

    /**
     * Sets trial_with_notice_and_fixation
     * @param bool $trial_with_notice_and_fixation If subscription is in trial and this flag is set to true, the potential notice and fixation periods will be respected. This can be used in a paid trial scenario where the trial period have custom duration and price collected with a setup fee. E.g. if notice period is set to 2, the subscription will run for the trial period and two full paid periods.
     * @return $this
     */
    public function setTrialWithNoticeAndFixation($trial_with_notice_and_fixation)
    {
        $this->container['trial_with_notice_and_fixation'] = $trial_with_notice_and_fixation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


