<?php
/**
 * CloudArchiveGenerationResponse
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Wikitude Studio API
 *
 * The Wikitude Studio API is a RESTful API which is used to * organize and manipulate projects and its targets * create wtc/wto files which can be used to create trackers in the Wikitude SDK with the JavaScript API * generate/publish a cloud archive to the cloud recognition service (image targets only)  Download API clients: * [`OpenAPI 3.0`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-openapi.zip) * [`JavaScript`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-javascript.zip) * [`Python`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-python.zip) * [`PHP`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-php.zip) * [`TypeScript (NodeJS)`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-typescript-node.zip) * [`Java`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-java.zip) * [`Ruby`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-ruby.zip) * [`C# .NET Core`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-csharp-netcore.zip)  This technical reference formally explains various API endpoints. Visit the [`Studio API documentation`](https://www.wikitude.com/external/doc/documentation/studio/) for a more general description.
 *
 * The version of the OpenAPI document: 3.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CloudArchiveGenerationResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CloudArchiveGenerationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CloudArchiveGenerationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'input_params' => '\OpenAPI\Client\Model\CloudArchiveGenerationResponseInputParams',
        'created' => 'float',
        'estimated_start' => 'float',
        'estimated_end' => 'float',
        'estimated_latency' => 'float',
        'status' => 'string',
        'tc_id' => 'string',
        'generation_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'input_params' => null,
        'created' => null,
        'estimated_start' => null,
        'estimated_end' => null,
        'estimated_latency' => null,
        'status' => null,
        'tc_id' => null,
        'generation_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'input_params' => 'inputParams',
        'created' => 'created',
        'estimated_start' => 'estimatedStart',
        'estimated_end' => 'estimatedEnd',
        'estimated_latency' => 'estimatedLatency',
        'status' => 'status',
        'tc_id' => 'tcId',
        'generation_id' => 'generationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'input_params' => 'setInputParams',
        'created' => 'setCreated',
        'estimated_start' => 'setEstimatedStart',
        'estimated_end' => 'setEstimatedEnd',
        'estimated_latency' => 'setEstimatedLatency',
        'status' => 'setStatus',
        'tc_id' => 'setTcId',
        'generation_id' => 'setGenerationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'input_params' => 'getInputParams',
        'created' => 'getCreated',
        'estimated_start' => 'getEstimatedStart',
        'estimated_end' => 'getEstimatedEnd',
        'estimated_latency' => 'getEstimatedLatency',
        'status' => 'getStatus',
        'tc_id' => 'getTcId',
        'generation_id' => 'getGenerationId'
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
        return self::$openAPIModelName;
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
        $this->container['input_params'] = $data['input_params'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['estimated_start'] = $data['estimated_start'] ?? null;
        $this->container['estimated_end'] = $data['estimated_end'] ?? null;
        $this->container['estimated_latency'] = $data['estimated_latency'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tc_id'] = $data['tc_id'] ?? null;
        $this->container['generation_id'] = $data['generation_id'] ?? null;
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
     * Gets input_params
     *
     * @return \OpenAPI\Client\Model\CloudArchiveGenerationResponseInputParams|null
     */
    public function getInputParams()
    {
        return $this->container['input_params'];
    }

    /**
     * Sets input_params
     *
     * @param \OpenAPI\Client\Model\CloudArchiveGenerationResponseInputParams|null $input_params input_params
     *
     * @return self
     */
    public function setInputParams($input_params)
    {
        $this->container['input_params'] = $input_params;

        return $this;
    }

    /**
     * Gets created
     *
     * @return float|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param float|null $created Timestamp of the job creation.
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets estimated_start
     *
     * @return float|null
     */
    public function getEstimatedStart()
    {
        return $this->container['estimated_start'];
    }

    /**
     * Sets estimated_start
     *
     * @param float|null $estimated_start Estimation of when the job will start processing.
     *
     * @return self
     */
    public function setEstimatedStart($estimated_start)
    {
        $this->container['estimated_start'] = $estimated_start;

        return $this;
    }

    /**
     * Gets estimated_end
     *
     * @return float|null
     */
    public function getEstimatedEnd()
    {
        return $this->container['estimated_end'];
    }

    /**
     * Sets estimated_end
     *
     * @param float|null $estimated_end Estimation of when the job will approximately be finished.
     *
     * @return self
     */
    public function setEstimatedEnd($estimated_end)
    {
        $this->container['estimated_end'] = $estimated_end;

        return $this;
    }

    /**
     * Gets estimated_latency
     *
     * @return float|null
     */
    public function getEstimatedLatency()
    {
        return $this->container['estimated_latency'];
    }

    /**
     * Sets estimated_latency
     *
     * @param float|null $estimated_latency Recommendation of when to first poll the corresponding status endpoint in milliseconds.
     *
     * @return self
     */
    public function setEstimatedLatency($estimated_latency)
    {
        $this->container['estimated_latency'] = $estimated_latency;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the asynchronous job.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tc_id
     *
     * @return string|null
     */
    public function getTcId()
    {
        return $this->container['tc_id'];
    }

    /**
     * Sets tc_id
     *
     * @param string|null $tc_id Unique identifier of the Target Collection.
     *
     * @return self
     */
    public function setTcId($tc_id)
    {
        $this->container['tc_id'] = $tc_id;

        return $this;
    }

    /**
     * Gets generation_id
     *
     * @return string|null
     */
    public function getGenerationId()
    {
        return $this->container['generation_id'];
    }

    /**
     * Sets generation_id
     *
     * @param string|null $generation_id The asynchronous job id.
     *
     * @return self
     */
    public function setGenerationId($generation_id)
    {
        $this->container['generation_id'] = $generation_id;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


