<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mainmessage.proto

namespace Sealution\Messages\GetConfigMsg;

/**
 * Protobuf type <code>GetConfigMsg.eMsgType</code>
 */
class eMsgType
{
    /**
     * Generated from protobuf enum <code>MSG_TYPE_CONFIG_GATEWAY_GLOBAL = 0;</code>
     */
    const MSG_TYPE_CONFIG_GATEWAY_GLOBAL = 0;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_CONFIG_SENSOR_CONFIG = 1;</code>
     */
    const MSG_TYPE_CONFIG_SENSOR_CONFIG = 1;
    /**
     * Generated from protobuf enum <code>MSG_TYPE_CONFIG_STATUS = 2;</code>
     */
    const MSG_TYPE_CONFIG_STATUS = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(eMsgType::class, \Sealution\Messages\GetConfigMsg_eMsgType::class);

