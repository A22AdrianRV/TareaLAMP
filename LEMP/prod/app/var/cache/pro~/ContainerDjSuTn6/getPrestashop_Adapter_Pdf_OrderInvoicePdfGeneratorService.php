<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.pdf.order_invoice_pdf_generator' shared service.

return $this->services['prestashop.adapter.pdf.order_invoice_pdf_generator'] = new \PrestaShop\PrestaShop\Adapter\PDF\OrderInvoicePdfGenerator(($this->services['translator'] ?? $this->getTranslatorService()));