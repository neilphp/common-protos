<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DurationRules describe the constraints applied exclusively to the
 * `google.protobuf.Duration` well-known type
 *
 * Generated from protobuf message <code>validate.DurationRules</code>
 */
class DurationRules extends \Google\Protobuf\Internal\Message
{
    /**
     * Required specifies that this field must be set
     *
     * Generated from protobuf field <code>optional bool required = 1 [json_name = "required"];</code>
     */
    protected $required = null;
    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration const = 2 [json_name = "const"];</code>
     */
    protected $const = null;
    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration lt = 3 [json_name = "lt"];</code>
     */
    protected $lt = null;
    /**
     * Lt specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration lte = 4 [json_name = "lte"];</code>
     */
    protected $lte = null;
    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration gt = 5 [json_name = "gt"];</code>
     */
    protected $gt = null;
    /**
     * Gte specifies that this field must be greater than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration gte = 6 [json_name = "gte"];</code>
     */
    protected $gte = null;
    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7 [json_name = "in"];</code>
     */
    private $in;
    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8 [json_name = "notIn"];</code>
     */
    private $not_in;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $required
     *           Required specifies that this field must be set
     *     @type \Google\Protobuf\Duration $const
     *           Const specifies that this field must be exactly the specified value
     *     @type \Google\Protobuf\Duration $lt
     *           Lt specifies that this field must be less than the specified value,
     *           exclusive
     *     @type \Google\Protobuf\Duration $lte
     *           Lt specifies that this field must be less than the specified value,
     *           inclusive
     *     @type \Google\Protobuf\Duration $gt
     *           Gt specifies that this field must be greater than the specified value,
     *           exclusive
     *     @type \Google\Protobuf\Duration $gte
     *           Gte specifies that this field must be greater than the specified value,
     *           inclusive
     *     @type array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $in
     *           In specifies that this field must be equal to one of the specified
     *           values
     *     @type array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $not_in
     *           NotIn specifies that this field cannot be equal to one of the specified
     *           values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Validate\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * Required specifies that this field must be set
     *
     * Generated from protobuf field <code>optional bool required = 1 [json_name = "required"];</code>
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
     * Generated from protobuf field <code>optional bool required = 1 [json_name = "required"];</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration const = 2 [json_name = "const"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getConst()
    {
        return $this->const;
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
     * Generated from protobuf field <code>optional .google.protobuf.Duration const = 2 [json_name = "const"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->const = $var;

        return $this;
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration lt = 3 [json_name = "lt"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLt()
    {
        return $this->lt;
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
     * Generated from protobuf field <code>optional .google.protobuf.Duration lt = 3 [json_name = "lt"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lt = $var;

        return $this;
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration lte = 4 [json_name = "lte"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLte()
    {
        return $this->lte;
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
     * Lt specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration lte = 4 [json_name = "lte"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lte = $var;

        return $this;
    }

    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration gt = 5 [json_name = "gt"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getGt()
    {
        return $this->gt;
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
     * exclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration gt = 5 [json_name = "gt"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->gt = $var;

        return $this;
    }

    /**
     * Gte specifies that this field must be greater than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration gte = 6 [json_name = "gte"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getGte()
    {
        return $this->gte;
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
     * Gte specifies that this field must be greater than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration gte = 6 [json_name = "gte"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->gte = $var;

        return $this;
    }

    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7 [json_name = "in"];</code>
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
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7 [json_name = "in"];</code>
     * @param array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->in = $arr;

        return $this;
    }

    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8 [json_name = "notIn"];</code>
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
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8 [json_name = "notIn"];</code>
     * @param array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->not_in = $arr;

        return $this;
    }

}

