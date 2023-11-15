<?php

namespace ContainerDnmUmaC;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder327aa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb3bc6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties799fa = [
        
    ];

    public function getConnection()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getConnection', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getMetadataFactory', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getExpressionBuilder', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'beginTransaction', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getCache', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'transactional', array('func' => $func), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'commit', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->commit();
    }

    public function rollback()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'rollback', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getClassMetadata', array('className' => $className), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'createQuery', array('dql' => $dql), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'createNamedQuery', array('name' => $name), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'createQueryBuilder', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'flush', array('entity' => $entity), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'clear', array('entityName' => $entityName), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->clear($entityName);
    }

    public function close()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'close', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->close();
    }

    public function persist($entity)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'persist', array('entity' => $entity), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'remove', array('entity' => $entity), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'detach', array('entity' => $entity), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'merge', array('entity' => $entity), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'contains', array('entity' => $entity), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getEventManager', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getConfiguration', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'isOpen', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getUnitOfWork', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getProxyFactory', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'initializeObject', array('obj' => $obj), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'getFilters', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'isFiltersStateClean', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'hasFilters', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return $this->valueHolder327aa->hasFilters();
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

        $instance->initializerb3bc6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder327aa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder327aa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder327aa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, '__get', ['name' => $name], $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        if (isset(self::$publicProperties799fa[$name])) {
            return $this->valueHolder327aa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder327aa;

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

        $targetObject = $this->valueHolder327aa;
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
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder327aa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder327aa;
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
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, '__isset', array('name' => $name), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder327aa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder327aa;
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
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, '__unset', array('name' => $name), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder327aa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder327aa;
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
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, '__clone', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        $this->valueHolder327aa = clone $this->valueHolder327aa;
    }

    public function __sleep()
    {
        $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, '__sleep', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;

        return array('valueHolder327aa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb3bc6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb3bc6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb3bc6 && ($this->initializerb3bc6->__invoke($valueHolder327aa, $this, 'initializeProxy', array(), $this->initializerb3bc6) || 1) && $this->valueHolder327aa = $valueHolder327aa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder327aa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder327aa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
