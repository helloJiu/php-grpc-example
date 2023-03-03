<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: experiment.proto

namespace Pb\Experiment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 移动实验
 *
 * Generated from protobuf message <code>pb.experiment.MoveRequest</code>
 */
class MoveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1 [(.pb.validator.field) = {</code>
     */
    protected $tenant = '';
    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 2 [(.pb.validator.field) = {</code>
     */
    protected $user_id = '';
    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 3 [(.pb.validator.field) = {</code>
     */
    protected $uuid = '';
    /**
     *文件夹id 【0为根目录】
     *
     * Generated from protobuf field <code>string parent_id = 4;</code>
     */
    protected $parent_id = '';
    /**
     *版本号
     *
     * Generated from protobuf field <code>int64 version = 5;</code>
     */
    protected $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tenant
     *          租户
     *     @type string $user_id
     *          用户ID
     *     @type string $uuid
     *          实验ID
     *     @type string $parent_id
     *          文件夹id 【0为根目录】
     *     @type int|string $version
     *          版本号
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1 [(.pb.validator.field) = {</code>
     * @return string
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1 [(.pb.validator.field) = {</code>
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
     * Generated from protobuf field <code>string user_id = 2 [(.pb.validator.field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 2 [(.pb.validator.field) = {</code>
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
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 3 [(.pb.validator.field) = {</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 3 [(.pb.validator.field) = {</code>
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
     *文件夹id 【0为根目录】
     *
     * Generated from protobuf field <code>string parent_id = 4;</code>
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     *文件夹id 【0为根目录】
     *
     * Generated from protobuf field <code>string parent_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_id = $var;

        return $this;
    }

    /**
     *版本号
     *
     * Generated from protobuf field <code>int64 version = 5;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *版本号
     *
     * Generated from protobuf field <code>int64 version = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

}

