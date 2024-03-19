<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.language.copier' shared service.

return $this->services['prestashop.adapter.language.copier'] = new \PrestaShop\PrestaShop\Adapter\Language\LanguageCopier(($this->services['prestashop.adapter.data_provider.language'] ?? ($this->services['prestashop.adapter.data_provider.language'] = new \PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider())), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->services['prestashop.core.addon.theme.repository'] ?? $this->load('getPrestashop_Core_Addon_Theme_RepositoryService.php'))->getListAsCollection());