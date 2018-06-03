<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'football_app_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fxG[?V>2+t!)50thDV<qcWv%rC&`SZ/*7kbIL_T2{v_QC<jHpd,yHV?.,l5`Ne$Z');
define('SECURE_AUTH_KEY',  'Fy?tSX`!.&K<xF~cn+hJ)3jM(]eZ?DqX{U4K%B:XKl(yuTnD:nY@)t{pwU n&Nae');
define('LOGGED_IN_KEY',    '.MprSG>j;XL,O^8=2w@xH^YGCTTV^IO/$Yo(ucRtvvVGWu#j*+-Y1a,9@}Fll1x6');
define('NONCE_KEY',        's~D[TW`GYw&x^D[o0dl)0d*9%%.d2Z}$+c/-uEyN17AEA2&~WOR5BWG>(datRR`$');
define('AUTH_SALT',        'T=<fUJp[`~-q[$=?^t:~K20>N]/WtM~)l<ia#v9Ctt~<nT1%/[5/wq/}K3k9n[9V');
define('SECURE_AUTH_SALT', '9w0#?JLGq^W.>mxz7dK_~R@j&@ke0&VsD_%@[LpEb-(Y>Ua{-Ax4[CqC6P%|Vd|I');
define('LOGGED_IN_SALT',   'lu>!5.<B]I1_;]sYaX=`L_^214s((=:5GQXoDJ`N<g8=U{(Dc<R_#Fo~FBD%~i>B');
define('NONCE_SALT',       '<)-!/CjtQ-x;walPV:L>i0rRg]R1u2s>VDm0KV`<ACt3}s,<(zW^U0ka5i]VdOH$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
