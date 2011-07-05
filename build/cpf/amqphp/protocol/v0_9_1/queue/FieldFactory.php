<?php
namespace amqphp\protocol\v0_9_1\queue;
abstract class FieldFactory  extends \amqphp\protocol\abstrakt\FieldFactory
{
    protected static $Cache = array(array('reserved-1', 'declare', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareReserved1Field'),array('queue', 'declare', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareQueueField'),array('passive', 'declare', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclarePassiveField'),array('durable', 'declare', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareDurableField'),array('exclusive', 'declare', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareExclusiveField'),array('auto-delete', 'declare', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareAutoDeleteField'),array('no-wait', 'declare', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareNoWaitField'),array('arguments', 'declare', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareArgumentsField'),array('queue', 'declare-ok', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareOkQueueField'),array('message-count', 'declare-ok', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareOkMessageCountField'),array('consumer-count', 'declare-ok', '\\amqphp\\protocol\\v0_9_1\\queue\\DeclareOkConsumerCountField'),array('reserved-1', 'bind', '\\amqphp\\protocol\\v0_9_1\\queue\\BindReserved1Field'),array('queue', 'bind', '\\amqphp\\protocol\\v0_9_1\\queue\\BindQueueField'),array('exchange', 'bind', '\\amqphp\\protocol\\v0_9_1\\queue\\BindExchangeField'),array('routing-key', 'bind', '\\amqphp\\protocol\\v0_9_1\\queue\\BindRoutingKeyField'),array('no-wait', 'bind', '\\amqphp\\protocol\\v0_9_1\\queue\\BindNoWaitField'),array('arguments', 'bind', '\\amqphp\\protocol\\v0_9_1\\queue\\BindArgumentsField'),array('reserved-1', 'unbind', '\\amqphp\\protocol\\v0_9_1\\queue\\UnbindReserved1Field'),array('queue', 'unbind', '\\amqphp\\protocol\\v0_9_1\\queue\\UnbindQueueField'),array('exchange', 'unbind', '\\amqphp\\protocol\\v0_9_1\\queue\\UnbindExchangeField'),array('routing-key', 'unbind', '\\amqphp\\protocol\\v0_9_1\\queue\\UnbindRoutingKeyField'),array('arguments', 'unbind', '\\amqphp\\protocol\\v0_9_1\\queue\\UnbindArgumentsField'),array('reserved-1', 'purge', '\\amqphp\\protocol\\v0_9_1\\queue\\PurgeReserved1Field'),array('queue', 'purge', '\\amqphp\\protocol\\v0_9_1\\queue\\PurgeQueueField'),array('no-wait', 'purge', '\\amqphp\\protocol\\v0_9_1\\queue\\PurgeNoWaitField'),array('message-count', 'purge-ok', '\\amqphp\\protocol\\v0_9_1\\queue\\PurgeOkMessageCountField'),array('reserved-1', 'delete', '\\amqphp\\protocol\\v0_9_1\\queue\\DeleteReserved1Field'),array('queue', 'delete', '\\amqphp\\protocol\\v0_9_1\\queue\\DeleteQueueField'),array('if-unused', 'delete', '\\amqphp\\protocol\\v0_9_1\\queue\\DeleteIfUnusedField'),array('if-empty', 'delete', '\\amqphp\\protocol\\v0_9_1\\queue\\DeleteIfEmptyField'),array('no-wait', 'delete', '\\amqphp\\protocol\\v0_9_1\\queue\\DeleteNoWaitField'),array('message-count', 'delete-ok', '\\amqphp\\protocol\\v0_9_1\\queue\\DeleteOkMessageCountField'));
}