<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://web6.fr
 * @since             1.0.0
 * @package           W6\Wp_Seo
 * @author            WEB6 <contact@web6.fr>
 * @copyright         2020 WEB6
 * @license           https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link              https://github.com/web6-fr/w6-wp-core
 *
 * @wordpress-plugin
 * Plugin Name:       WEB6 Core
 * Plugin URI:        https://web6.fr/
 * Description:       WEB6's reusable WordPress classes
 * Version:           1.0.0
 * Author:            WEB6
 * Author URI:        https://web6.fr/
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       w6-core
 * Domain Path:       /languages
 *
 * Copyright 2020 web6.fr
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not see https://www.gnu.org/
 */

namespace W6\Core;

/**
 * Check if WordPress was correctly loaded
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Composer autoload
 *
 * Needed to properly autoload the classes
 */
require_once 'vendor/autoload.php';


