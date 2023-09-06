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

class ShipmentTrace
{
    /*
     * @var string
     */
    public $LastError = '';

    /*
     * @var string
     */
    public $ShipmentNumber;

    /*
     * @var string
     */
    public $DestinationCountry;

    /*
     * @var string
     */
    public $DestinationZipcode;

    /*
     * @var string
     */
    public $ShippingDate;

    /*
     * @var string
     */
    public $DeliveryDate;

    /*
     * @var float
     */
    public $Weight;

    /*
     * @var string
     */
    public $Receiver;

    /*
     * @var string
     */
    public $Reference;

    /*
     * @var string
     */
    public $Reference2;

    /*
     * @var string
     */
    public $Reference3;

    /*
     * @var object
     */
    public $DeliveryScheduled;

    /**
     * @var Traces|null
     */
    public $Traces;

    /**
     * @var string
     */
    public $Reference_International;

    /**
     * @var bool
     */
    public $IsB2C;

    /**
     * @var bool
     */
    public $IsRetour;

    /**
     * @var string
     */
    public $PointRelaisName;

    /**
     * @var string
     */
    public $PointRelaisLink;

    /**
     * @var string
     */
    public $ShipmentNumber_Retour;

    /**
     * @var int
     */
    public $CustomerCenternumber;

    /**
     * @var int
     */
    public $CustomerNumber;

    /**
     * @var int
     */
    public $BarcodeSource;

    /**
     * @var string
     */
    public $BarcodeId;

    /**
     * @var int
     */
    public $ReceiverDepotNumber;

    /**
     * @var int
     */
    public $ReceiverTourNumber;

    /**
     * @var int
     */
    public $DeliveryRecordNumber;

    /**
     * @var int
     */
    public $DeliveryRecordPosition;

    /**
     * @var mixed
     */
    public $images;
}
