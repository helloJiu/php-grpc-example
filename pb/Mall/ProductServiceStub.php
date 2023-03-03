<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pb\Mall;

/**
 */
class ProductServiceStub {

    /**
     * @param \Pb\Mall\ProductIdRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\Mall\ProductResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function FindProductById(
        \Pb\Mall\ProductIdRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\Mall\ProductResponse {
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
            '/pb.mall.ProductService/FindProductById' => new \Grpc\MethodDescriptor(
                $this,
                'FindProductById',
                '\Pb\Mall\ProductIdRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
