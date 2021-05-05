<?php

namespace Container6cJL5RA;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderffaf7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera83b5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties08ff6 = [
        
    ];

    public function getConnection()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getConnection', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getMetadataFactory', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getExpressionBuilder', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'beginTransaction', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getCache', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getCache();
    }

    public function transactional($func)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'transactional', array('func' => $func), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->transactional($func);
    }

    public function commit()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'commit', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->commit();
    }

    public function rollback()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'rollback', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getClassMetadata', array('className' => $className), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'createQuery', array('dql' => $dql), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'createNamedQuery', array('name' => $name), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'createQueryBuilder', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'flush', array('entity' => $entity), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'clear', array('entityName' => $entityName), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->clear($entityName);
    }

    public function close()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'close', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->close();
    }

    public function persist($entity)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'persist', array('entity' => $entity), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'remove', array('entity' => $entity), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'refresh', array('entity' => $entity), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'detach', array('entity' => $entity), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'merge', array('entity' => $entity), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getRepository', array('entityName' => $entityName), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'contains', array('entity' => $entity), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getEventManager', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getConfiguration', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'isOpen', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getUnitOfWork', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getProxyFactory', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'initializeObject', array('obj' => $obj), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'getFilters', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'isFiltersStateClean', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'hasFilters', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return $this->valueHolderffaf7->hasFilters();
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

        $instance->initializera83b5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderffaf7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderffaf7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderffaf7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, '__get', ['name' => $name], $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        if (isset(self::$publicProperties08ff6[$name])) {
            return $this->valueHolderffaf7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffaf7;

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

        $targetObject = $this->valueHolderffaf7;
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
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffaf7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderffaf7;
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
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, '__isset', array('name' => $name), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffaf7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderffaf7;
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
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, '__unset', array('name' => $name), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffaf7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderffaf7;
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
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, '__clone', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        $this->valueHolderffaf7 = clone $this->valueHolderffaf7;
    }

    public function __sleep()
    {
        $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, '__sleep', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;

        return array('valueHolderffaf7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera83b5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera83b5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera83b5 && ($this->initializera83b5->__invoke($valueHolderffaf7, $this, 'initializeProxy', array(), $this->initializera83b5) || 1) && $this->valueHolderffaf7 = $valueHolderffaf7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderffaf7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderffaf7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
