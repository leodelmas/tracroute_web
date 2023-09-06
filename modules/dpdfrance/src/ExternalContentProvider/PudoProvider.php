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

namespace PrestaShop\Module\DPDFrance\ExternalContentProvider;

use SimpleXMLElement;
use SoapClient;
use SoapFault;

/**
 * Provider d'appel du webservice de gestion des points relais
 *
 * Pas d'environnement de test pour ce WS
 */
class PudoProvider
{
    /**
     * @var SoapClient|null
     */
    private static $soapClient = null;

    /**
     * @var string|null
     */
    private static $url = null;

    /**
     * @param string $url
     *
     * @return bool
     */
    public static function initSoapClient(string $url)
    {
        // On évite d'initialiser la classe si celle-ci l'a déjà été avec les mêmes paramètres.
        if (self::$soapClient instanceof SoapClient && $url === self::$url) {
            return true;
        }

        try {
            $soapClient = new SoapClient(
                $url,
                [
                    'connection_timeout' => 5,
                    'cache_wsdl'         => WSDL_CACHE_NONE,
                    'exceptions'         => true,
                ]
            );
        } catch (SoapFault $exception) {
            return false;
        }

        self::$url = $url;
        self::$soapClient = $soapClient;

        return true;
    }

    /* Fonctions d'appel au webservice */

    /**
     * @param array{
     *    'carrier': string,
     *    'key': string,
     *    'address': string,
     *    'zipCode': string,
     *    'city': string,
     *    'countrycode': string,
     *    'requestID': string,
     *    'request_id': string,
     *    'date_from': string,
     *    'max_pudo_number': string,
     *    'max_distance_search': string,
     *    'weight': string,
     *    'category': string,
     *    'holiday_tolerant': string,
     * } $params
     *
     * @return SimpleXMLElement
     */
    public static function getPudoList(array $params)
    {
        $pudoList = self::$soapClient->getPudoList($params)
            ->GetPudoListResult
            ->any;

        return new SimpleXMLElement($pudoList);
    }
}