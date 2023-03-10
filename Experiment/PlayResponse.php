<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: experiment.proto

namespace Experiment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>experiment.PlayResponse</code>
 */
class PlayResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *非vip播放时长(单位秒) 如果为0则播放时长不受限制
     *
     * Generated from protobuf field <code>int64 duration = 1;</code>
     */
    protected $duration = 0;
    /**
     *true:已限流  false:未限流
     *
     * Generated from protobuf field <code>bool is_limit = 2;</code>
     */
    protected $is_limit = false;
    /**
     *true:vip用户  false:非vip用户
     *
     * Generated from protobuf field <code>bool is_vip = 3;</code>
     */
    protected $is_vip = false;
    /**
     *播放数据
     *
     * Generated from protobuf field <code>.experiment.PlayData play_data = 4;</code>
     */
    protected $play_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $duration
     *          非vip播放时长(单位秒) 如果为0则播放时长不受限制
     *     @type bool $is_limit
     *          true:已限流  false:未限流
     *     @type bool $is_vip
     *          true:vip用户  false:非vip用户
     *     @type \Experiment\PlayData $play_data
     *          播放数据
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     *非vip播放时长(单位秒) 如果为0则播放时长不受限制
     *
     * Generated from protobuf field <code>int64 duration = 1;</code>
     * @return int|string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     *非vip播放时长(单位秒) 如果为0则播放时长不受限制
     *
     * Generated from protobuf field <code>int64 duration = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkInt64($var);
        $this->duration = $var;

        return $this;
    }

    /**
     *true:已限流  false:未限流
     *
     * Generated from protobuf field <code>bool is_limit = 2;</code>
     * @return bool
     */
    public function getIsLimit()
    {
        return $this->is_limit;
    }

    /**
     *true:已限流  false:未限流
     *
     * Generated from protobuf field <code>bool is_limit = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLimit($var)
    {
        GPBUtil::checkBool($var);
        $this->is_limit = $var;

        return $this;
    }

    /**
     *true:vip用户  false:非vip用户
     *
     * Generated from protobuf field <code>bool is_vip = 3;</code>
     * @return bool
     */
    public function getIsVip()
    {
        return $this->is_vip;
    }

    /**
     *true:vip用户  false:非vip用户
     *
     * Generated from protobuf field <code>bool is_vip = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVip($var)
    {
        GPBUtil::checkBool($var);
        $this->is_vip = $var;

        return $this;
    }

    /**
     *播放数据
     *
     * Generated from protobuf field <code>.experiment.PlayData play_data = 4;</code>
     * @return \Experiment\PlayData|null
     */
    public function getPlayData()
    {
        return $this->play_data;
    }

    public function hasPlayData()
    {
        return isset($this->play_data);
    }

    public function clearPlayData()
    {
        unset($this->play_data);
    }

    /**
     *播放数据
     *
     * Generated from protobuf field <code>.experiment.PlayData play_data = 4;</code>
     * @param \Experiment\PlayData $var
     * @return $this
     */
    public function setPlayData($var)
    {
        GPBUtil::checkMessage($var, \Experiment\PlayData::class);
        $this->play_data = $var;

        return $this;
    }

}

