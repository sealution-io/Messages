<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GetConfigStatusConfigMsg</code>
 */
class GetConfigStatusConfigMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes mac_address = 1;</code>
     */
    private $mac_address = '';
    /**
     * Generated from protobuf field <code>int32 battery_level = 2;</code>
     */
    private $battery_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mac_address
     *     @type int $battery_level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mainmessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes mac_address = 1;</code>
     * @return string
     */
    public function getMacAddress()
    {
        return $this->mac_address;
    }

    /**
     * Generated from protobuf field <code>bytes mac_address = 1;</code>
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
     * Generated from protobuf field <code>int32 battery_level = 2;</code>
     * @return int
     */
    public function getBatteryLevel()
    {
        return $this->battery_level;
    }

    /**
     * Generated from protobuf field <code>int32 battery_level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBatteryLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->battery_level = $var;

        return $this;
    }

}

