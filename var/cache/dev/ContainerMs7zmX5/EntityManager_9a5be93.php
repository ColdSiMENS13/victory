<?php

namespace ContainerMs7zmX5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder43ac9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer33bc3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties028cb = [
        
    ];

    public function getConnection()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getConnection', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getMetadataFactory', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getExpressionBuilder', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'beginTransaction', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getCache', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'transactional', array('func' => $func), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'wrapInTransaction', array('func' => $func), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'commit', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->commit();
    }

    public function rollback()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'rollback', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getClassMetadata', array('className' => $className), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'createQuery', array('dql' => $dql), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'createNamedQuery', array('name' => $name), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'createQueryBuilder', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'flush', array('entity' => $entity), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'clear', array('entityName' => $entityName), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->clear($entityName);
    }

    public function close()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'close', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->close();
    }

    public function persist($entity)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'persist', array('entity' => $entity), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'remove', array('entity' => $entity), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'detach', array('entity' => $entity), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'merge', array('entity' => $entity), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'contains', array('entity' => $entity), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getEventManager', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getConfiguration', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'isOpen', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getUnitOfWork', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getProxyFactory', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'initializeObject', array('obj' => $obj), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'getFilters', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'isFiltersStateClean', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'hasFilters', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return $this->valueHolder43ac9->hasFilters();
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

        $instance->initializer33bc3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder43ac9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder43ac9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder43ac9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, '__get', ['name' => $name], $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        if (isset(self::$publicProperties028cb[$name])) {
            return $this->valueHolder43ac9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43ac9;

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

        $targetObject = $this->valueHolder43ac9;
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
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43ac9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder43ac9;
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
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, '__isset', array('name' => $name), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43ac9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder43ac9;
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
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, '__unset', array('name' => $name), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43ac9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder43ac9;
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
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, '__clone', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        $this->valueHolder43ac9 = clone $this->valueHolder43ac9;
    }

    public function __sleep()
    {
        $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, '__sleep', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;

        return array('valueHolder43ac9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer33bc3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer33bc3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer33bc3 && ($this->initializer33bc3->__invoke($valueHolder43ac9, $this, 'initializeProxy', array(), $this->initializer33bc3) || 1) && $this->valueHolder43ac9 = $valueHolder43ac9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder43ac9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder43ac9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
