<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: experiment.proto

namespace Experiment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>experiment.CategoryInfo</code>
 */
class CategoryInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *实验类别id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     *实验类别名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 3;</code>
     */
    protected $subject_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *          实验类别id
     *     @type string $name
     *          实验类别名称
     *     @type int|string $subject_id
     *          学科ID 1-物理 2-化学 3-生物 4-小学科学
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     *实验类别id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *实验类别id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     *实验类别名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *实验类别名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 3;</code>
     * @return int|string
     */
    public function getSubjectId()
    {
        return $this->subject_id;
    }

    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSubjectId($var)
    {
        GPBUtil::checkInt64($var);
        $this->subject_id = $var;

        return $this;
    }

}

