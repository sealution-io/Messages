<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SetTimeMsg</code>
 */
class SetTimeMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time = 1;</code>
     */
    protected $date_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $date_time
     * }
     */
    public function __construct($data = NULL) {
        \Sealution\Messages\Mainmessage::initOnce();
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

}

