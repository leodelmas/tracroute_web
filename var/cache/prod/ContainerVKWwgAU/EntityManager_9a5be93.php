<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder0ef4e = null;
    private $initializer97448 = null;
    private static $publicProperties2f3f2 = [
        
    ];
    public function getConnection()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getConnection', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getMetadataFactory', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getExpressionBuilder', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'beginTransaction', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getCache', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getCache();
    }
    public function transactional($func)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'transactional', array('func' => $func), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'commit', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->commit();
    }
    public function rollback()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'rollback', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getClassMetadata', array('className' => $className), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'createQuery', array('dql' => $dql), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'createNamedQuery', array('name' => $name), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'createQueryBuilder', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'flush', array('entity' => $entity), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'clear', array('entityName' => $entityName), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->clear($entityName);
    }
    public function close()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'close', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->close();
    }
    public function persist($entity)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'persist', array('entity' => $entity), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'remove', array('entity' => $entity), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'refresh', array('entity' => $entity), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'detach', array('entity' => $entity), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'merge', array('entity' => $entity), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'contains', array('entity' => $entity), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getEventManager', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getConfiguration', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'isOpen', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getUnitOfWork', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getProxyFactory', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'initializeObject', array('obj' => $obj), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'getFilters', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'isFiltersStateClean', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'hasFilters', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return $this->valueHolder0ef4e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer97448 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder0ef4e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0ef4e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder0ef4e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, '__get', ['name' => $name], $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        if (isset(self::$publicProperties2f3f2[$name])) {
            return $this->valueHolder0ef4e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ef4e;
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
        $targetObject = $this->valueHolder0ef4e;
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
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ef4e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder0ef4e;
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
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, '__isset', array('name' => $name), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ef4e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder0ef4e;
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
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, '__unset', array('name' => $name), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ef4e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder0ef4e;
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
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, '__clone', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        $this->valueHolder0ef4e = clone $this->valueHolder0ef4e;
    }
    public function __sleep()
    {
        $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, '__sleep', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
        return array('valueHolder0ef4e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer97448 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer97448;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer97448 && ($this->initializer97448->__invoke($valueHolder0ef4e, $this, 'initializeProxy', array(), $this->initializer97448) || 1) && $this->valueHolder0ef4e = $valueHolder0ef4e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0ef4e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0ef4e;
    }
}
