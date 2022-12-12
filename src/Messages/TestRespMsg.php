<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>TestRespMsg</code>
 */
class TestRespMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.TestRespMsg.eMsgType msg_type = 1;</code>
     */
    private $msg_type = 0;
    protected $OneofMsg;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $msg_type
     *     @type \Sealution\Messages\TestThroughPutRespMsg $test_throughput_resp
     *     @type \Sealution\Messages\TestStatsRespMsg $test_stats_resp
     *     @type \Sealution\Messages\TestThroughPutWithStatsRespMsg $test_throughput_with_stats_resp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mainmessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.TestRespMsg.eMsgType msg_type = 1;</code>
     * @return int
     */
    public function getMsgType()
    {
        return $this->msg_type;
    }

    /**
     * Generated from protobuf field <code>.TestRespMsg.eMsgType msg_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMsgType($var)
    {
        GPBUtil::checkEnum($var, \Sealution\Messages\TestRespMsg_eMsgType::class);
        $this->msg_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutRespMsg test_throughput_resp = 2;</code>
     * @return \Sealution\Messages\TestThroughPutRespMsg
     */
    public function getTestThroughputResp()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutRespMsg test_throughput_resp = 2;</code>
     * @param \Sealution\Messages\TestThroughPutRespMsg $var
     * @return $this
     */
    public function setTestThroughputResp($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestThroughPutRespMsg::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestStatsRespMsg test_stats_resp = 3;</code>
     * @return \Sealution\Messages\TestStatsRespMsg
     */
    public function getTestStatsResp()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.TestStatsRespMsg test_stats_resp = 3;</code>
     * @param \Sealution\Messages\TestStatsRespMsg $var
     * @return $this
     */
    public function setTestStatsResp($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestStatsRespMsg::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutWithStatsRespMsg test_throughput_with_stats_resp = 4;</code>
     * @return \Sealution\Messages\TestThroughPutWithStatsRespMsg
     */
    public function getTestThroughputWithStatsResp()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.TestThroughPutWithStatsRespMsg test_throughput_with_stats_resp = 4;</code>
     * @param \Sealution\Messages\TestThroughPutWithStatsRespMsg $var
     * @return $this
     */
    public function setTestThroughputWithStatsResp($var)
    {
        GPBUtil::checkMessage($var, \Sealution\Messages\TestThroughPutWithStatsRespMsg::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOneofMsg()
    {
        return $this->whichOneof("OneofMsg");
    }

}

