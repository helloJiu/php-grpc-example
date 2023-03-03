<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pb\Experiment;

/**
 * 定义实验操作服务
 */
class ExperimentStub {

    /**
     * 获取实验列表
     * @param \Pb\Experiment\IndexRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\IndexResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Index(
        \Pb\Experiment\IndexRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\IndexResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 重命名
     * @param \Pb\Experiment\RenameRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Rename(
        \Pb\Experiment\RenameRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 详情
     * @param \Pb\Experiment\InfoRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Info(
        \Pb\Experiment\InfoRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 创建或更新
     * @param \Pb\Experiment\CreateOrUpdateRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateOrUpdate(
        \Pb\Experiment\CreateOrUpdateRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 删除实验
     * @param \Pb\Experiment\DeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Delete(
        \Pb\Experiment\DeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 批量删除
     * @param \Pb\Experiment\BatchDeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function BatchDelete(
        \Pb\Experiment\BatchDeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 批量物理删除
     * @param \Pb\Experiment\BatchDeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function BatchPhyDelete(
        \Pb\Experiment\BatchDeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 清空回收站
     * @param \Pb\Experiment\ClearRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Clear(
        \Pb\Experiment\ClearRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 恢复实验
     * @param \Pb\Experiment\DeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Restore(
        \Pb\Experiment\DeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Pb\Experiment\BatchDeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function BatchRestore(
        \Pb\Experiment\BatchDeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 移动实验
     * @param \Pb\Experiment\MoveRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Move(
        \Pb\Experiment\MoveRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 批量移动
     * @param \Pb\Experiment\BatchMoveRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function BatchMove(
        \Pb\Experiment\BatchMoveRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 复制
     * @param \Pb\Experiment\CopyRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Copy(
        \Pb\Experiment\CopyRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 文件夹
     * @param \Pb\Experiment\IndexRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\IndexResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Folder(
        \Pb\Experiment\IndexRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\IndexResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * category
     * @param \Pb\Experiment\CategoryRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\CategoryResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Category(
        \Pb\Experiment\CategoryRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\CategoryResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 播放
     * @param \Pb\Experiment\PlayRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\PlayResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Play(
        \Pb\Experiment\PlayRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\PlayResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 获取实验全量数据
     * @param \Pb\Experiment\SyncGetFullDataRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\SyncFullDataResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SyncGetFullData(
        \Pb\Experiment\SyncGetFullDataRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\SyncFullDataResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 同步基本数据至服务器
     * @param \Pb\Experiment\SyncDataRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SyncBaseData(
        \Pb\Experiment\SyncDataRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 同步删除
     * @param \Pb\Experiment\SyncDeleteRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SyncDelete(
        \Pb\Experiment\SyncDeleteRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 获取实验内容
     * @param \Pb\Experiment\GetContentRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\GetContentResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetContentData(
        \Pb\Experiment\GetContentRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\GetContentResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 同步-上传需要同步的数据
     * @param \Pb\Experiment\SyncPushDataRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Experiment\SyncPushDataResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SyncPushData(
        \Pb\Experiment\SyncPushDataRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Experiment\SyncPushDataResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/pb.experiment.Experiment/Index' => new \Grpc\MethodDescriptor(
                $this,
                'Index',
                '\Pb\Experiment\IndexRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Rename' => new \Grpc\MethodDescriptor(
                $this,
                'Rename',
                '\Pb\Experiment\RenameRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Info' => new \Grpc\MethodDescriptor(
                $this,
                'Info',
                '\Pb\Experiment\InfoRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/CreateOrUpdate' => new \Grpc\MethodDescriptor(
                $this,
                'CreateOrUpdate',
                '\Pb\Experiment\CreateOrUpdateRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Delete' => new \Grpc\MethodDescriptor(
                $this,
                'Delete',
                '\Pb\Experiment\DeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/BatchDelete' => new \Grpc\MethodDescriptor(
                $this,
                'BatchDelete',
                '\Pb\Experiment\BatchDeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/BatchPhyDelete' => new \Grpc\MethodDescriptor(
                $this,
                'BatchPhyDelete',
                '\Pb\Experiment\BatchDeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Clear' => new \Grpc\MethodDescriptor(
                $this,
                'Clear',
                '\Pb\Experiment\ClearRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Restore' => new \Grpc\MethodDescriptor(
                $this,
                'Restore',
                '\Pb\Experiment\DeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/BatchRestore' => new \Grpc\MethodDescriptor(
                $this,
                'BatchRestore',
                '\Pb\Experiment\BatchDeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Move' => new \Grpc\MethodDescriptor(
                $this,
                'Move',
                '\Pb\Experiment\MoveRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/BatchMove' => new \Grpc\MethodDescriptor(
                $this,
                'BatchMove',
                '\Pb\Experiment\BatchMoveRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Copy' => new \Grpc\MethodDescriptor(
                $this,
                'Copy',
                '\Pb\Experiment\CopyRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Folder' => new \Grpc\MethodDescriptor(
                $this,
                'Folder',
                '\Pb\Experiment\IndexRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Category' => new \Grpc\MethodDescriptor(
                $this,
                'Category',
                '\Pb\Experiment\CategoryRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/Play' => new \Grpc\MethodDescriptor(
                $this,
                'Play',
                '\Pb\Experiment\PlayRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/SyncGetFullData' => new \Grpc\MethodDescriptor(
                $this,
                'SyncGetFullData',
                '\Pb\Experiment\SyncGetFullDataRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/SyncBaseData' => new \Grpc\MethodDescriptor(
                $this,
                'SyncBaseData',
                '\Pb\Experiment\SyncDataRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/SyncDelete' => new \Grpc\MethodDescriptor(
                $this,
                'SyncDelete',
                '\Pb\Experiment\SyncDeleteRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/GetContentData' => new \Grpc\MethodDescriptor(
                $this,
                'GetContentData',
                '\Pb\Experiment\GetContentRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/pb.experiment.Experiment/SyncPushData' => new \Grpc\MethodDescriptor(
                $this,
                'SyncPushData',
                '\Pb\Experiment\SyncPushDataRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
