<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.import.data_match_saver' shared service.

return $this->services['prestashop.adapter.import.data_match_saver'] = new \PrestaShop\PrestaShop\Adapter\Import\DataMatchSaver(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psn_');
