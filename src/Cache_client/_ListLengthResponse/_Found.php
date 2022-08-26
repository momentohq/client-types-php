<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cacheclient.proto

namespace Cache_client\_ListLengthResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cache_client._ListLengthResponse._Found</code>
 */
class _Found extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 length = 1;</code>
     */
    protected $length = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $length
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cacheclient::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 length = 1;</code>
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Generated from protobuf field <code>uint32 length = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkUint32($var);
        $this->length = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(_Found::class, \Cache_client\_ListLengthResponse__Found::class);

