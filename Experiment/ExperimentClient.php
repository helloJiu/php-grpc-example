<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Experiment;

/**
 * 定义实验操作服务
 */
class ExperimentClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取实验列表
     * @param \Experiment\IndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Index(\Experiment\IndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Index',
        $argument,
        ['\Experiment\IndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 重命名
     * @param \Experiment\RenameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Rename(\Experiment\RenameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Rename',
        $argument,
        ['\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 详情
     * @param \Experiment\InfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Info(\Experiment\InfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Info',
        $argument,
        ['\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 创建或更新
     * @param \Experiment\CreateOrUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOrUpdate(\Experiment\CreateOrUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/CreateOrUpdate',
        $argument,
        ['\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除实验
     * @param \Experiment\DeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Delete(\Experiment\DeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Delete',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量删除
     * @param \Experiment\BatchDeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchDelete(\Experiment\BatchDeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/BatchDelete',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量物理删除
     * @param \Experiment\BatchDeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchPhyDelete(\Experiment\BatchDeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/BatchPhyDelete',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 清空回收站
     * @param \Experiment\ClearRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Clear(\Experiment\ClearRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Clear',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 恢复实验
     * @param \Experiment\DeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Restore(\Experiment\DeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Restore',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Experiment\BatchDeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchRestore(\Experiment\BatchDeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/BatchRestore',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 移动实验
     * @param \Experiment\MoveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Move(\Experiment\MoveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Move',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量移动
     * @param \Experiment\BatchMoveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchMove(\Experiment\BatchMoveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/BatchMove',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 复制
     * @param \Experiment\CopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Copy(\Experiment\CopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Copy',
        $argument,
        ['\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 文件夹
     * @param \Experiment\IndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Folder(\Experiment\IndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Folder',
        $argument,
        ['\Experiment\IndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * category
     * @param \Experiment\CategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Category(\Experiment\CategoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Category',
        $argument,
        ['\Experiment\CategoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 播放
     * @param \Experiment\PlayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Play(\Experiment\PlayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/Play',
        $argument,
        ['\Experiment\PlayResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取实验全量数据
     * @param \Experiment\SyncGetFullDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncGetFullData(\Experiment\SyncGetFullDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/SyncGetFullData',
        $argument,
        ['\Experiment\SyncFullDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 同步基本数据至服务器
     * @param \Experiment\SyncDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncBaseData(\Experiment\SyncDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/SyncBaseData',
        $argument,
        ['\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 同步删除
     * @param \Experiment\SyncDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncDelete(\Experiment\SyncDeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/SyncDelete',
        $argument,
        ['\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取实验内容
     * @param \Experiment\GetContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetContentData(\Experiment\GetContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/GetContentData',
        $argument,
        ['\Experiment\GetContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 同步-上传需要同步的数据
     * @param \Experiment\SyncPushDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncPushData(\Experiment\SyncPushDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/experiment.Experiment/SyncPushData',
        $argument,
        ['\Experiment\SyncPushDataResponse', 'decode'],
        $metadata, $options);
    }

}
