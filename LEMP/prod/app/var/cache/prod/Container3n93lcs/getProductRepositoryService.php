<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psn_', new \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductValidator(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))), ($this->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\Repository\\TaxRulesGroupRepository'] ?? $this->load('getTaxRulesGroupRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Manufacturer\\Repository\\ManufacturerRepository'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Manufacturer\\Repository\\ManufacturerRepository'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\Repository\ManufacturerRepository())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Category\\Repository\\CategoryRepository'] ?? $this->load('getCategoryRepositoryService.php')));
