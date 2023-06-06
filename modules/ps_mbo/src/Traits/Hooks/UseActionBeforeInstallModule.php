<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
declare(strict_types=1);

namespace PrestaShop\Module\Mbo\Traits\Hooks;

use PrestaShop\Module\Mbo\Module\Module;
use PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider;

trait UseActionBeforeInstallModule
{
    /**
     * Hook actionBeforeInstallModule.
     */
    public function hookActionBeforeInstallModule(array $params): void
    {
        /** @var ModuleDataProvider $moduleDataProvider */
        $moduleDataProvider = $this->get('prestashop.adapter.data_provider.module');

        if (empty($params['moduleName']) || $moduleDataProvider->isOnDisk($params['moduleName'])) {
            return;
        }

        $moduleName = (string) $params['moduleName'];

        /** @var Module $module */
        $module = $this->get('mbo.modules.repository')->getModule($moduleName);

        if (null === $module) {
            return;
        }

        $this->get('mbo.modules.actions_manager')->install((int) $module->get('id'));
    }
}