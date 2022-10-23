<?php

namespace ContainerSYOUvsL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder37e02 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer25c18 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties242dc = [
        
    ];

    public function getConnection()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getConnection', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getMetadataFactory', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getExpressionBuilder', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'beginTransaction', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getCache', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getCache();
    }

    public function transactional($func)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'transactional', array('func' => $func), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'wrapInTransaction', array('func' => $func), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'commit', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->commit();
    }

    public function rollback()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'rollback', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getClassMetadata', array('className' => $className), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'createQuery', array('dql' => $dql), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'createNamedQuery', array('name' => $name), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'createQueryBuilder', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'flush', array('entity' => $entity), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'clear', array('entityName' => $entityName), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->clear($entityName);
    }

    public function close()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'close', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->close();
    }

    public function persist($entity)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'persist', array('entity' => $entity), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'remove', array('entity' => $entity), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'refresh', array('entity' => $entity), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'detach', array('entity' => $entity), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'merge', array('entity' => $entity), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getRepository', array('entityName' => $entityName), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'contains', array('entity' => $entity), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getEventManager', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getConfiguration', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'isOpen', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getUnitOfWork', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getProxyFactory', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'initializeObject', array('obj' => $obj), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'getFilters', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'isFiltersStateClean', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'hasFilters', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return $this->valueHolder37e02->hasFilters();
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

        $instance->initializer25c18 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder37e02) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder37e02 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder37e02->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, '__get', ['name' => $name], $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        if (isset(self::$publicProperties242dc[$name])) {
            return $this->valueHolder37e02->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37e02;

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

        $targetObject = $this->valueHolder37e02;
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
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37e02;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder37e02;
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
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, '__isset', array('name' => $name), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37e02;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder37e02;
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
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, '__unset', array('name' => $name), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37e02;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder37e02;
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
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, '__clone', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        $this->valueHolder37e02 = clone $this->valueHolder37e02;
    }

    public function __sleep()
    {
        $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, '__sleep', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;

        return array('valueHolder37e02');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer25c18 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer25c18;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer25c18 && ($this->initializer25c18->__invoke($valueHolder37e02, $this, 'initializeProxy', array(), $this->initializer25c18) || 1) && $this->valueHolder37e02 = $valueHolder37e02;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder37e02;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder37e02;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
