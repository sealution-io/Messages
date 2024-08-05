<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages\MainMsg;

/**
 * Protobuf type <code>MainMsg.eMsgType</code>
 */
class eMsgType
{
    /**
     * Generated from protobuf enum <code>MSG_TYPE_SET_TIME = 0;</code>
     */
    const MSG_TYPE_SET_TIME = 0;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_GET_TIME = 1;</code>
     */
    const MSG_TYPE_GET_TIME = 1;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TIME = 2;</code>
     */
    const MSG_TYPE_TIME = 2;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_HEARTBEAT = 3;</code>
     */
    const MSG_TYPE_HEARTBEAT = 3;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_SET_CONFIG = 4;</code>
     */
    const MSG_TYPE_SET_CONFIG = 4;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_GET_CONFIG = 5;</code>
     */
    const MSG_TYPE_GET_CONFIG = 5;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_CONFIG = 6;</code>
     */
    const MSG_TYPE_CONFIG = 6;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST = 7;</code>
     */
    const MSG_TYPE_TEST = 7;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_TEST_RESP = 8;</code>
     */
    const MSG_TYPE_TEST_RESP = 8;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_RM = 9;</code>
     */
    const MSG_TYPE_RM = 9;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(eMsgType::class, \Sealution\Messages\MainMsg_eMsgType::class);

