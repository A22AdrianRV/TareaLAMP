<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.customer_service_order_messages' shared service.

return $this->services['prestashop.core.form.choice_provider.customer_service_order_messages'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CustomerServiceOrderMessagesChoiceProvider(($this->services['prestashop.adapter.order_message.order_message_provider'] ?? $this->load('getPrestashop_Adapter_OrderMessage_OrderMessageProviderService.php')));
