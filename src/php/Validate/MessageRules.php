<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MessageRules describe the constraints applied to embedded message values.
 * For message-type fields, validation is performed recursively.
 *
 * Generated from protobuf message <code>validate.MessageRules</code>
 */
class MessageRules extends \Google\Protobuf\Internal\Message
{
    /**
     * Skip specifies that the validation rules of this field should not be
     * evaluated
     *
     * Generated from protobuf field <code>optional bool skip = 1 [json_name = "skip"];</code>
     */
    protected $skip = null;
    /**
     * Required specifies that this field must be set
     *
     * Generated from protobuf field <code>optional bool required = 2 [json_name = "required"];</code>
     */
    protected $required = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $skip
     *           Skip specifies that the validation rules of this field should not be
     *           evaluated
     *     @type bool $required
     *           Required specifies that this field must be set
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Validate\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * Skip specifies that the validation rules of this field should not be
     * evaluated
     *
     * Generated from protobuf field <code>optional bool skip = 1 [json_name = "skip"];</code>
     * @return bool
     */
    public function getSkip()
    {
        return isset($this->skip) ? $this->skip : false;
    }

    public function hasSkip()
    {
        return isset($this->skip);
    }

    public function clearSkip()
    {
        unset($this->skip);
    }

    /**
     * Skip specifies that the validation rules of this field should not be
     * evaluated
     *
     * Generated from protobuf field <code>optional bool skip = 1 [json_name = "skip"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSkip($var)
    {
        GPBUtil::checkBool($var);
        $this->skip = $var;

        return $this;
    }

    /**
     * Required specifies that this field must be set
     *
     * Generated from protobuf field <code>optional bool required = 2 [json_name = "required"];</code>
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
     * Required specifies that this field must be set
     *
     * Generated from protobuf field <code>optional bool required = 2 [json_name = "required"];</code>
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

