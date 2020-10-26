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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

define('FS_METHOD','direct');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<g/G`<m,`L:KElz8:.QH)7Y:<lBm?IK:Hmv8ez_lBxW1{hsFrM9/k$UFD&p6_Otz' );
define( 'SECURE_AUTH_KEY',  'N*.Xfg#|Q 3gir+wu^ziRMYA[Egbh#z1UUgI{Xh7ek3deJ<KT;(.8t9S_w!l5n7z' );
define( 'LOGGED_IN_KEY',    'Xk%O>deG}Zg|gYguBtYP).pKS(&O&=U.&aJ`Zz]q^dw>W;$eBGV6-i%2oe|6wFaQ' );
define( 'NONCE_KEY',        '(lN#YwdDR!5t2^6`W40`tbr&YhHou#v8%aNm:)L0lazQA=VRn*]CQL`>}<Lmn=:F' );
define( 'AUTH_SALT',        '49C;|2YIkC{,%/L-K(b;OEA;Qv*E{I5e>{|u]Hp,)>*u?]jr^ Iim6^,fHUKm]V$' );
define( 'SECURE_AUTH_SALT', '5Y5[ScBpm8)^*96zK<fB,n=if;O3ZE{]:iL{Ullo?0LJzw2Cj_urB|7.=a0`|OJg' );
define( 'LOGGED_IN_SALT',   'OG570kR%f7|hQ#~u+c,3{Cl.V0S;/b++8zSy:xTE 8o&0tZ^3zj`W.]9!pyz{^k?' );
define( 'NONCE_SALT',       'Uu5?Gsq_?cybRdn<*}Q~ZYnY5IF4QtR`sg/bGL}f;/Pt8r]__esu`EqOm3KPkE06' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
