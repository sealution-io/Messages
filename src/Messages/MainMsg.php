<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MainMsg</code>
 */
class MainMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MainMsg.eMsgType msg_type = 1;</code>
     */
    private $msg_type = 0;
    /**
     * Generated from protobuf field <code>int32 msg_id = 12;</code>
     */
    private $msg_id = 0;
    protected $oneofMsg;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $msg_type
     *     @type \Sealution\Messages\SetTimeMsg $set_time
     *     @type \Sealution\Messages\GetTimeMsg $get_time
     *     @type \Sealution\Messages\TimeMsg $time
     *     @type \Sealution\Messages\HeartBeatMsg $heartbeat
     *     @type \Sealution\Messages\SetConfigMsg $set_config
     *     @type \Sealution\Messages\GetConfigMsg $get_config
     *     @type \Sealution\Messages\ConfigMsg $config
     *     @type \Sealution\Messages\TestMsg $test
     *     @type \Sealution\Messages\TestRespMsg $test_resp
     *     @type \Sealution\Messages\RMMsg $rm
     *     @type int $msg_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mainmessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MainMsg.eMsgType msg_type = 1;</code>
     * @return int
     */
    public function getMsgType()
    {
        return $this->msg_type;
    }

    /**
     * Generated from protobuf field <code>.MainMsg.eMsgType msg_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMsgType($var)
    {
        GPBUtil::checkEnum($var, \Sealution\Messages\MainMsg_eMsgType::class);
        $this->msg_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SetTimeMsg set_time = 2;</code>
     * @return \Sealution\Messages\SetTimeMsg
     */
    public function getSetTime()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.SetTimeMsg set_time = 2;</code>
     * @param \Sealution\Messages\SetTimeMsg $var
     * @return $this
     */
    public function setSetTime($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\SetTimeMsg::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GetTimeMsg get_time = 3;</code>
     * @return \Sealution\Messages\GetTimeMsg
     */
    public function getGetTime()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.GetTimeMsg get_time = 3;</code>
     * @param \Sealution\Messages\GetTimeMsg $var
     * @return $this
     */
    public function setGetTime($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\GetTimeMsg::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TimeMsg time = 4;</code>
     * @return \Sealution\Messages\TimeMsg
     */
    public function getTime()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.TimeMsg time = 4;</code>
     * @param \Sealution\Messages\TimeMsg $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TimeMsg::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HeartBeatMsg heartbeat = 5;</code>
     * @return \Sealution\Messages\HeartBeatMsg
     */
    public function getHeartbeat()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.HeartBeatMsg heartbeat = 5;</code>
     * @param \Sealution\Messages\HeartBeatMsg $var
     * @return $this
     */
    public function setHeartbeat($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\HeartBeatMsg::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SetConfigMsg set_config = 6;</code>
     * @return \Sealution\Messages\SetConfigMsg
     */
    public function getSetConfig()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.SetConfigMsg set_config = 6;</code>
     * @param \Sealution\Messages\SetConfigMsg $var
     * @return $this
     */
    public function setSetConfig($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\SetConfigMsg::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GetConfigMsg get_config = 7;</code>
     * @return \Sealution\Messages\GetConfigMsg
     */
    public function getGetConfig()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>.GetConfigMsg get_config = 7;</code>
     * @param \Sealution\Messages\GetConfigMsg $var
     * @return $this
     */
    public function setGetConfig($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\GetConfigMsg::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ConfigMsg config = 8;</code>
     * @return \Sealution\Messages\ConfigMsg
     */
    public function getConfig()
    {
        return $this->readOneof(8);
    }

    /**
     * Generated from protobuf field <code>.ConfigMsg config = 8;</code>
     * @param \Sealution\Messages\ConfigMsg $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\ConfigMsg::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestMsg test = 9;</code>
     * @return \Sealution\Messages\TestMsg
     */
    public function getTest()
    {
        return $this->readOneof(9);
    }

    /**
     * Generated from protobuf field <code>.TestMsg test = 9;</code>
     * @param \Sealution\Messages\TestMsg $var
     * @return $this
     */
    public function setTest($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestMsg::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestRespMsg test_resp = 10;</code>
     * @return \Sealution\Messages\TestRespMsg
     */
    public function getTestResp()
    {
        return $this->readOneof(10);
    }

    /**
     * Generated from protobuf field <code>.TestRespMsg test_resp = 10;</code>
     * @param \Sealution\Messages\TestRespMsg $var
     * @return $this
     */
    public function setTestResp($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestRespMsg::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RMMsg rm = 11;</code>
     * @return \Sealution\Messages\RMMsg
     */
    public function getRm()
    {
        return $this->readOneof(11);
    }

    /**
     * Generated from protobuf field <code>.RMMsg rm = 11;</code>
     * @param \Sealution\Messages\RMMsg $var
     * @return $this
     */
    public function setRm($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\RMMsg::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 msg_id = 12;</code>
     * @return int
     */
    public function getMsgId()
    {
        return $this->msg_id;
    }

    /**
     * Generated from protobuf field <code>int32 msg_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMsgId($var)
    {
        GPBUtil::checkInt32($var);
        $this->msg_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOneofMsg()
    {
        return $this->whichOneof("oneofMsg");
    }

}

