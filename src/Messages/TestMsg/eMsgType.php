<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages\TestMsg;

use UnexpectedValueException;

/**
 * Protobuf type <code>TestMsg.eMsgType</code>
 */
class eMsgType
{
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST_THROUGHPUT = 0;</code>
     */
    const MSG_TYPE_TEST_THROUGHPUT = 0;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST_RESTART_DEVICE = 1;</code>
     */
    const MSG_TYPE_TEST_RESTART_DEVICE = 1;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST_MUTE_BT = 2;</code>
     */
    const MSG_TYPE_TEST_MUTE_BT = 2;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST_STATS = 3;</code>
     */
    const MSG_TYPE_TEST_STATS = 3;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST_CLR_STATS = 4;</code>
     */
    const MSG_TYPE_TEST_CLR_STATS = 4;

    private static $valueToName = [
        self::MSG_TYPE_TEST_THROUGHPUT => 'MSG_TYPE_TEST_THROUGHPUT',
        self::MSG_TYPE_TEST_RESTART_DEVICE => 'MSG_TYPE_TEST_RESTART_DEVICE',
        self::MSG_TYPE_TEST_MUTE_BT => 'MSG_TYPE_TEST_MUTE_BT',
        self::MSG_TYPE_TEST_STATS => 'MSG_TYPE_TEST_STATS',
        self::MSG_TYPE_TEST_CLR_STATS => 'MSG_TYPE_TEST_CLR_STATS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(eMsgType::class, \Sealution\Messages\TestMsg_eMsgType::class);

