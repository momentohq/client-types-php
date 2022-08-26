<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cacheclient.proto

namespace Cache_client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cache_client._DictionaryDeleteRequest</code>
 */
class _DictionaryDeleteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes dictionary_name = 1;</code>
     */
    protected $dictionary_name = '';
    protected $delete;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dictionary_name
     *     @type \Cache_client\_DictionaryDeleteRequest\Some $some
     *     @type \Cache_client\_DictionaryDeleteRequest\All $all
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cacheclient::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes dictionary_name = 1;</code>
     * @return string
     */
    public function getDictionaryName()
    {
        return $this->dictionary_name;
    }

    /**
     * Generated from protobuf field <code>bytes dictionary_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDictionaryName($var)
    {
        GPBUtil::checkString($var, False);
        $this->dictionary_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cache_client._DictionaryDeleteRequest.Some some = 2;</code>
     * @return \Cache_client\_DictionaryDeleteRequest\Some|null
     */
    public function getSome()
    {
        return $this->readOneof(2);
    }

    public function hasSome()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.cache_client._DictionaryDeleteRequest.Some some = 2;</code>
     * @param \Cache_client\_DictionaryDeleteRequest\Some $var
     * @return $this
     */
    public function setSome($var)
    {
        GPBUtil::checkMessage($var, \Cache_client\_DictionaryDeleteRequest\Some::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cache_client._DictionaryDeleteRequest.All all = 3;</code>
     * @return \Cache_client\_DictionaryDeleteRequest\All|null
     */
    public function getAll()
    {
        return $this->readOneof(3);
    }

    public function hasAll()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.cache_client._DictionaryDeleteRequest.All all = 3;</code>
     * @param \Cache_client\_DictionaryDeleteRequest\All $var
     * @return $this
     */
    public function setAll($var)
    {
        GPBUtil::checkMessage($var, \Cache_client\_DictionaryDeleteRequest\All::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDelete()
    {
        return $this->whichOneof("delete");
    }

}
