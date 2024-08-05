<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GetConfigSensorConfigMsg</code>
 */
class GetConfigSensorConfigMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 sensor_config_index = 1;</code>
     */
    private $sensor_config_index = 0;
    /**
     * Generated from protobuf field <code>bytes sensor_name = 2;</code>
     */
    private $sensor_name = '';
    /**
     * Generated from protobuf field <code>uint32 sensor_type = 3;</code>
     */
    private $sensor_type = 0;
    /**
     * Generated from protobuf field <code>bytes mac_address = 4;</code>
     */
    private $mac_address = '';
    /**
     * Generated from protobuf field <code>uint32 receive_period = 5;</code>
     */
    private $receive_period = 0;
    /**
     * Generated from protobuf field <code>bytes extra_config = 6;</code>
     */
    private $extra_config = '';
    /**
     * Generated from protobuf field <code>uint32 enable = 7;</code>
     */
    private $enable = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $sensor_config_index
     *     @type string $sensor_name
     *     @type int $sensor_type
     *     @type string $mac_address
     *     @type int $receive_period
     *     @type string $extra_config
     *     @type int $enable
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mainmessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 sensor_config_index = 1;</code>
     * @return int
     */
    public function getSensorConfigIndex()
    {
        return $this->sensor_config_index;
    }

    /**
     * Generated from protobuf field <code>uint32 sensor_config_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSensorConfigIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->sensor_config_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes sensor_name = 2;</code>
     * @return string
     */
    public function getSensorName()
    {
        return $this->sensor_name;
    }

    /**
     * Generated from protobuf field <code>bytes sensor_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSensorName($var)
    {
        GPBUtil::checkString($var, False);
        $this->sensor_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 sensor_type = 3;</code>
     * @return int
     */
    public function getSensorType()
    {
        return $this->sensor_type;
    }

    /**
     * Generated from protobuf field <code>uint32 sensor_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSensorType($var)
    {
        GPBUtil::checkUint32($var);
        $this->sensor_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes mac_address = 4;</code>
     * @return string
     */
    public function getMacAddress()
    {
        return $this->mac_address;
    }

    /**
     * Generated from protobuf field <code>bytes mac_address = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMacAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->mac_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 receive_period = 5;</code>
     * @return int
     */
    public function getReceivePeriod()
    {
        return $this->receive_period;
    }

    /**
     * Generated from protobuf field <code>uint32 receive_period = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setReceivePeriod($var)
    {
        GPBUtil::checkUint32($var);
        $this->receive_period = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes extra_config = 6;</code>
     * @return string
     */
    public function getExtraConfig()
    {
        return $this->extra_config;
    }

    /**
     * Generated from protobuf field <code>bytes extra_config = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExtraConfig($var)
    {
        GPBUtil::checkString($var, False);
        $this->extra_config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 enable = 7;</code>
     * @return int
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Generated from protobuf field <code>uint32 enable = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEnable($var)
    {
        GPBUtil::checkUint32($var);
        $this->enable = $var;

        return $this;
    }

}

