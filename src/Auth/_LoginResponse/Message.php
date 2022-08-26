<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth.proto

namespace Auth\_LoginResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Logging info about the login process
 *
 * Generated from protobuf message <code>auth._LoginResponse.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Message::class, \Auth\_LoginResponse_Message::class);
