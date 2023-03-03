<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: experiment.proto

namespace Pb\Experiment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.experiment.SyncDataRequest</code>
 */
class SyncDataRequest extends \Google\Protobuf\Internal\Message
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
     *需要同步的数据
     *
     * Generated from protobuf field <code>string obj = 3 [(.pb.validator.field) = {</code>
     */
    protected $obj = '';
    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 4 [(.pb.validator.field) = {</code>
     */
    protected $subject_id = 0;
    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 5;</code>
     */
    protected $uuid = '';
    /**
     *客户端ID
     *
     * Generated from protobuf field <code>int64 client_id = 6;</code>
     */
    protected $client_id = 0;

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
     *     @type string $obj
     *          需要同步的数据
     *     @type int|string $subject_id
     *          学科ID 1-物理 2-化学 3-生物 4-小学科学
     *     @type string $uuid
     *          实验ID
     *     @type int|string $client_id
     *          客户端ID
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
     *需要同步的数据
     *
     * Generated from protobuf field <code>string obj = 3 [(.pb.validator.field) = {</code>
     * @return string
     */
    public function getObj()
    {
        return $this->obj;
    }

    /**
     *需要同步的数据
     *
     * Generated from protobuf field <code>string obj = 3 [(.pb.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setObj($var)
    {
        GPBUtil::checkString($var, True);
        $this->obj = $var;

        return $this;
    }

    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 4 [(.pb.validator.field) = {</code>
     * @return int|string
     */
    public function getSubjectId()
    {
        return $this->subject_id;
    }

    /**
     *学科ID 1-物理 2-化学 3-生物 4-小学科学
     *
     * Generated from protobuf field <code>int64 subject_id = 4 [(.pb.validator.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setSubjectId($var)
    {
        GPBUtil::checkInt64($var);
        $this->subject_id = $var;

        return $this;
    }

    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 5;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 5;</code>
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
     *客户端ID
     *
     * Generated from protobuf field <code>int64 client_id = 6;</code>
     * @return int|string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     *客户端ID
     *
     * Generated from protobuf field <code>int64 client_id = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkInt64($var);
        $this->client_id = $var;

        return $this;
    }

}

