<?php
/**
 * Observations
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * The Weather Company PWS API
 *
 * APIs for Personal Weather Station Contributors. This is an unofficial openAPI document for working with The Weather Company (Weather Underground) API data.
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Observations Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Observations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'observations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
        'epoch' => 'int',
        'humidity' => 'int',
        'lat' => 'float',
        'lon' => 'float',
        'neighborhood' => 'string',
        'obs_time_local' => '\DateTime',
        'obs_time_utc' => '\DateTime',
        'qc_status' => 'int',
        'realtime_frequency' => 'int',
        'software_type' => 'string',
        'solar_radiation' => 'float',
        'station_id' => 'string',
        'uv' => 'float',
        'winddir' => 'int',
        'imperial' => 'object',
        'metric' => 'object',
        'metric_si' => 'object',
        'uk_hybrid' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'epoch' => 'int64',
        'humidity' => 'int32',
        'lat' => 'float',
        'lon' => 'float',
        'neighborhood' => null,
        'obs_time_local' => 'date-time',
        'obs_time_utc' => 'date-time',
        'qc_status' => null,
        'realtime_frequency' => null,
        'software_type' => null,
        'solar_radiation' => 'float',
        'station_id' => null,
        'uv' => 'float',
        'winddir' => null,
        'imperial' => null,
        'metric' => null,
        'metric_si' => null,
        'uk_hybrid' => null
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
        'country' => 'country',
        'epoch' => 'epoch',
        'humidity' => 'humidity',
        'lat' => 'lat',
        'lon' => 'lon',
        'neighborhood' => 'neighborhood',
        'obs_time_local' => 'obsTimeLocal',
        'obs_time_utc' => 'obsTimeUtc',
        'qc_status' => 'qcStatus',
        'realtime_frequency' => 'realtimeFrequency',
        'software_type' => 'softwareType',
        'solar_radiation' => 'solarRadiation',
        'station_id' => 'stationID',
        'uv' => 'uv',
        'winddir' => 'winddir',
        'imperial' => 'imperial',
        'metric' => 'metric',
        'metric_si' => 'metric_si',
        'uk_hybrid' => 'uk_hybrid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'epoch' => 'setEpoch',
        'humidity' => 'setHumidity',
        'lat' => 'setLat',
        'lon' => 'setLon',
        'neighborhood' => 'setNeighborhood',
        'obs_time_local' => 'setObsTimeLocal',
        'obs_time_utc' => 'setObsTimeUtc',
        'qc_status' => 'setQcStatus',
        'realtime_frequency' => 'setRealtimeFrequency',
        'software_type' => 'setSoftwareType',
        'solar_radiation' => 'setSolarRadiation',
        'station_id' => 'setStationId',
        'uv' => 'setUv',
        'winddir' => 'setWinddir',
        'imperial' => 'setImperial',
        'metric' => 'setMetric',
        'metric_si' => 'setMetricSi',
        'uk_hybrid' => 'setUkHybrid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'epoch' => 'getEpoch',
        'humidity' => 'getHumidity',
        'lat' => 'getLat',
        'lon' => 'getLon',
        'neighborhood' => 'getNeighborhood',
        'obs_time_local' => 'getObsTimeLocal',
        'obs_time_utc' => 'getObsTimeUtc',
        'qc_status' => 'getQcStatus',
        'realtime_frequency' => 'getRealtimeFrequency',
        'software_type' => 'getSoftwareType',
        'solar_radiation' => 'getSolarRadiation',
        'station_id' => 'getStationId',
        'uv' => 'getUv',
        'winddir' => 'getWinddir',
        'imperial' => 'getImperial',
        'metric' => 'getMetric',
        'metric_si' => 'getMetricSi',
        'uk_hybrid' => 'getUkHybrid'
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['epoch'] = isset($data['epoch']) ? $data['epoch'] : null;
        $this->container['humidity'] = isset($data['humidity']) ? $data['humidity'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lon'] = isset($data['lon']) ? $data['lon'] : null;
        $this->container['neighborhood'] = isset($data['neighborhood']) ? $data['neighborhood'] : null;
        $this->container['obs_time_local'] = isset($data['obs_time_local']) ? $data['obs_time_local'] : null;
        $this->container['obs_time_utc'] = isset($data['obs_time_utc']) ? $data['obs_time_utc'] : null;
        $this->container['qc_status'] = isset($data['qc_status']) ? $data['qc_status'] : null;
        $this->container['realtime_frequency'] = isset($data['realtime_frequency']) ? $data['realtime_frequency'] : null;
        $this->container['software_type'] = isset($data['software_type']) ? $data['software_type'] : null;
        $this->container['solar_radiation'] = isset($data['solar_radiation']) ? $data['solar_radiation'] : null;
        $this->container['station_id'] = isset($data['station_id']) ? $data['station_id'] : null;
        $this->container['uv'] = isset($data['uv']) ? $data['uv'] : null;
        $this->container['winddir'] = isset($data['winddir']) ? $data['winddir'] : null;
        $this->container['imperial'] = isset($data['imperial']) ? $data['imperial'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['metric_si'] = isset($data['metric_si']) ? $data['metric_si'] : null;
        $this->container['uk_hybrid'] = isset($data['uk_hybrid']) ? $data['uk_hybrid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['qc_status']) && ($this->container['qc_status'] > 1)) {
            $invalidProperties[] = "invalid value for 'qc_status', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['qc_status']) && ($this->container['qc_status'] < -1)) {
            $invalidProperties[] = "invalid value for 'qc_status', must be bigger than or equal to -1.";
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets epoch
     *
     * @return int
     */
    public function getEpoch()
    {
        return $this->container['epoch'];
    }

    /**
     * Sets epoch
     *
     * @param int $epoch epoch
     *
     * @return $this
     */
    public function setEpoch($epoch)
    {
        $this->container['epoch'] = $epoch;

        return $this;
    }

    /**
     * Gets humidity
     *
     * @return int
     */
    public function getHumidity()
    {
        return $this->container['humidity'];
    }

    /**
     * Sets humidity
     *
     * @param int $humidity humidity
     *
     * @return $this
     */
    public function setHumidity($humidity)
    {
        $this->container['humidity'] = $humidity;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param float $lat lat
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return float
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param float $lon lon
     *
     * @return $this
     */
    public function setLon($lon)
    {
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets neighborhood
     *
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->container['neighborhood'];
    }

    /**
     * Sets neighborhood
     *
     * @param string $neighborhood neighborhood
     *
     * @return $this
     */
    public function setNeighborhood($neighborhood)
    {
        $this->container['neighborhood'] = $neighborhood;

        return $this;
    }

    /**
     * Gets obs_time_local
     *
     * @return \DateTime
     */
    public function getObsTimeLocal()
    {
        return $this->container['obs_time_local'];
    }

    /**
     * Sets obs_time_local
     *
     * @param \DateTime $obs_time_local obs_time_local
     *
     * @return $this
     */
    public function setObsTimeLocal($obs_time_local)
    {
        $this->container['obs_time_local'] = $obs_time_local;

        return $this;
    }

    /**
     * Gets obs_time_utc
     *
     * @return \DateTime
     */
    public function getObsTimeUtc()
    {
        return $this->container['obs_time_utc'];
    }

    /**
     * Sets obs_time_utc
     *
     * @param \DateTime $obs_time_utc obs_time_utc
     *
     * @return $this
     */
    public function setObsTimeUtc($obs_time_utc)
    {
        $this->container['obs_time_utc'] = $obs_time_utc;

        return $this;
    }

    /**
     * Gets qc_status
     *
     * @return int
     */
    public function getQcStatus()
    {
        return $this->container['qc_status'];
    }

    /**
     * Sets qc_status
     *
     * @param int $qc_status Quality control indicator. -1 = No quality control check performed 0 = This observation was marked as possibly incorrect by our quality control algorithm 1 = This observation passed quality control checks
     *
     * @return $this
     */
    public function setQcStatus($qc_status)
    {

        if (!is_null($qc_status) && ($qc_status > 1)) {
            throw new \InvalidArgumentException('invalid value for $qc_status when calling Observations., must be smaller than or equal to 1.');
        }
        if (!is_null($qc_status) && ($qc_status < -1)) {
            throw new \InvalidArgumentException('invalid value for $qc_status when calling Observations., must be bigger than or equal to -1.');
        }

        $this->container['qc_status'] = $qc_status;

        return $this;
    }

    /**
     * Gets realtime_frequency
     *
     * @return int
     */
    public function getRealtimeFrequency()
    {
        return $this->container['realtime_frequency'];
    }

    /**
     * Sets realtime_frequency
     *
     * @param int $realtime_frequency realtime_frequency
     *
     * @return $this
     */
    public function setRealtimeFrequency($realtime_frequency)
    {
        $this->container['realtime_frequency'] = $realtime_frequency;

        return $this;
    }

    /**
     * Gets software_type
     *
     * @return string
     */
    public function getSoftwareType()
    {
        return $this->container['software_type'];
    }

    /**
     * Sets software_type
     *
     * @param string $software_type Software type of the PWS
     *
     * @return $this
     */
    public function setSoftwareType($software_type)
    {
        $this->container['software_type'] = $software_type;

        return $this;
    }

    /**
     * Gets solar_radiation
     *
     * @return float
     */
    public function getSolarRadiation()
    {
        return $this->container['solar_radiation'];
    }

    /**
     * Sets solar_radiation
     *
     * @param float $solar_radiation solar_radiation
     *
     * @return $this
     */
    public function setSolarRadiation($solar_radiation)
    {
        $this->container['solar_radiation'] = $solar_radiation;

        return $this;
    }

    /**
     * Gets station_id
     *
     * @return string
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     *
     * @param string $station_id station_id
     *
     * @return $this
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

        return $this;
    }

    /**
     * Gets uv
     *
     * @return float
     */
    public function getUv()
    {
        return $this->container['uv'];
    }

    /**
     * Sets uv
     *
     * @param float $uv uv
     *
     * @return $this
     */
    public function setUv($uv)
    {
        $this->container['uv'] = $uv;

        return $this;
    }

    /**
     * Gets winddir
     *
     * @return int
     */
    public function getWinddir()
    {
        return $this->container['winddir'];
    }

    /**
     * Sets winddir
     *
     * @param int $winddir winddir
     *
     * @return $this
     */
    public function setWinddir($winddir)
    {
        $this->container['winddir'] = $winddir;

        return $this;
    }

    /**
     * Gets imperial
     *
     * @return object
     */
    public function getImperial()
    {
        return $this->container['imperial'];
    }

    /**
     * Sets imperial
     *
     * @param object $imperial imperial
     *
     * @return $this
     */
    public function setImperial($imperial)
    {
        $this->container['imperial'] = $imperial;

        return $this;
    }

    /**
     * Gets metric
     *
     * @return object
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param object $metric metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;

        return $this;
    }

    /**
     * Gets metric_si
     *
     * @return object
     */
    public function getMetricSi()
    {
        return $this->container['metric_si'];
    }

    /**
     * Sets metric_si
     *
     * @param object $metric_si metric_si
     *
     * @return $this
     */
    public function setMetricSi($metric_si)
    {
        $this->container['metric_si'] = $metric_si;

        return $this;
    }

    /**
     * Gets uk_hybrid
     *
     * @return object
     */
    public function getUkHybrid()
    {
        return $this->container['uk_hybrid'];
    }

    /**
     * Sets uk_hybrid
     *
     * @param object $uk_hybrid uk_hybrid
     *
     * @return $this
     */
    public function setUkHybrid($uk_hybrid)
    {
        $this->container['uk_hybrid'] = $uk_hybrid;

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

