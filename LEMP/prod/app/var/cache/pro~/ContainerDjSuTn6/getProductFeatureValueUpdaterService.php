<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\FeatureValue\Update\ProductFeatureValueUpdater' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\FeatureValue\\Update\\ProductFeatureValueUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\FeatureValue\Update\ProductFeatureValueUpdater(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psn_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureRepository'] ?? $this->load('getFeatureRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureValueRepository'] ?? $this->load('getFeatureValueRepositoryService.php')));
