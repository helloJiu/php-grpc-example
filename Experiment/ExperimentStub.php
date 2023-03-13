<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Experiment;

/**
 * 定义实验操作服务
 */
class ExperimentStub {

    /**
     * 获取实验列表
     * @param \Experiment\IndexRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\IndexResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Index(
        \Experiment\IndexRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\IndexResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 重命名
     * @param \Experiment\RenameRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Rename(
        \Experiment\RenameRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 详情
     * @param \Experiment\InfoRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Info(
        \Experiment\InfoRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 创建或更新
     * @param \Experiment\CreateOrUpdateRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateOrUpdate(
        \Experiment\CreateOrUpdateRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 删除实验
     * @param \Experiment\DeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Delete(
        \Experiment\DeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 批量删除
     * @param \Experiment\BatchDeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function BatchDelete(
        \Experiment\BatchDeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 批量物理删除
     * @param \Experiment\BatchDeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function BatchPhyDelete(
        \Experiment\BatchDeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 清空回收站
     * @param \Experiment\ClearRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Clear(
        \Experiment\ClearRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 恢复实验
     * @param \Experiment\DeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Restore(
        \Experiment\DeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Experiment\BatchDeleteOrRestoreRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function BatchRestore(
        \Experiment\BatchDeleteOrRestoreRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 移动实验
     * @param \Experiment\MoveRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Move(
        \Experiment\MoveRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 批量移动
     * @param \Experiment\BatchMoveRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function BatchMove(
        \Experiment\BatchMoveRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 复制
     * @param \Experiment\CopyRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Copy(
        \Experiment\CopyRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 文件夹
     * @param \Experiment\IndexRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\IndexResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Folder(
        \Experiment\IndexRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\IndexResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * category
     * @param \Experiment\CategoryRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\CategoryResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Category(
        \Experiment\CategoryRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\CategoryResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 播放
     * @param \Experiment\PlayRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\PlayResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Play(
        \Experiment\PlayRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\PlayResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 获取实验全量数据
     * @param \Experiment\SyncGetFullDataRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\SyncFullDataResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SyncGetFullData(
        \Experiment\SyncGetFullDataRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\SyncFullDataResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 同步基本数据至服务器
     * @param \Experiment\SyncDataRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\InfoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SyncBaseData(
        \Experiment\SyncDataRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\InfoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 同步删除
     * @param \Experiment\SyncDeleteRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\Reply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SyncDelete(
        \Experiment\SyncDeleteRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\Reply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 获取实验内容
     * @param \Experiment\GetContentRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\GetContentResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetContentData(
        \Experiment\GetContentRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\GetContentResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * 同步-上传需要同步的数据
     * @param \Experiment\SyncPushDataRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Experiment\SyncPushDataResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SyncPushData(
        \Experiment\SyncPushDataRequest $request,
        \Grpc\ServerContext $context
    ): ?\Experiment\SyncPushDataResponse {
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
            '/experiment.Experiment/Index' => new \Grpc\MethodDescriptor(
                $this,
                'Index',
                '\Experiment\IndexRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Rename' => new \Grpc\MethodDescriptor(
                $this,
                'Rename',
                '\Experiment\RenameRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Info' => new \Grpc\MethodDescriptor(
                $this,
                'Info',
                '\Experiment\InfoRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/CreateOrUpdate' => new \Grpc\MethodDescriptor(
                $this,
                'CreateOrUpdate',
                '\Experiment\CreateOrUpdateRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Delete' => new \Grpc\MethodDescriptor(
                $this,
                'Delete',
                '\Experiment\DeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/BatchDelete' => new \Grpc\MethodDescriptor(
                $this,
                'BatchDelete',
                '\Experiment\BatchDeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/BatchPhyDelete' => new \Grpc\MethodDescriptor(
                $this,
                'BatchPhyDelete',
                '\Experiment\BatchDeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Clear' => new \Grpc\MethodDescriptor(
                $this,
                'Clear',
                '\Experiment\ClearRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Restore' => new \Grpc\MethodDescriptor(
                $this,
                'Restore',
                '\Experiment\DeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/BatchRestore' => new \Grpc\MethodDescriptor(
                $this,
                'BatchRestore',
                '\Experiment\BatchDeleteOrRestoreRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Move' => new \Grpc\MethodDescriptor(
                $this,
                'Move',
                '\Experiment\MoveRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/BatchMove' => new \Grpc\MethodDescriptor(
                $this,
                'BatchMove',
                '\Experiment\BatchMoveRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Copy' => new \Grpc\MethodDescriptor(
                $this,
                'Copy',
                '\Experiment\CopyRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Folder' => new \Grpc\MethodDescriptor(
                $this,
                'Folder',
                '\Experiment\IndexRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Category' => new \Grpc\MethodDescriptor(
                $this,
                'Category',
                '\Experiment\CategoryRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/Play' => new \Grpc\MethodDescriptor(
                $this,
                'Play',
                '\Experiment\PlayRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/SyncGetFullData' => new \Grpc\MethodDescriptor(
                $this,
                'SyncGetFullData',
                '\Experiment\SyncGetFullDataRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/SyncBaseData' => new \Grpc\MethodDescriptor(
                $this,
                'SyncBaseData',
                '\Experiment\SyncDataRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/SyncDelete' => new \Grpc\MethodDescriptor(
                $this,
                'SyncDelete',
                '\Experiment\SyncDeleteRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/GetContentData' => new \Grpc\MethodDescriptor(
                $this,
                'GetContentData',
                '\Experiment\GetContentRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/experiment.Experiment/SyncPushData' => new \Grpc\MethodDescriptor(
                $this,
                'SyncPushData',
                '\Experiment\SyncPushDataRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
