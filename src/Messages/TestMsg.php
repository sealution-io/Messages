<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>TestMsg</code>
 */
class TestMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.TestMsg.eMsgType msg_type = 1;</code>
     */
    private $msg_type = 0;
    protected $OneOfMsg;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $msg_type
     *     @type \Sealution\Messages\TestThroughPutMsg $test_throughput
     *     @type \Sealution\Messages\TestRestartDeviceMsg $test_restart_device
     *     @type \Sealution\Messages\TestMuteBTMsg $test_mute_bt
     *     @type \Sealution\Messages\TestStatsMsg $test_stats
     *     @type \Sealution\Messages\TestClrStatsMsg $test_clr_stats
     *     @type \Sealution\Messages\TestThroughPutWithStatsMsg $test_throughput_with_stats
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mainmessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.TestMsg.eMsgType msg_type = 1;</code>
     * @return int
     */
    public function getMsgType()
    {
        return $this->msg_type;
    }

    /**
     * Generated from protobuf field <code>.TestMsg.eMsgType msg_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMsgType($var)
    {
        GPBUtil::checkEnum($var, \Sealution\Messages\TestMsg_eMsgType::class);
        $this->msg_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutMsg test_throughput = 2;</code>
     * @return \Sealution\Messages\TestThroughPutMsg
     */
    public function getTestThroughput()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutMsg test_throughput = 2;</code>
     * @param \Sealution\Messages\TestThroughPutMsg $var
     * @return $this
     */
    public function setTestThroughput($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestThroughPutMsg::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestRestartDeviceMsg test_restart_device = 3;</code>
     * @return \Sealution\Messages\TestRestartDeviceMsg
     */
    public function getTestRestartDevice()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.TestRestartDeviceMsg test_restart_device = 3;</code>
     * @param \Sealution\Messages\TestRestartDeviceMsg $var
     * @return $this
     */
    public function setTestRestartDevice($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestRestartDeviceMsg::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestMuteBTMsg test_mute_bt = 4;</code>
     * @return \Sealution\Messages\TestMuteBTMsg
     */
    public function getTestMuteBt()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.TestMuteBTMsg test_mute_bt = 4;</code>
     * @param \Sealution\Messages\TestMuteBTMsg $var
     * @return $this
     */
    public function setTestMuteBt($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestMuteBTMsg::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestStatsMsg test_stats = 5;</code>
     * @return \Sealution\Messages\TestStatsMsg
     */
    public function getTestStats()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.TestStatsMsg test_stats = 5;</code>
     * @param \Sealution\Messages\TestStatsMsg $var
     * @return $this
     */
    public function setTestStats($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestStatsMsg::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestClrStatsMsg test_clr_stats = 6;</code>
     * @return \Sealution\Messages\TestClrStatsMsg
     */
    public function getTestClrStats()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.TestClrStatsMsg test_clr_stats = 6;</code>
     * @param \Sealution\Messages\TestClrStatsMsg $var
     * @return $this
     */
    public function setTestClrStats($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestClrStatsMsg::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutWithStatsMsg test_throughput_with_stats = 7;</code>
     * @return \Sealution\Messages\TestThroughPutWithStatsMsg
     */
    public function getTestThroughputWithStats()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutWithStatsMsg test_throughput_with_stats = 7;</code>
     * @param \Sealution\Messages\TestThroughPutWithStatsMsg $var
     * @return $this
     */
    public function setTestThroughputWithStats($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestThroughPutWithStatsMsg::class);
        $this->writeOneof(7, $var);

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

