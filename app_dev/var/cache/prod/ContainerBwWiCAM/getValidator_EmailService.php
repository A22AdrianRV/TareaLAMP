<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.email' shared service.

return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('loose');