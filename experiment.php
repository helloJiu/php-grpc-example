<?php
/*
 *
 * Copyright 2015 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

// To generate the necessary proto classes:
// $ protoc --proto_path=../protos --php_out=. --grpc_out=.
//   --plugin=protoc-gen-grpc=../../bins/opt/grpc_php_plugin
//   ../protos/helloworld.proto

use Experiment\ExperimentClient;
use Experiment\InfoRequest;

require dirname(__FILE__).'/vendor/autoload.php';

function greet($hostname, $name)
{
    $client = new ExperimentClient($hostname, [
        'credentials' => null,
    ]);
 
    $request = new InfoRequest([
        'uuid'=> "597b4293b41f099334762a7e",
        "columns" => 'content',
    ]);
    // $request->setUuid("2d51ebe2c6b51b627d8ea256d401b013");
    list($response, $status) = $client->Info($request, [], )->wait();
    if ($status->code !== Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    var_dump($response->getTenant());
    var_dump($response->getUserId());
    $data = json_decode($response->serializeToJsonString(), true);
    var_dump(json_decode($data['content']['data'], true));
    

}

$name = !empty($argv[1]) ? $argv[1] : 'world';
$hostname = !empty($argv[2]) ? $argv[2] : 'localhost:5200';
greet($hostname, $name);
