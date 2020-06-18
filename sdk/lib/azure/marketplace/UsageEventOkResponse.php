<?php
/**
 * UsageEventOkResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SaaS fulfillment APIs, version 2
 *
 * This spec details the APIs that enable partners to sell their SaaS applications in the AppSource marketplace and the Azure Marketplace. These APIs are a requirement for transactable SaaS offers on the AppSource and Azure Marketplace.
 *
 * OpenAPI spec version: 2018-08-31
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\azure.marketplace;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UsageEventOkResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsageEventOkResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UsageEventOkResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'usage_event_id' => 'string',
'status' => 'string',
'message_time' => '\DateTime',
'resource_id' => 'string',
'quantity' => 'int',
'dimension' => 'string',
'effective_start_time' => '\DateTime',
'plan_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'usage_event_id' => 'uuid',
'status' => null,
'message_time' => 'date-time',
'resource_id' => 'uuid',
'quantity' => 'int64',
'dimension' => null,
'effective_start_time' => 'date-time',
'plan_id' => null    ];

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
        'usage_event_id' => 'usageEventId',
'status' => 'status',
'message_time' => 'messageTime',
'resource_id' => 'resourceId',
'quantity' => 'quantity',
'dimension' => 'dimension',
'effective_start_time' => 'effectiveStartTime',
'plan_id' => 'planId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'usage_event_id' => 'setUsageEventId',
'status' => 'setStatus',
'message_time' => 'setMessageTime',
'resource_id' => 'setResourceId',
'quantity' => 'setQuantity',
'dimension' => 'setDimension',
'effective_start_time' => 'setEffectiveStartTime',
'plan_id' => 'setPlanId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'usage_event_id' => 'getUsageEventId',
'status' => 'getStatus',
'message_time' => 'getMessageTime',
'resource_id' => 'getResourceId',
'quantity' => 'getQuantity',
'dimension' => 'getDimension',
'effective_start_time' => 'getEffectiveStartTime',
'plan_id' => 'getPlanId'    ];

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

    const STATUS_ACCEPTED = 'Accepted';
const STATUS_EXPIRED = 'Expired';
const STATUS_DUPLICATE = 'Duplicate';
const STATUS_ERROR = 'Error';
const STATUS_RESOURCE_NOT_FOUND = 'ResourceNotFound';
const STATUS_RESOURCE_NOT_AUTHORIZED = 'ResourceNotAuthorized';
const STATUS_INVALID_DIMENSIONBAD_ARGUMENT = 'InvalidDimension|BadArgument';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACCEPTED,
self::STATUS_EXPIRED,
self::STATUS_DUPLICATE,
self::STATUS_ERROR,
self::STATUS_RESOURCE_NOT_FOUND,
self::STATUS_RESOURCE_NOT_AUTHORIZED,
self::STATUS_INVALID_DIMENSIONBAD_ARGUMENT,        ];
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
        $this->container['usage_event_id'] = isset($data['usage_event_id']) ? $data['usage_event_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message_time'] = isset($data['message_time']) ? $data['message_time'] : null;
        $this->container['resource_id'] = isset($data['resource_id']) ? $data['resource_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['effective_start_time'] = isset($data['effective_start_time']) ? $data['effective_start_time'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets usage_event_id
     *
     * @return string
     */
    public function getUsageEventId()
    {
        return $this->container['usage_event_id'];
    }

    /**
     * Sets usage_event_id
     *
     * @param string $usage_event_id Unique identifier associated with the usage event
     *
     * @return $this
     */
    public function setUsageEventId($usage_event_id)
    {
        $this->container['usage_event_id'] = $usage_event_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the operation.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message_time
     *
     * @return \DateTime
     */
    public function getMessageTime()
    {
        return $this->container['message_time'];
    }

    /**
     * Sets message_time
     *
     * @param \DateTime $message_time Time this message was created in UTC
     *
     * @return $this
     */
    public function setMessageTime($message_time)
    {
        $this->container['message_time'] = $message_time;

        return $this;
    }

    /**
     * Gets resource_id
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string $resource_id Identifier of the resource against which usage is emitted
     *
     * @return $this
     */
    public function setResourceId($resource_id)
    {
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Number of units consumed
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets dimension
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
     * Sets dimension
     *
     * @param string $dimension Dimension identifier
     *
     * @return $this
     */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;

        return $this;
    }

    /**
     * Gets effective_start_time
     *
     * @return \DateTime
     */
    public function getEffectiveStartTime()
    {
        return $this->container['effective_start_time'];
    }

    /**
     * Sets effective_start_time
     *
     * @param \DateTime $effective_start_time Time in UTC when the usage event occurred
     *
     * @return $this
     */
    public function setEffectiveStartTime($effective_start_time)
    {
        $this->container['effective_start_time'] = $effective_start_time;

        return $this;
    }

    /**
     * Gets plan_id
     *
     * @return string
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param string $plan_id Plan associated with the purchased offer
     *
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

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
