<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.customer_service.reply_to_customer_thread' shared service.

return $this->services['form.type.customer_service.reply_to_customer_thread'] = new \PrestaShopBundle\Form\Admin\Sell\CustomerService\ReplyToCustomerThreadType(($this->services['translator'] ?? $this->getTranslatorService()));