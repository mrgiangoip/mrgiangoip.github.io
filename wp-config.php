<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'avadatheme' );

/** MySQL database username */
define( 'DB_USER', 'avadatheme' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Vumanhtien1@@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Pmk=+sGL3+FNPn[20<sa _wd!XXO&F>Xp=Ds3AW~N6wL~U|i?M,Z3cisR<Peax2<' );
define( 'SECURE_AUTH_KEY',  'jJ!(9y(_/8C+5iy}#t#|b^H.SIO?V[6Gul3i:UjAst!,8CQ8b:0C{S0(6TAyG|HY' );
define( 'LOGGED_IN_KEY',    '}W,#4cVG.8]%6;tuIq83zu8T/q8yvig6m &dX)<55b`a)4pDBrEMiA}##2Il`-Z*' );
define( 'NONCE_KEY',        'gNmxElU2Af2Co/tp+H,plxdM6;N}@8j^SffuS|[@^jcz#:f3ltn!~@Rx*%daPZS?' );
define( 'AUTH_SALT',        't73mM*B+}%yi q|Fa%Kr20HAh<eYSSV|wk<{7;FEZ(?0YtW([2%/AZ^;.h$gcmob' );
define( 'SECURE_AUTH_SALT', '(I-rKV*s` 1.O}xv|E.4/b86bcMVVpJL5CoecwM8,U=?0P!xQR1*Wq^#7Lb0I:+T' );
define( 'LOGGED_IN_SALT',   '=&g$&VR2[v&2x:@N1f3MlXn#Xydu- 6CTr@/XNSH|k  Nf?5m*ax_3Bj!o`r+ai/' );
define( 'NONCE_SALT',       '$l*#):x&$$:!`B+6LB}NT8X>nJd?hxBE6%|>Z<l:1{CMDM2[k&yQ[&AI4]8|vo<O' );

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
