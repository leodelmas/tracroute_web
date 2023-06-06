<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Decorator\ProductDecorator' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator(($this->services['ps_eventbus.context'] ?? $this->load('getPsEventbus_ContextService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->load('getProductRepository2Service.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->load('getCategoryRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] ?? $this->load('getBundleRepositoryService.php')));
