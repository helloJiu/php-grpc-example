# gRPC PHP examples

This directory contains the sources for the following PHP examples:

- [Quick start][]
- [Basics tutorial][]

[Quick start]: https://grpc.io/docs/languages/php/quickstart/
[Basics tutorial]: https://grpc.io/docs/languages/php/basics/


```
protoc --go_out=. \
       --go-grpc_out=require_unimplemented_servers=false:. \
       internal/mall/pb/*.proto

# proto_path 指定import导入其他文件路径
protoc --proto_path=pb \
       --php_out=. \
       --grpc_out=generate_server:. \
       --plugin=protoc-gen-grpc=/mnt/c/home/work/go/bin/grpc_php_plugin \
       pb/*.proto
```
