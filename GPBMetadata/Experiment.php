<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: experiment.proto

namespace GPBMetadata;

class Experiment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Validator::initOnce();
        $pool->internalAddGeneratedFile(
            '
�1
experiment.proto
experiment"�
SyncPushDataResponse\'
changes (2.experiment.SyncChange8
errs (2*.experiment.SyncPushDataResponse.ErrsEntry+
	ErrsEntry
key (	
value (	:8"�
SyncPushDataRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X\'
changes (2.experiment.SyncChange,

subject_id (B�� *学科ID错误
	client_id ("Q

SyncChange
type (
obj (	
mods (	
key (	
table (	""
GetContentRequest
uuids (	"?
GetContentResponse)
data (2.experiment.ContentResponse"�
SyncDeleteRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X*
uuid (	B��*记录ID必须填写X
	client_id ("�
SyncGetFullDataRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X,

subject_id (B�� *学科ID错误
version (
page (
per_page (
	client_id ("
Uuid
uuid (	",
UuidVersion
uuid (	
version ("}
PlayRequest
uuid (	
tenant (	
user_id (	
	daty_type (	,

subject_id (B�� *学科ID错误"+
PlayData
	data_type (	
data (	"k
PlayResponse
duration (
is_limit (
is_vip (\'
	play_data (2.experiment.PlayData"%
CategoryRequest

subject_id ("<
CategoryInfo

id (
name (	

subject_id (":
CategoryResponse&
data (2.experiment.CategoryInfo"�
IndexRequest
page (
per_page (*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X,

subject_id (B�� *学科ID错误
status (
keyword (	
sort_direction (	

sort_field	 (	
	parent_id
 (	
	is_folder ("�
RenameRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X*
uuid (	B��*记录ID必须填写X)
title (	B��*名称必须填写X
version ("J
InfoRequest*
uuid (	B��*记录ID必须填写X
columns (	"�
CreateOrUpdateRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X
uuid (	,

subject_id (B�� *学科ID错误)
title (	B��*名称必须填写X
thumb (	
	is_folder (
is_vip (
period	 (
	parent_id
 (	
category_id (?
content (2..experiment.CreateOrUpdateRequest.ContentEntry
	create_at (
	update_at (
version (
status (
is_recycle_root (
keyword (	.
ContentEntry
key (	
value (	:8"�
DeleteOrRestoreRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X*
uuid (	B��*记录ID必须填写X
version ("�
BatchDeleteOrRestoreRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X+
uuids (	B��*记录ID必须填写X"�
CopyRequest1
target_tenant (	B��*租户必须填写X4
target_user_id (	B��*用户ID必须填写X*
uuid (	B��*记录ID必须填写X"�
MoveRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X*
uuid (	B��*记录ID必须填写X
	parent_id (	
version ("�
BatchMoveRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X+
uuids (	B��*记录ID必须填写X
	parent_id (	"�
ClearRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X,

subject_id (B�� *学科ID错误"�
InfoResponse
tenant (	
user_id (	
uuid (	

subject_id (
title (	
thumb (	
	is_folder (
is_vip (
period	 (
	parent_id
 (	
status (
is_recycle_root (
	create_at (
	update_at (6
content (2%.experiment.InfoResponse.ContentEntry
category_id (
keyword (	
version (
is_make_img (.
ContentEntry
key (	
value (	:8"-
ContentResponse
uuid (	
data (	"|
IndexResponse
page (
per_page (
total (
request_time (&
data (2.experiment.InfoResponse"�
SyncFullDataResponse
Version (
page (
per_page (&
data (2.experiment.InfoResponse,
content (2.experiment.ContentResponse
del_list (	
next_change_version ("�
SyncDataRequest*
tenant (	B��*租户必须填写X-
user_id (	B��*用户ID必须填写X-
obj (	B ��*同步数据不能为空X,

subject_id (B�� *学科ID错误
uuid (	
	client_id ("
Reply
code (2�

Experiment>
Index.experiment.IndexRequest.experiment.IndexResponse" ?
Rename.experiment.RenameRequest.experiment.InfoResponse" ;
Info.experiment.InfoRequest.experiment.InfoResponse" O
CreateOrUpdate!.experiment.CreateOrUpdateRequest.experiment.InfoResponse" A
Delete".experiment.DeleteOrRestoreRequest.experiment.Reply" K
BatchDelete\'.experiment.BatchDeleteOrRestoreRequest.experiment.Reply" N
BatchPhyDelete\'.experiment.BatchDeleteOrRestoreRequest.experiment.Reply" 6
Clear.experiment.ClearRequest.experiment.Reply" B
Restore".experiment.DeleteOrRestoreRequest.experiment.Reply" L
BatchRestore\'.experiment.BatchDeleteOrRestoreRequest.experiment.Reply" 4
Move.experiment.MoveRequest.experiment.Reply" >
	BatchMove.experiment.BatchMoveRequest.experiment.Reply" ;
Copy.experiment.CopyRequest.experiment.InfoResponse" ?
Folder.experiment.IndexRequest.experiment.IndexResponse" G
Category.experiment.CategoryRequest.experiment.CategoryResponse" ;
Play.experiment.PlayRequest.experiment.PlayResponse" Y
SyncGetFullData".experiment.SyncGetFullDataRequest .experiment.SyncFullDataResponse" G
SyncBaseData.experiment.SyncDataRequest.experiment.InfoResponse" @

SyncDelete.experiment.SyncDeleteRequest.experiment.Reply" Q
GetContentData.experiment.GetContentRequest.experiment.GetContentResponse" S
SyncPushData.experiment.SyncPushDataRequest .experiment.SyncPushDataResponse" BZ./;experiment�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

