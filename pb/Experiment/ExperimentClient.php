<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pb\Experiment;

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
     * @param \Pb\Experiment\IndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Index(\Pb\Experiment\IndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Index',
        $argument,
        ['\Pb\Experiment\IndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 重命名
     * @param \Pb\Experiment\RenameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Rename(\Pb\Experiment\RenameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Rename',
        $argument,
        ['\Pb\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 详情
     * @param \Pb\Experiment\InfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Info(\Pb\Experiment\InfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Info',
        $argument,
        ['\Pb\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 创建或更新
     * @param \Pb\Experiment\CreateOrUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOrUpdate(\Pb\Experiment\CreateOrUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/CreateOrUpdate',
        $argument,
        ['\Pb\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除实验
     * @param \Pb\Experiment\DeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Delete(\Pb\Experiment\DeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Delete',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量删除
     * @param \Pb\Experiment\BatchDeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchDelete(\Pb\Experiment\BatchDeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/BatchDelete',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量物理删除
     * @param \Pb\Experiment\BatchDeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchPhyDelete(\Pb\Experiment\BatchDeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/BatchPhyDelete',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 清空回收站
     * @param \Pb\Experiment\ClearRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Clear(\Pb\Experiment\ClearRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Clear',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 恢复实验
     * @param \Pb\Experiment\DeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Restore(\Pb\Experiment\DeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Restore',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Pb\Experiment\BatchDeleteOrRestoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchRestore(\Pb\Experiment\BatchDeleteOrRestoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/BatchRestore',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 移动实验
     * @param \Pb\Experiment\MoveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Move(\Pb\Experiment\MoveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Move',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量移动
     * @param \Pb\Experiment\BatchMoveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchMove(\Pb\Experiment\BatchMoveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/BatchMove',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 复制
     * @param \Pb\Experiment\CopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Copy(\Pb\Experiment\CopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Copy',
        $argument,
        ['\Pb\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 文件夹
     * @param \Pb\Experiment\IndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Folder(\Pb\Experiment\IndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Folder',
        $argument,
        ['\Pb\Experiment\IndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * category
     * @param \Pb\Experiment\CategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Category(\Pb\Experiment\CategoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Category',
        $argument,
        ['\Pb\Experiment\CategoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 播放
     * @param \Pb\Experiment\PlayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Play(\Pb\Experiment\PlayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/Play',
        $argument,
        ['\Pb\Experiment\PlayResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取实验全量数据
     * @param \Pb\Experiment\SyncGetFullDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncGetFullData(\Pb\Experiment\SyncGetFullDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/SyncGetFullData',
        $argument,
        ['\Pb\Experiment\SyncFullDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 同步基本数据至服务器
     * @param \Pb\Experiment\SyncDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncBaseData(\Pb\Experiment\SyncDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/SyncBaseData',
        $argument,
        ['\Pb\Experiment\InfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 同步删除
     * @param \Pb\Experiment\SyncDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncDelete(\Pb\Experiment\SyncDeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/SyncDelete',
        $argument,
        ['\Pb\Experiment\Reply', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取实验内容
     * @param \Pb\Experiment\GetContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetContentData(\Pb\Experiment\GetContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/GetContentData',
        $argument,
        ['\Pb\Experiment\GetContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 同步-上传需要同步的数据
     * @param \Pb\Experiment\SyncPushDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncPushData(\Pb\Experiment\SyncPushDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.experiment.Experiment/SyncPushData',
        $argument,
        ['\Pb\Experiment\SyncPushDataResponse', 'decode'],
        $metadata, $options);
    }

}
