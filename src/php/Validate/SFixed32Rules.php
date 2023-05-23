<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SFixed32Rules describes the constraints applied to `sfixed32` values
 *
 * Generated from protobuf message <code>validate.SFixed32Rules</code>
 */
class SFixed32Rules extends \Google\Protobuf\Internal\Message
{
    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>optional sfixed32 const = 1 [json_name = "const"];</code>
     */
    protected $const = null;
    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>optional sfixed32 lt = 2 [json_name = "lt"];</code>
     */
    protected $lt = null;
    /**
     * Lte specifies that this field must be less than or equal to the
     * specified value, inclusive
     *
     * Generated from protobuf field <code>optional sfixed32 lte = 3 [json_name = "lte"];</code>
     */
    protected $lte = null;
    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive. If the value of Gt is larger than a specified Lt or Lte, the
     * range is reversed.
     *
     * Generated from protobuf field <code>optional sfixed32 gt = 4 [json_name = "gt"];</code>
     */
    protected $gt = null;
    /**
     * Gte specifies that this field must be greater than or equal to the
     * specified value, inclusive. If the value of Gte is larger than a
     * specified Lt or Lte, the range is reversed.
     *
     * Generated from protobuf field <code>optional sfixed32 gte = 5 [json_name = "gte"];</code>
     */
    protected $gte = null;
    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated sfixed32 in = 6 [json_name = "in"];</code>
     */
    private $in;
    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated sfixed32 not_in = 7 [json_name = "notIn"];</code>
     */
    private $not_in;
    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>optional bool ignore_empty = 8 [json_name = "ignoreEmpty"];</code>
     */
    protected $ignore_empty = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $const
     *           Const specifies that this field must be exactly the specified value
     *     @type int $lt
     *           Lt specifies that this field must be less than the specified value,
     *           exclusive
     *     @type int $lte
     *           Lte specifies that this field must be less than or equal to the
     *           specified value, inclusive
     *     @type int $gt
     *           Gt specifies that this field must be greater than the specified value,
     *           exclusive. If the value of Gt is larger than a specified Lt or Lte, the
     *           range is reversed.
     *     @type int $gte
     *           Gte specifies that this field must be greater than or equal to the
     *           specified value, inclusive. If the value of Gte is larger than a
     *           specified Lt or Lte, the range is reversed.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $in
     *           In specifies that this field must be equal to one of the specified
     *           values
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $not_in
     *           NotIn specifies that this field cannot be equal to one of the specified
     *           values
     *     @type bool $ignore_empty
     *           IgnoreEmpty specifies that the validation rules of this field should be
     *           evaluated only if the field is not empty
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Validate\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>optional sfixed32 const = 1 [json_name = "const"];</code>
     * @return int
     */
    public function getConst()
    {
        return isset($this->const) ? $this->const : 0;
    }

    public function hasConst()
    {
        return isset($this->const);
    }

    public function clearConst()
    {
        unset($this->const);
    }

    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>optional sfixed32 const = 1 [json_name = "const"];</code>
     * @param int $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkInt32($var);
        $this->const = $var;

        return $this;
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>optional sfixed32 lt = 2 [json_name = "lt"];</code>
     * @return int
     */
    public function getLt()
    {
        return isset($this->lt) ? $this->lt : 0;
    }

    public function hasLt()
    {
        return isset($this->lt);
    }

    public function clearLt()
    {
        unset($this->lt);
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>optional sfixed32 lt = 2 [json_name = "lt"];</code>
     * @param int $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkInt32($var);
        $this->lt = $var;

        return $this;
    }

    /**
     * Lte specifies that this field must be less than or equal to the
     * specified value, inclusive
     *
     * Generated from protobuf field <code>optional sfixed32 lte = 3 [json_name = "lte"];</code>
     * @return int
     */
    public function getLte()
    {
        return isset($this->lte) ? $this->lte : 0;
    }

    public function hasLte()
    {
        return isset($this->lte);
    }

    public function clearLte()
    {
        unset($this->lte);
    }

    /**
     * Lte specifies that this field must be less than or equal to the
     * specified value, inclusive
     *
     * Generated from protobuf field <code>optional sfixed32 lte = 3 [json_name = "lte"];</code>
     * @param int $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkInt32($var);
        $this->lte = $var;

        return $this;
    }

    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive. If the value of Gt is larger than a specified Lt or Lte, the
     * range is reversed.
     *
     * Generated from protobuf field <code>optional sfixed32 gt = 4 [json_name = "gt"];</code>
     * @return int
     */
    public function getGt()
    {
        return isset($this->gt) ? $this->gt : 0;
    }

    public function hasGt()
    {
        return isset($this->gt);
    }

    public function clearGt()
    {
        unset($this->gt);
    }

    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive. If the value of Gt is larger than a specified Lt or Lte, the
     * range is reversed.
     *
     * Generated from protobuf field <code>optional sfixed32 gt = 4 [json_name = "gt"];</code>
     * @param int $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkInt32($var);
        $this->gt = $var;

        return $this;
    }

    /**
     * Gte specifies that this field must be greater than or equal to the
     * specified value, inclusive. If the value of Gte is larger than a
     * specified Lt or Lte, the range is reversed.
     *
     * Generated from protobuf field <code>optional sfixed32 gte = 5 [json_name = "gte"];</code>
     * @return int
     */
    public function getGte()
    {
        return isset($this->gte) ? $this->gte : 0;
    }

    public function hasGte()
    {
        return isset($this->gte);
    }

    public function clearGte()
    {
        unset($this->gte);
    }

    /**
     * Gte specifies that this field must be greater than or equal to the
     * specified value, inclusive. If the value of Gte is larger than a
     * specified Lt or Lte, the range is reversed.
     *
     * Generated from protobuf field <code>optional sfixed32 gte = 5 [json_name = "gte"];</code>
     * @param int $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkInt32($var);
        $this->gte = $var;

        return $this;
    }

    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated sfixed32 in = 6 [json_name = "in"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated sfixed32 in = 6 [json_name = "in"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::SFIXED32);
        $this->in = $arr;

        return $this;
    }

    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated sfixed32 not_in = 7 [json_name = "notIn"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotIn()
    {
        return $this->not_in;
    }

    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated sfixed32 not_in = 7 [json_name = "notIn"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::SFIXED32);
        $this->not_in = $arr;

        return $this;
    }

    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>optional bool ignore_empty = 8 [json_name = "ignoreEmpty"];</code>
     * @return bool
     */
    public function getIgnoreEmpty()
    {
        return isset($this->ignore_empty) ? $this->ignore_empty : false;
    }

    public function hasIgnoreEmpty()
    {
        return isset($this->ignore_empty);
    }

    public function clearIgnoreEmpty()
    {
        unset($this->ignore_empty);
    }

    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>optional bool ignore_empty = 8 [json_name = "ignoreEmpty"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreEmpty($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_empty = $var;

        return $this;
    }

}

