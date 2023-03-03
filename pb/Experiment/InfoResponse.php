<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: experiment.proto

namespace Pb\Experiment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 实验详情响应结果
 *
 * Generated from protobuf message <code>pb.experiment.InfoResponse</code>
 */
class InfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1;</code>
     */
    protected $tenant = '';
    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     */
    protected $user_id = '';
    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 3;</code>
     */
    protected $uuid = '';
    /**
     *学科ID
     *
     * Generated from protobuf field <code>int64 subject_id = 4;</code>
     */
    protected $subject_id = 0;
    /**
     *标题
     *
     * Generated from protobuf field <code>string title = 5;</code>
     */
    protected $title = '';
    /**
     *实验缩略图
     *
     * Generated from protobuf field <code>string thumb = 6;</code>
     */
    protected $thumb = '';
    /**
     *0-实验  1-文件夹
     *
     * Generated from protobuf field <code>int64 is_folder = 7;</code>
     */
    protected $is_folder = 0;
    /**
     *0-非vip课件  1-VIP课件
     *
     * Generated from protobuf field <code>int64 is_vip = 8;</code>
     */
    protected $is_vip = 0;
    /**
     *0-未设置  1-小学 2-初中 3-高中
     *
     * Generated from protobuf field <code>int64 period = 9;</code>
     */
    protected $period = 0;
    /**
     *0-根目录  文件夹ID
     *
     * Generated from protobuf field <code>string parent_id = 10;</code>
     */
    protected $parent_id = '';
    /**
     *0-未删除  1-已移到到回收站
     *
     * Generated from protobuf field <code>int64 status = 11;</code>
     */
    protected $status = 0;
    /**
     *是否再回收站根目录下  0-否 1-是
     *
     * Generated from protobuf field <code>int64 is_recycle_root = 12;</code>
     */
    protected $is_recycle_root = 0;
    /**
     *创建时间
     *
     * Generated from protobuf field <code>int64 create_at = 13;</code>
     */
    protected $create_at = 0;
    /**
     *更新时间
     *
     * Generated from protobuf field <code>int64 update_at = 14;</code>
     */
    protected $update_at = 0;
    /**
     *实验内容 (其中实验数据得KEY为data，简介的KEY为Introduce)
     *
     * Generated from protobuf field <code>map<string, string> content = 15;</code>
     */
    private $content;
    /**
     *实验分类
     *
     * Generated from protobuf field <code>int64 category_id = 16;</code>
     */
    protected $category_id = 0;
    /**
     *关键字
     *
     * Generated from protobuf field <code>string keyword = 17;</code>
     */
    protected $keyword = '';
    /**
     *版本号
     *
     * Generated from protobuf field <code>int64 version = 18;</code>
     */
    protected $version = 0;
    /**
     *特殊字段，标记此次更新是否生成图片
     *
     * Generated from protobuf field <code>bool is_make_img = 19;</code>
     */
    protected $is_make_img = false;

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
     *     @type int|string $subject_id
     *          学科ID
     *     @type string $title
     *          标题
     *     @type string $thumb
     *          实验缩略图
     *     @type int|string $is_folder
     *          0-实验  1-文件夹
     *     @type int|string $is_vip
     *          0-非vip课件  1-VIP课件
     *     @type int|string $period
     *          0-未设置  1-小学 2-初中 3-高中
     *     @type string $parent_id
     *          0-根目录  文件夹ID
     *     @type int|string $status
     *          0-未删除  1-已移到到回收站
     *     @type int|string $is_recycle_root
     *          是否再回收站根目录下  0-否 1-是
     *     @type int|string $create_at
     *          创建时间
     *     @type int|string $update_at
     *          更新时间
     *     @type array|\Google\Protobuf\Internal\MapField $content
     *          实验内容 (其中实验数据得KEY为data，简介的KEY为Introduce)
     *     @type int|string $category_id
     *          实验分类
     *     @type string $keyword
     *          关键字
     *     @type int|string $version
     *          版本号
     *     @type bool $is_make_img
     *          特殊字段，标记此次更新是否生成图片
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1;</code>
     * @return string
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     *租户
     *
     * Generated from protobuf field <code>string tenant = 1;</code>
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
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     *用户ID
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
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
     * Generated from protobuf field <code>string uuid = 3;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     *实验ID
     *
     * Generated from protobuf field <code>string uuid = 3;</code>
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
     *学科ID
     *
     * Generated from protobuf field <code>int64 subject_id = 4;</code>
     * @return int|string
     */
    public function getSubjectId()
    {
        return $this->subject_id;
    }

    /**
     *学科ID
     *
     * Generated from protobuf field <code>int64 subject_id = 4;</code>
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
     *标题
     *
     * Generated from protobuf field <code>string title = 5;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     *标题
     *
     * Generated from protobuf field <code>string title = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     *实验缩略图
     *
     * Generated from protobuf field <code>string thumb = 6;</code>
     * @return string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     *实验缩略图
     *
     * Generated from protobuf field <code>string thumb = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setThumb($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumb = $var;

        return $this;
    }

    /**
     *0-实验  1-文件夹
     *
     * Generated from protobuf field <code>int64 is_folder = 7;</code>
     * @return int|string
     */
    public function getIsFolder()
    {
        return $this->is_folder;
    }

    /**
     *0-实验  1-文件夹
     *
     * Generated from protobuf field <code>int64 is_folder = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIsFolder($var)
    {
        GPBUtil::checkInt64($var);
        $this->is_folder = $var;

        return $this;
    }

    /**
     *0-非vip课件  1-VIP课件
     *
     * Generated from protobuf field <code>int64 is_vip = 8;</code>
     * @return int|string
     */
    public function getIsVip()
    {
        return $this->is_vip;
    }

    /**
     *0-非vip课件  1-VIP课件
     *
     * Generated from protobuf field <code>int64 is_vip = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIsVip($var)
    {
        GPBUtil::checkInt64($var);
        $this->is_vip = $var;

        return $this;
    }

    /**
     *0-未设置  1-小学 2-初中 3-高中
     *
     * Generated from protobuf field <code>int64 period = 9;</code>
     * @return int|string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     *0-未设置  1-小学 2-初中 3-高中
     *
     * Generated from protobuf field <code>int64 period = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkInt64($var);
        $this->period = $var;

        return $this;
    }

    /**
     *0-根目录  文件夹ID
     *
     * Generated from protobuf field <code>string parent_id = 10;</code>
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     *0-根目录  文件夹ID
     *
     * Generated from protobuf field <code>string parent_id = 10;</code>
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
     *0-未删除  1-已移到到回收站
     *
     * Generated from protobuf field <code>int64 status = 11;</code>
     * @return int|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *0-未删除  1-已移到到回收站
     *
     * Generated from protobuf field <code>int64 status = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt64($var);
        $this->status = $var;

        return $this;
    }

    /**
     *是否再回收站根目录下  0-否 1-是
     *
     * Generated from protobuf field <code>int64 is_recycle_root = 12;</code>
     * @return int|string
     */
    public function getIsRecycleRoot()
    {
        return $this->is_recycle_root;
    }

    /**
     *是否再回收站根目录下  0-否 1-是
     *
     * Generated from protobuf field <code>int64 is_recycle_root = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIsRecycleRoot($var)
    {
        GPBUtil::checkInt64($var);
        $this->is_recycle_root = $var;

        return $this;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>int64 create_at = 13;</code>
     * @return int|string
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>int64 create_at = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->create_at = $var;

        return $this;
    }

    /**
     *更新时间
     *
     * Generated from protobuf field <code>int64 update_at = 14;</code>
     * @return int|string
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     *更新时间
     *
     * Generated from protobuf field <code>int64 update_at = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->update_at = $var;

        return $this;
    }

    /**
     *实验内容 (其中实验数据得KEY为data，简介的KEY为Introduce)
     *
     * Generated from protobuf field <code>map<string, string> content = 15;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *实验内容 (其中实验数据得KEY为data，简介的KEY为Introduce)
     *
     * Generated from protobuf field <code>map<string, string> content = 15;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setContent($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->content = $arr;

        return $this;
    }

    /**
     *实验分类
     *
     * Generated from protobuf field <code>int64 category_id = 16;</code>
     * @return int|string
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     *实验分类
     *
     * Generated from protobuf field <code>int64 category_id = 16;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCategoryId($var)
    {
        GPBUtil::checkInt64($var);
        $this->category_id = $var;

        return $this;
    }

    /**
     *关键字
     *
     * Generated from protobuf field <code>string keyword = 17;</code>
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     *关键字
     *
     * Generated from protobuf field <code>string keyword = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword = $var;

        return $this;
    }

    /**
     *版本号
     *
     * Generated from protobuf field <code>int64 version = 18;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *版本号
     *
     * Generated from protobuf field <code>int64 version = 18;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

    /**
     *特殊字段，标记此次更新是否生成图片
     *
     * Generated from protobuf field <code>bool is_make_img = 19;</code>
     * @return bool
     */
    public function getIsMakeImg()
    {
        return $this->is_make_img;
    }

    /**
     *特殊字段，标记此次更新是否生成图片
     *
     * Generated from protobuf field <code>bool is_make_img = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMakeImg($var)
    {
        GPBUtil::checkBool($var);
        $this->is_make_img = $var;

        return $this;
    }

}
