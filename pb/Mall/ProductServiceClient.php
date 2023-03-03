<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pb\Mall;

/**
 */
class ProductServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Pb\Mall\ProductIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindProductById(\Pb\Mall\ProductIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.mall.ProductService/FindProductById',
        $argument,
        ['\Pb\Mall\ProductResponse', 'decode'],
        $metadata, $options);
    }

}
