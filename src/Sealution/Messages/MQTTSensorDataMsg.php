<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/mainmessage.proto

namespace Sealution\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MQTTSensorDataMsg</code>
 */
class MQTTSensorDataMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_bt = 1;</code>
     */
    protected $date_time_bt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_rm = 2;</code>
     */
    protected $date_time_rm = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_cm = 3;</code>
     */
    protected $date_time_cm = null;
    /**
     * Generated from protobuf field <code>int32 rssi = 4;</code>
     */
    protected $rssi = 0;
    /**
     * Generated from protobuf field <code>bytes data = 5;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $date_time_bt
     *     @type \Google\Protobuf\Timestamp $date_time_rm
     *     @type \Google\Protobuf\Timestamp $date_time_cm
     *     @type int $rssi
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \Sealution\Messages\Mainmessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_bt = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDateTimeBt()
    {
        return $this->date_time_bt;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_bt = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDateTimeBt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date_time_bt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_rm = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDateTimeRm()
    {
        return $this->date_time_rm;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_rm = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDateTimeRm($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date_time_rm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_cm = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDateTimeCm()
    {
        return $this->date_time_cm;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time_cm = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDateTimeCm($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date_time_cm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 rssi = 4;</code>
     * @return int
     */
    public function getRssi()
    {
        return $this->rssi;
    }

    /**
     * Generated from protobuf field <code>int32 rssi = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRssi($var)
    {
        GPBUtil::checkInt32($var);
        $this->rssi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 5;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

