<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validator.proto

namespace Pb\Validator;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.validator.OneofValidator</code>
 */
class OneofValidator extends \Google\Protobuf\Internal\Message
{
    /**
     * Require that one of the oneof fields is set.
     *
     * Generated from protobuf field <code>optional bool required = 1;</code>
     */
    protected $required = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $required
     *           Require that one of the oneof fields is set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Validator::initOnce();
        parent::__construct($data);
    }

    /**
     * Require that one of the oneof fields is set.
     *
     * Generated from protobuf field <code>optional bool required = 1;</code>
     * @return bool
     */
    public function getRequired()
    {
        return isset($this->required) ? $this->required : false;
    }

    public function hasRequired()
    {
        return isset($this->required);
    }

    public function clearRequired()
    {
        unset($this->required);
    }

    /**
     * Require that one of the oneof fields is set.
     *
     * Generated from protobuf field <code>optional bool required = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

}
