<?php

namespace ContainerH31L3x5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3988f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbc2cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa12da = [
        
    ];

    public function getConnection()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getConnection', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getMetadataFactory', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getExpressionBuilder', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'beginTransaction', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getCache', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'transactional', array('func' => $func), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'commit', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->commit();
    }

    public function rollback()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'rollback', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getClassMetadata', array('className' => $className), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'createQuery', array('dql' => $dql), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'createNamedQuery', array('name' => $name), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'createQueryBuilder', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'flush', array('entity' => $entity), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'clear', array('entityName' => $entityName), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->clear($entityName);
    }

    public function close()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'close', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->close();
    }

    public function persist($entity)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'persist', array('entity' => $entity), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'remove', array('entity' => $entity), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'refresh', array('entity' => $entity), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'detach', array('entity' => $entity), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'merge', array('entity' => $entity), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'contains', array('entity' => $entity), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getEventManager', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getConfiguration', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'isOpen', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getUnitOfWork', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getProxyFactory', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'initializeObject', array('obj' => $obj), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'getFilters', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'isFiltersStateClean', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'hasFilters', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return $this->valueHolder3988f->hasFilters();
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

        $instance->initializerbc2cd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3988f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3988f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3988f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, '__get', ['name' => $name], $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        if (isset(self::$publicPropertiesa12da[$name])) {
            return $this->valueHolder3988f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3988f;

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

        $targetObject = $this->valueHolder3988f;
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
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3988f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3988f;
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
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, '__isset', array('name' => $name), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3988f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3988f;
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
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, '__unset', array('name' => $name), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3988f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3988f;
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
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, '__clone', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        $this->valueHolder3988f = clone $this->valueHolder3988f;
    }

    public function __sleep()
    {
        $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, '__sleep', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;

        return array('valueHolder3988f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbc2cd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbc2cd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbc2cd && ($this->initializerbc2cd->__invoke($valueHolder3988f, $this, 'initializeProxy', array(), $this->initializerbc2cd) || 1) && $this->valueHolder3988f = $valueHolder3988f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3988f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3988f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
