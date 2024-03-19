<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder71348 = null;
    private $initializerc264a = null;
    private static $publicProperties06ffc = [
        
    ];
    public function getConnection()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getConnection', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getMetadataFactory', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getExpressionBuilder', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'beginTransaction', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getCache', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'transactional', array('func' => $func), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'commit', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->commit();
    }
    public function rollback()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'rollback', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getClassMetadata', array('className' => $className), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'createQuery', array('dql' => $dql), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'createNamedQuery', array('name' => $name), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'createQueryBuilder', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'flush', array('entity' => $entity), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'clear', array('entityName' => $entityName), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->clear($entityName);
    }
    public function close()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'close', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->close();
    }
    public function persist($entity)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'persist', array('entity' => $entity), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'remove', array('entity' => $entity), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'refresh', array('entity' => $entity), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'detach', array('entity' => $entity), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'merge', array('entity' => $entity), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'contains', array('entity' => $entity), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getEventManager', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getConfiguration', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'isOpen', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getUnitOfWork', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getProxyFactory', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'initializeObject', array('obj' => $obj), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getFilters', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'isFiltersStateClean', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'hasFilters', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc264a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder71348) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder71348 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder71348->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__get', ['name' => $name], $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        if (isset(self::$publicProperties06ffc[$name])) {
            return $this->valueHolder71348->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71348;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder71348;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71348;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder71348;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__isset', array('name' => $name), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71348;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder71348;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__unset', array('name' => $name), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71348;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder71348;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__clone', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        $this->valueHolder71348 = clone $this->valueHolder71348;
    }
    public function __sleep()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__sleep', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return array('valueHolder71348');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc264a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc264a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'initializeProxy', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder71348;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder71348;
    }
}
