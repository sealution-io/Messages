<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RMMsg</code>
 */
class RMMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time = 1;</code>
     */
    private $date_time = null;
    /**
     * Generated from protobuf field <code>bytes mac_address = 2;</code>
     */
    private $mac_address = '';
    /**
     * Generated from protobuf field <code>.RMMsg.eMsgType msg_type = 3;</code>
     */
    private $msg_type = 0;
    protected $OneOfMsg;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $date_time
     *     @type string $mac_address
     *     @type int $msg_type
     *     @type \Sealution\Messages\SensorDataMsg $sensor_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mainmessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDateTime()
    {
        return $this->date_time;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes mac_address = 2;</code>
     * @return string
     */
    public function getMacAddress()
    {
        return $this->mac_address;
    }

    /**
     * Generated from protobuf field <code>bytes mac_address = 2;</code>
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
     * Generated from protobuf field <code>.RMMsg.eMsgType msg_type = 3;</code>
     * @return int
     */
    public function getMsgType()
    {
        return $this->msg_type;
    }

    /**
     * Generated from protobuf field <code>.RMMsg.eMsgType msg_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMsgType($var)
    {
        GPBUtil::checkEnum($var, \Sealution\Messages\RMMsg_eMsgType::class);
        $this->msg_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SensorDataMsg sensor_data = 4;</code>
     * @return \Sealution\Messages\SensorDataMsg
     */
    public function getSensorData()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.SensorDataMsg sensor_data = 4;</code>
     * @param \Sealution\Messages\SensorDataMsg $var
     * @return $this
     */
    public function setSensorData($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\SensorDataMsg::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOneOfMsg()
    {
        return $this->whichOneof("OneOfMsg");
    }

}

