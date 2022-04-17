<?php

namespace ContainerEL0bmef;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd614c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58dac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7204b = [
        
    ];

    public function getConnection()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getConnection', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getMetadataFactory', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getExpressionBuilder', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'beginTransaction', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getCache', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'transactional', array('func' => $func), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'commit', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->commit();
    }

    public function rollback()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'rollback', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getClassMetadata', array('className' => $className), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'createQuery', array('dql' => $dql), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'createNamedQuery', array('name' => $name), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'createQueryBuilder', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'flush', array('entity' => $entity), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'clear', array('entityName' => $entityName), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->clear($entityName);
    }

    public function close()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'close', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->close();
    }

    public function persist($entity)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'persist', array('entity' => $entity), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'remove', array('entity' => $entity), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'refresh', array('entity' => $entity), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'detach', array('entity' => $entity), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'merge', array('entity' => $entity), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'contains', array('entity' => $entity), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getEventManager', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getConfiguration', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'isOpen', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getUnitOfWork', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getProxyFactory', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'initializeObject', array('obj' => $obj), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'getFilters', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'isFiltersStateClean', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'hasFilters', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return $this->valueHolderd614c->hasFilters();
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

        $instance->initializer58dac = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd614c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd614c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd614c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, '__get', ['name' => $name], $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        if (isset(self::$publicProperties7204b[$name])) {
            return $this->valueHolderd614c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd614c;

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

        $targetObject = $this->valueHolderd614c;
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
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd614c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd614c;
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
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, '__isset', array('name' => $name), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd614c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd614c;
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
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, '__unset', array('name' => $name), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd614c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd614c;
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
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, '__clone', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        $this->valueHolderd614c = clone $this->valueHolderd614c;
    }

    public function __sleep()
    {
        $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, '__sleep', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;

        return array('valueHolderd614c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer58dac = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58dac;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer58dac && ($this->initializer58dac->__invoke($valueHolderd614c, $this, 'initializeProxy', array(), $this->initializer58dac) || 1) && $this->valueHolderd614c = $valueHolderd614c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd614c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd614c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
