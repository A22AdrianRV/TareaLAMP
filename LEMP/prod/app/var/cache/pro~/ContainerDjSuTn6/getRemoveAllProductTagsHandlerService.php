<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllProductTagsHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\RemoveAllProductTagsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllProductTagsHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductTagUpdater'] ?? $this->load('getProductTagUpdaterService.php')));
