<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/enums/v1/namespace.proto

namespace GPBMetadata\Temporal\Api\Enums\V1;

class PBNamespace
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
%temporal/api/enums/v1/namespace.prototemporal.api.enums.v1*�
NamespaceState
NAMESPACE_STATE_UNSPECIFIED 
NAMESPACE_STATE_REGISTERED
NAMESPACE_STATE_DEPRECATED
NAMESPACE_STATE_DELETED*h
ArchivalState
ARCHIVAL_STATE_UNSPECIFIED 
ARCHIVAL_STATE_DISABLED
ARCHIVAL_STATE_ENABLED*s
ReplicationState!
REPLICATION_STATE_UNSPECIFIED 
REPLICATION_STATE_NORMAL
REPLICATION_STATE_HANDOVERB�
io.temporal.api.enums.v1BNamespaceProtoPZ!go.temporal.io/api/enums/v1;enums�Temporal.Api.Enums.V1�Temporal::Api::Enums::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

