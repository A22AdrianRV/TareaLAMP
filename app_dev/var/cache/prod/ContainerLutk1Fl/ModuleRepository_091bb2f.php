<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder71348 = null;
    private $initializerc264a = null;
    private static $publicProperties06ffc = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getList', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getInstalledModules', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getMustBeConfiguredModules', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getUpgradableModules', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'setActionUrls', array('collection' => $collection), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return $this->valueHolder71348->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerc264a = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder71348) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder71348 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder71348->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__get', ['name' => $name], $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        if (isset(self::$publicProperties06ffc[$name])) {
            return $this->valueHolder71348->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71348;
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
        $targetObject = $this->valueHolder71348;
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
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71348;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder71348;
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
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__isset', array('name' => $name), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71348;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder71348;
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
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__unset', array('name' => $name), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71348;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder71348;
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
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__clone', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        $this->valueHolder71348 = clone $this->valueHolder71348;
    }
    public function __sleep()
    {
        $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, '__sleep', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
        return array('valueHolder71348');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc264a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc264a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc264a && ($this->initializerc264a->__invoke($valueHolder71348, $this, 'initializeProxy', array(), $this->initializerc264a) || 1) && $this->valueHolder71348 = $valueHolder71348;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder71348;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder71348;
    }
}
