<?php

/**
 * This file is part of ZwiiCMS.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Rémi Jean <remi.jean@outlook.com>
 * @copyright Copyright (C) 2008-2015, Rémi Jean
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/
 */

/**
 * Vérification de la version de PHP
 */
if(version_compare(PHP_VERSION, '5.4.0', '<')) {
	exit('PHP 5.4+ requis !');
}

/**
 * Initialisation de ZwiiCMS
 */
require 'core/core.php';
$core = new core;
spl_autoload_register('core::autoload');
$core->language();
$core->router();
echo $core->cache();