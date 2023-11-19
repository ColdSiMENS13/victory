<?php

namespace ContainerWXjx10M;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd31fc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6bb0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties744bf = [
        
    ];

    public function getConnection()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getConnection', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getMetadataFactory', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getExpressionBuilder', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'beginTransaction', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getCache', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'transactional', array('func' => $func), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'commit', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->commit();
    }

    public function rollback()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'rollback', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getClassMetadata', array('className' => $className), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'createQuery', array('dql' => $dql), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'createNamedQuery', array('name' => $name), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'createQueryBuilder', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'flush', array('entity' => $entity), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'clear', array('entityName' => $entityName), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->clear($entityName);
    }

    public function close()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'close', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->close();
    }

    public function persist($entity)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'persist', array('entity' => $entity), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'remove', array('entity' => $entity), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'detach', array('entity' => $entity), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'merge', array('entity' => $entity), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'contains', array('entity' => $entity), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getEventManager', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getConfiguration', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'isOpen', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getUnitOfWork', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getProxyFactory', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'initializeObject', array('obj' => $obj), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'getFilters', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'isFiltersStateClean', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'hasFilters', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return $this->valueHolderd31fc->hasFilters();
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

        $instance->initializerc6bb0 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderd31fc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd31fc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd31fc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, '__get', ['name' => $name], $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        if (isset(self::$publicProperties744bf[$name])) {
            return $this->valueHolderd31fc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd31fc;

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

        $targetObject = $this->valueHolderd31fc;
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
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd31fc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd31fc;
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
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, '__isset', array('name' => $name), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd31fc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd31fc;
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
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, '__unset', array('name' => $name), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd31fc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd31fc;
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
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, '__clone', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        $this->valueHolderd31fc = clone $this->valueHolderd31fc;
    }

    public function __sleep()
    {
        $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, '__sleep', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;

        return array('valueHolderd31fc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6bb0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6bb0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc6bb0 && ($this->initializerc6bb0->__invoke($valueHolderd31fc, $this, 'initializeProxy', array(), $this->initializerc6bb0) || 1) && $this->valueHolderd31fc = $valueHolderd31fc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd31fc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd31fc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
