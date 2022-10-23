<?php

namespace ContainerEOasxmB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere4d21 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer51686 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4b021 = [
        
    ];

    public function getConnection()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getConnection', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getMetadataFactory', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getExpressionBuilder', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'beginTransaction', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getCache', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getCache();
    }

    public function transactional($func)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'transactional', array('func' => $func), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'wrapInTransaction', array('func' => $func), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'commit', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->commit();
    }

    public function rollback()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'rollback', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getClassMetadata', array('className' => $className), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'createQuery', array('dql' => $dql), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'createNamedQuery', array('name' => $name), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'createQueryBuilder', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'flush', array('entity' => $entity), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'clear', array('entityName' => $entityName), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->clear($entityName);
    }

    public function close()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'close', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->close();
    }

    public function persist($entity)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'persist', array('entity' => $entity), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'remove', array('entity' => $entity), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'refresh', array('entity' => $entity), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'detach', array('entity' => $entity), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'merge', array('entity' => $entity), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getRepository', array('entityName' => $entityName), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'contains', array('entity' => $entity), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getEventManager', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getConfiguration', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'isOpen', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getUnitOfWork', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getProxyFactory', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'initializeObject', array('obj' => $obj), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'getFilters', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'isFiltersStateClean', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'hasFilters', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return $this->valueHoldere4d21->hasFilters();
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

        $instance->initializer51686 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere4d21) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere4d21 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere4d21->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, '__get', ['name' => $name], $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        if (isset(self::$publicProperties4b021[$name])) {
            return $this->valueHoldere4d21->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4d21;

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

        $targetObject = $this->valueHoldere4d21;
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
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4d21;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere4d21;
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
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, '__isset', array('name' => $name), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4d21;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere4d21;
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
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, '__unset', array('name' => $name), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere4d21;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere4d21;
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
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, '__clone', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        $this->valueHoldere4d21 = clone $this->valueHoldere4d21;
    }

    public function __sleep()
    {
        $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, '__sleep', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;

        return array('valueHoldere4d21');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer51686 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer51686;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer51686 && ($this->initializer51686->__invoke($valueHoldere4d21, $this, 'initializeProxy', array(), $this->initializer51686) || 1) && $this->valueHoldere4d21 = $valueHoldere4d21;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere4d21;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere4d21;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
