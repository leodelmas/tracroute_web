<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd83da = null;
    private $initializercaa94 = null;
    private static $publicProperties50bb9 = [
        
    ];
    public function getConnection()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getConnection', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getMetadataFactory', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getExpressionBuilder', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'beginTransaction', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getCache', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getCache();
    }
    public function transactional($func)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'transactional', array('func' => $func), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'wrapInTransaction', array('func' => $func), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'commit', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->commit();
    }
    public function rollback()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'rollback', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getClassMetadata', array('className' => $className), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'createQuery', array('dql' => $dql), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'createNamedQuery', array('name' => $name), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'createQueryBuilder', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'flush', array('entity' => $entity), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'clear', array('entityName' => $entityName), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->clear($entityName);
    }
    public function close()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'close', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->close();
    }
    public function persist($entity)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'persist', array('entity' => $entity), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'remove', array('entity' => $entity), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'refresh', array('entity' => $entity), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'detach', array('entity' => $entity), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'merge', array('entity' => $entity), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getRepository', array('entityName' => $entityName), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'contains', array('entity' => $entity), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getEventManager', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getConfiguration', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'isOpen', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getUnitOfWork', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getProxyFactory', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'initializeObject', array('obj' => $obj), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'getFilters', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'isFiltersStateClean', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'hasFilters', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return $this->valueHolderd83da->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercaa94 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd83da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd83da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd83da->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, '__get', ['name' => $name], $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        if (isset(self::$publicProperties50bb9[$name])) {
            return $this->valueHolderd83da->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd83da;
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
        $targetObject = $this->valueHolderd83da;
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
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd83da;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd83da;
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
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, '__isset', array('name' => $name), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd83da;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd83da;
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
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, '__unset', array('name' => $name), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd83da;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd83da;
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
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, '__clone', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        $this->valueHolderd83da = clone $this->valueHolderd83da;
    }
    public function __sleep()
    {
        $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, '__sleep', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
        return array('valueHolderd83da');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercaa94 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercaa94;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercaa94 && ($this->initializercaa94->__invoke($valueHolderd83da, $this, 'initializeProxy', array(), $this->initializercaa94) || 1) && $this->valueHolderd83da = $valueHolderd83da;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd83da;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd83da;
    }
}
