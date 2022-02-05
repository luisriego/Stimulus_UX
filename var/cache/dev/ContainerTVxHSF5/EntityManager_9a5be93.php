<?php

namespace ContainerTVxHSF5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder34c7b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb3618 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3b444 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getConnection', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getMetadataFactory', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getExpressionBuilder', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'beginTransaction', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getCache', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'transactional', array('func' => $func), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->transactional($func);
    }

    public function commit()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'commit', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->commit();
    }

    public function rollback()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'rollback', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getClassMetadata', array('className' => $className), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'createQuery', array('dql' => $dql), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'createNamedQuery', array('name' => $name), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'createQueryBuilder', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'flush', array('entity' => $entity), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'clear', array('entityName' => $entityName), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->clear($entityName);
    }

    public function close()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'close', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->close();
    }

    public function persist($entity)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'persist', array('entity' => $entity), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'remove', array('entity' => $entity), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'refresh', array('entity' => $entity), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'detach', array('entity' => $entity), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'merge', array('entity' => $entity), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'contains', array('entity' => $entity), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getEventManager', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getConfiguration', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'isOpen', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getUnitOfWork', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getProxyFactory', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'initializeObject', array('obj' => $obj), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'getFilters', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'isFiltersStateClean', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'hasFilters', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return $this->valueHolder34c7b->hasFilters();
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

        $instance->initializerb3618 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder34c7b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder34c7b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder34c7b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, '__get', ['name' => $name], $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        if (isset(self::$publicProperties3b444[$name])) {
            return $this->valueHolder34c7b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34c7b;

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

        $targetObject = $this->valueHolder34c7b;
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
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34c7b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder34c7b;
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
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, '__isset', array('name' => $name), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34c7b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder34c7b;
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
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, '__unset', array('name' => $name), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34c7b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder34c7b;
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
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, '__clone', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        $this->valueHolder34c7b = clone $this->valueHolder34c7b;
    }

    public function __sleep()
    {
        $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, '__sleep', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;

        return array('valueHolder34c7b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb3618 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb3618;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb3618 && ($this->initializerb3618->__invoke($valueHolder34c7b, $this, 'initializeProxy', array(), $this->initializerb3618) || 1) && $this->valueHolder34c7b = $valueHolder34c7b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder34c7b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder34c7b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
