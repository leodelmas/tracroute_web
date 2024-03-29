<?php
/**
 * Copyright 2023 DPD France S.A.S.
 *
 * This file is a part of dpdfrance module for Prestashop.
 *
 * NOTICE OF LICENSE
 *
 * This file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for
 * your needs please contact us at support.ecommerce@dpd.fr.
 *
 * @author    DPD France S.A.S. <support.ecommerce@dpd.fr>
 * @copyright 2023 DPD France S.A.S.
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
include_once __DIR__ . '/../../config/config.inc.php';
include_once __DIR__ . '/../../init.php';

// Autoloader Composer
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/config/config.inc.php';
require_once __DIR__ . '/controllers/admin/AdminDPDFranceController.php';

class DpdfranceSyncShipmentsCron extends AdminDPDFranceController
{
    public function __construct()
    {
        ini_set('max_execution_time', 1200);
        ini_set('default_socket_timeout', 5);

        // Check security token
        // TODO remplacer Module par une instance de \PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager
        if (Tools::hash('dpdfrance/cron') !== Tools::getValue('token') || !Module::isInstalled('dpdfrance')) {
            die('Bad token');
        }

        $employeeId = Tools::getValue('employee');
        $force = Tools::getValue('force');
        $this->syncShipments($employeeId, $force);
    }
}

new DpdfranceSyncShipmentsCron();
