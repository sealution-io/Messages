<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

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
     *     @type \TestThroughPutMsg $test_throughput
     *     @type \TestRestartDeviceMsg $test_restart_device
     *     @type \TestMuteBTMsg $test_mute_bt
     *     @type \TestStatsMsg $test_stats
     *     @type \TestClrStatsMsg $test_clr_stats
     *     @type \TestThroughPutWithStatsMsg $test_throughput_with_stats
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
        GPBUtil::checkEnum($var, \TestMsg_eMsgType::class);
        $this->msg_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutMsg test_throughput = 2;</code>
     * @return \TestThroughPutMsg
     */
    public function getTestThroughput()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutMsg test_throughput = 2;</code>
     * @param \TestThroughPutMsg $var
     * @return $this
     */
    public function setTestThroughput($var)
    {
        GPBUtil::checkMessage($var, \TestThroughPutMsg::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestRestartDeviceMsg test_restart_device = 3;</code>
     * @return \TestRestartDeviceMsg
     */
    public function getTestRestartDevice()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.TestRestartDeviceMsg test_restart_device = 3;</code>
     * @param \TestRestartDeviceMsg $var
     * @return $this
     */
    public function setTestRestartDevice($var)
    {
        GPBUtil::checkMessage($var, \TestRestartDeviceMsg::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestMuteBTMsg test_mute_bt = 4;</code>
     * @return \TestMuteBTMsg
     */
    public function getTestMuteBt()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.TestMuteBTMsg test_mute_bt = 4;</code>
     * @param \TestMuteBTMsg $var
     * @return $this
     */
    public function setTestMuteBt($var)
    {
        GPBUtil::checkMessage($var, \TestMuteBTMsg::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestStatsMsg test_stats = 5;</code>
     * @return \TestStatsMsg
     */
    public function getTestStats()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.TestStatsMsg test_stats = 5;</code>
     * @param \TestStatsMsg $var
     * @return $this
     */
    public function setTestStats($var)
    {
        GPBUtil::checkMessage($var, \TestStatsMsg::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestClrStatsMsg test_clr_stats = 6;</code>
     * @return \TestClrStatsMsg
     */
    public function getTestClrStats()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.TestClrStatsMsg test_clr_stats = 6;</code>
     * @param \TestClrStatsMsg $var
     * @return $this
     */
    public function setTestClrStats($var)
    {
        GPBUtil::checkMessage($var, \TestClrStatsMsg::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutWithStatsMsg test_throughput_with_stats = 7;</code>
     * @return \TestThroughPutWithStatsMsg
     */
    public function getTestThroughputWithStats()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutWithStatsMsg test_throughput_with_stats = 7;</code>
     * @param \TestThroughPutWithStatsMsg $var
     * @return $this
     */
    public function setTestThroughputWithStats($var)
    {
        GPBUtil::checkMessage($var, \TestThroughPutWithStatsMsg::class);
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
