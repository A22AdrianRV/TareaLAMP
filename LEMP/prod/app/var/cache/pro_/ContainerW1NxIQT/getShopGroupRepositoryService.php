<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopGroupRepository'] = new \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psn_');
