<?php

namespace ContainerTnH1uYJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere7601 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3b938 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescb492 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getConnection', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getMetadataFactory', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getExpressionBuilder', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'beginTransaction', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getCache', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'transactional', array('func' => $func), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'commit', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->commit();
    }

    public function rollback()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'rollback', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getClassMetadata', array('className' => $className), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'createQuery', array('dql' => $dql), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'createNamedQuery', array('name' => $name), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'createQueryBuilder', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'flush', array('entity' => $entity), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'clear', array('entityName' => $entityName), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->clear($entityName);
    }

    public function close()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'close', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->close();
    }

    public function persist($entity)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'persist', array('entity' => $entity), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'remove', array('entity' => $entity), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'detach', array('entity' => $entity), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'merge', array('entity' => $entity), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'contains', array('entity' => $entity), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getEventManager', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getConfiguration', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'isOpen', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getUnitOfWork', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getProxyFactory', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'initializeObject', array('obj' => $obj), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'getFilters', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'isFiltersStateClean', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'hasFilters', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return $this->valueHoldere7601->hasFilters();
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

        $instance->initializer3b938 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHoldere7601) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere7601 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere7601->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, '__get', ['name' => $name], $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        if (isset(self::$publicPropertiescb492[$name])) {
            return $this->valueHoldere7601->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7601;

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

        $targetObject = $this->valueHoldere7601;
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
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7601;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere7601;
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
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, '__isset', array('name' => $name), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7601;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere7601;
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
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, '__unset', array('name' => $name), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7601;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere7601;
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
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, '__clone', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        $this->valueHoldere7601 = clone $this->valueHoldere7601;
    }

    public function __sleep()
    {
        $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, '__sleep', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;

        return array('valueHoldere7601');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3b938 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3b938;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3b938 && ($this->initializer3b938->__invoke($valueHoldere7601, $this, 'initializeProxy', array(), $this->initializer3b938) || 1) && $this->valueHoldere7601 = $valueHoldere7601;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere7601;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere7601;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
