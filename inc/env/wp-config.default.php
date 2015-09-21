<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
  

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(_9H;+e+ YT{!MW:etMZD+32 4e xdCl8g<d#DGlf22!*omGzHS{{ WEj;TbQ5qM');
define('SECURE_AUTH_KEY',  'eJ;JT-XnSd!;h ++3~P4eo`ZBbs%|B (I;L[7#d?%?8%Tx@t;VT-bM&6J}oog$kJ');
define('LOGGED_IN_KEY',    'H>kd{AY!65_8Li&_J=49A9J-#.V:XUyks^iqdKryj3#3uB{b6[C9IfG]?[8%7yTJ');
define('NONCE_KEY',        '+RsZoJ+ xZBZ_+cB^rsw6A^Tkw+89GAq#?&:,PT.r{pJa/:?uy5:Ulx~/ea1ETPu');
define('AUTH_SALT',        'n;eqtnkf,Q#}mr`N$$j4Yr* C}c/p4:hvmh2Y})?{)|w5?g|V*OFi|iGw-|Vb/)f');
define('SECURE_AUTH_SALT', ')%-RPSQ=%9?CsZE>JZin[LT0ILup..;JwMP$ak,qkTr=?JhRo~Oq32Sbq|S>8%H|');
define('LOGGED_IN_SALT',   'O-emxE0){TvUthTrz4!n6jQv|s+-5.3&>2Hj=7+fQI#LZM{N6|fpd5U[-D$l2Bg@');
define('NONCE_SALT',       '+uGfNp#8pR~wRt>~|+OT=:A==:0(e$9v-L45n}%E4+sf-t*E.,KxeoDg9#~{ik:)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'holo_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
