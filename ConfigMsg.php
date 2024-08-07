<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ConfigMsg</code>
 */
class ConfigMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes configuration = 1;</code>
     */
    private $configuration = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $configuration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mainmessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes configuration = 1;</code>
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Generated from protobuf field <code>bytes configuration = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConfiguration($var)
    {
        GPBUtil::checkString($var, False);
        $this->configuration = $var;

        return $this;
    }

}

