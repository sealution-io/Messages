<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages\TestRespMsg;

use UnexpectedValueException;

/**
 * Protobuf type <code>TestRespMsg.eMsgType</code>
 */
class eMsgType
{
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST_THROUGHPUT_RESP = 0;</code>
     */
    const MSG_TYPE_TEST_THROUGHPUT_RESP = 0;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST_STATS_RESP = 1;</code>
     */
    const MSG_TYPE_TEST_STATS_RESP = 1;

    private static $valueToName = [
        self::MSG_TYPE_TEST_THROUGHPUT_RESP => 'MSG_TYPE_TEST_THROUGHPUT_RESP',
        self::MSG_TYPE_TEST_STATS_RESP => 'MSG_TYPE_TEST_STATS_RESP',
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
class_alias(eMsgType::class, \Sealution\Messages\TestRespMsg_eMsgType::class);

