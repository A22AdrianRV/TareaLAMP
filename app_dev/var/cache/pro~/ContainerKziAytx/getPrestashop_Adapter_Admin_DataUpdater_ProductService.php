<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.admin.data_updater.product' shared service.

@trigger_error('The "prestashop.adapter.admin.data_updater.product" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

return $this->services['prestashop.adapter.admin.data_updater.product'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataUpdater(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.static_cache.adapter'] ?? $this->getPrestashop_StaticCache_AdapterService()));
