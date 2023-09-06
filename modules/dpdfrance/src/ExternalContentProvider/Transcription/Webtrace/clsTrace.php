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

namespace PrestaShop\Module\DPDFrance\ExternalContentProvider\Transcription\Webtrace;

class clsTrace
{
    /**
     * @var string
     */
    public $ScanDate;

    /**
     * @var string
     */
    public $ScanTime;

    /**
     * @var int
     */
    public $StatusNumber;

    /**
     * @var string
     */
    public $StatusDescription;

    /**
     * @var string
     */
    public $CenterName;

    /**
     * @var string
     */
    public $CenterNumber;

    /**
     * @var string
     */
    public $User;

    /**
     * @var string
     */
    public $Remark;

    /**
     * @var string
     */
    public $Info;

    /**
     * @var mixed
     */
    public $Details;
}