<?php

namespace ContainerMnbXXIO;


class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder78bfc = null;
    private $initializere6faa = null;
    private static $publicProperties6c6ba = [
        
    ];
    public function getConnection()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getConnection', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getMetadataFactory', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getExpressionBuilder', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'beginTransaction', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->beginTransaction();
    }
    public function getCache()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getCache', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getCache();
    }
    public function transactional($func)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'transactional', array('func' => $func), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'wrapInTransaction', array('func' => $func), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'commit', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->commit();
    }
    public function rollback()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'rollback', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getClassMetadata', array('className' => $className), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'createQuery', array('dql' => $dql), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'createNamedQuery', array('name' => $name), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'createQueryBuilder', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'flush', array('entity' => $entity), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'clear', array('entityName' => $entityName), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->clear($entityName);
    }
    public function close()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'close', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->close();
    }
    public function persist($entity)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'persist', array('entity' => $entity), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'remove', array('entity' => $entity), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'refresh', array('entity' => $entity), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'detach', array('entity' => $entity), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'merge', array('entity' => $entity), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getRepository', array('entityName' => $entityName), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'contains', array('entity' => $entity), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getEventManager', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getConfiguration', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'isOpen', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getUnitOfWork', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getProxyFactory', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'initializeObject', array('obj' => $obj), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'getFilters', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'isFiltersStateClean', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'hasFilters', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return $this->valueHolder78bfc->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializere6faa = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder78bfc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder78bfc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder78bfc->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, '__get', ['name' => $name], $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        if (isset(self::$publicProperties6c6ba[$name])) {
            return $this->valueHolder78bfc->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78bfc;
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
        $targetObject = $this->valueHolder78bfc;
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
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78bfc;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder78bfc;
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
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, '__isset', array('name' => $name), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78bfc;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder78bfc;
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
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, '__unset', array('name' => $name), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78bfc;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder78bfc;
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
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, '__clone', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        $this->valueHolder78bfc = clone $this->valueHolder78bfc;
    }
    public function __sleep()
    {
        $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, '__sleep', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
        return array('valueHolder78bfc');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere6faa = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere6faa;
    }
    public function initializeProxy() : bool
    {
        return $this->initializere6faa && ($this->initializere6faa->__invoke($valueHolder78bfc, $this, 'initializeProxy', array(), $this->initializere6faa) || 1) && $this->valueHolder78bfc = $valueHolder78bfc;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder78bfc;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder78bfc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
