<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\File\Validator\VirtualProductFileValidator' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\File\\Validator\\VirtualProductFileValidator'] = new \PrestaShop\PrestaShop\Adapter\File\Validator\VirtualProductFileValidator(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_ATTACHMENT_MAXIMUM_SIZE"));
