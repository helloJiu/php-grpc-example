<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: experiment.proto

namespace Experiment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>experiment.BatchDeleteOrRestoreRequest</code>
 */
class BatchDeleteOrRestoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1 [(.validator.field) = {</code>
     */
    protected $tenant = '';
    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 2 [(.validator.field) = {</code>
     */
    protected $user_id = '';
    /**
     *实验ID，多个用,号隔开
     *
     * Generated from protobuf field <code>string uuids = 3 [(.validator.field) = {</code>
     */
    protected $uuids = '';

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
     *     @type string $uuids
     *          实验ID，多个用,号隔开
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1 [(.validator.field) = {</code>
     * @return string
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1 [(.validator.field) = {</code>
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
     * Generated from protobuf field <code>string user_id = 2 [(.validator.field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 2 [(.validator.field) = {</code>
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
     *实验ID，多个用,号隔开
     *
     * Generated from protobuf field <code>string uuids = 3 [(.validator.field) = {</code>
     * @return string
     */
    public function getUuids()
    {
        return $this->uuids;
    }

    /**
     *实验ID，多个用,号隔开
     *
     * Generated from protobuf field <code>string uuids = 3 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUuids($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuids = $var;

        return $this;
    }

}

