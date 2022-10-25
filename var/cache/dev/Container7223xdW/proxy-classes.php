<?php

namespace Container7223xdW;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder87e7f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd20f8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3165a = [
        
    ];

    public function getConnection()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getConnection', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getMetadataFactory', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getExpressionBuilder', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'beginTransaction', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getCache', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'transactional', array('func' => $func), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'commit', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->commit();
    }

    public function rollback()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'rollback', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getClassMetadata', array('className' => $className), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'createQuery', array('dql' => $dql), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'createNamedQuery', array('name' => $name), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'createQueryBuilder', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'flush', array('entity' => $entity), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'clear', array('entityName' => $entityName), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->clear($entityName);
    }

    public function close()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'close', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->close();
    }

    public function persist($entity)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'persist', array('entity' => $entity), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'remove', array('entity' => $entity), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'refresh', array('entity' => $entity), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'detach', array('entity' => $entity), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'merge', array('entity' => $entity), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'contains', array('entity' => $entity), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getEventManager', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getConfiguration', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'isOpen', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getUnitOfWork', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getProxyFactory', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'initializeObject', array('obj' => $obj), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'getFilters', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'isFiltersStateClean', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'hasFilters', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return $this->valueHolder87e7f->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd20f8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder87e7f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder87e7f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder87e7f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, '__get', ['name' => $name], $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        if (isset(self::$publicProperties3165a[$name])) {
            return $this->valueHolder87e7f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e7f;

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

        $targetObject = $this->valueHolder87e7f;
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
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e7f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder87e7f;
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
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, '__isset', array('name' => $name), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e7f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder87e7f;
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
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, '__unset', array('name' => $name), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87e7f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder87e7f;
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
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, '__clone', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        $this->valueHolder87e7f = clone $this->valueHolder87e7f;
    }

    public function __sleep()
    {
        $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, '__sleep', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;

        return array('valueHolder87e7f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd20f8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd20f8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd20f8 && ($this->initializerd20f8->__invoke($valueHolder87e7f, $this, 'initializeProxy', array(), $this->initializerd20f8) || 1) && $this->valueHolder87e7f = $valueHolder87e7f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder87e7f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder87e7f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
