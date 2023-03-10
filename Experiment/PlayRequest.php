<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: experiment.proto

namespace Experiment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>experiment.PlayRequest</code>
 */
class PlayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 1;</code>
     */
    protected $uuid = '';
    /**
     *租户名称
     *
     * Generated from protobuf field <code>string tenant = 2;</code>
     */
    protected $tenant = '';
    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     */
    protected $user_id = '';
    /**
     *实验类型 如果是资源类实验参数为res，其他实验参数留空
     *
     * Generated from protobuf field <code>string daty_type = 4;</code>
     */
    protected $daty_type = '';
    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 5 [(.validator.field) = {</code>
     */
    protected $subject_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uuid
     *          实验ID
     *     @type string $tenant
     *          租户名称
     *     @type string $user_id
     *          用户ID
     *     @type string $daty_type
     *          实验类型 如果是资源类实验参数为res，其他实验参数留空
     *     @type int|string $subject_id
     *          学科ID 1-物理 2-化学 3-生物 4-小学科学
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 1;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuid = $var;

        return $this;
    }

    /**
     *租户名称
     *
     * Generated from protobuf field <code>string tenant = 2;</code>
     * @return string
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     *租户名称
     *
     * Generated from protobuf field <code>string tenant = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTenant($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant = $var;

        return $this;
    }

    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     *实验类型 如果是资源类实验参数为res，其他实验参数留空
     *
     * Generated from protobuf field <code>string daty_type = 4;</code>
     * @return string
     */
    public function getDatyType()
    {
        return $this->daty_type;
    }

    /**
     *实验类型 如果是资源类实验参数为res，其他实验参数留空
     *
     * Generated from protobuf field <code>string daty_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDatyType($var)
    {
        GPBUtil::checkString($var, True);
        $this->daty_type = $var;

        return $this;
    }

    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 5 [(.validator.field) = {</code>
     * @return int|string
     */
    public function getSubjectId()
    {
        return $this->subject_id;
    }

    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 5 [(.validator.field) = {</code>
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

