<?php

namespace Container4WAxEge;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder11f5a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer272cf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties006f5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getConnection', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getMetadataFactory', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getExpressionBuilder', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'beginTransaction', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getCache', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'transactional', array('func' => $func), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->transactional($func);
    }

    public function commit()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'commit', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->commit();
    }

    public function rollback()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'rollback', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getClassMetadata', array('className' => $className), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'createQuery', array('dql' => $dql), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'createNamedQuery', array('name' => $name), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'createQueryBuilder', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'flush', array('entity' => $entity), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'clear', array('entityName' => $entityName), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->clear($entityName);
    }

    public function close()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'close', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->close();
    }

    public function persist($entity)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'persist', array('entity' => $entity), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'remove', array('entity' => $entity), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'refresh', array('entity' => $entity), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'detach', array('entity' => $entity), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'merge', array('entity' => $entity), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'contains', array('entity' => $entity), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getEventManager', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getConfiguration', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'isOpen', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getUnitOfWork', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getProxyFactory', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'initializeObject', array('obj' => $obj), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'getFilters', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'isFiltersStateClean', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'hasFilters', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return $this->valueHolder11f5a->hasFilters();
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

        $instance->initializer272cf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder11f5a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder11f5a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder11f5a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, '__get', ['name' => $name], $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        if (isset(self::$publicProperties006f5[$name])) {
            return $this->valueHolder11f5a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f5a;

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

        $targetObject = $this->valueHolder11f5a;
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
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f5a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder11f5a;
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
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, '__isset', array('name' => $name), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f5a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder11f5a;
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
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, '__unset', array('name' => $name), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f5a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder11f5a;
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
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, '__clone', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        $this->valueHolder11f5a = clone $this->valueHolder11f5a;
    }

    public function __sleep()
    {
        $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, '__sleep', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;

        return array('valueHolder11f5a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer272cf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer272cf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer272cf && ($this->initializer272cf->__invoke($valueHolder11f5a, $this, 'initializeProxy', array(), $this->initializer272cf) || 1) && $this->valueHolder11f5a = $valueHolder11f5a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder11f5a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder11f5a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
