<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.link_block.grid.query_builder' shared service.

return $this->services['prestashop.module.link_block.grid.query_builder'] = new \PrestaShop\Module\LinkList\Core\Grid\Query\LinkBlockQueryBuilder(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psn_');
