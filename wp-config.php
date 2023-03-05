<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u248779116_iU0rG' );

/** Database username */
define( 'DB_USER', 'u248779116_c2kRn' );

/** Database password */
define( 'DB_PASSWORD', 'vTzT8hXHV8' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'ZSg1qg VMfU14t39lVTKpu?<~lFrn2}&sT$2{9nBi*@b44_}R#?<,g@`R_1<JCpW' );
define( 'SECURE_AUTH_KEY',   '(zo.b1]~{U,8A`RIJy%,h r%hZ[2?~HiZ)|&i9cctx6m$7{*]f>V^hVB`Qq^lR`r' );
define( 'LOGGED_IN_KEY',     'XLJjuze;j3}sk{Q&AS5+e$Pv0CyaULRA%o(0~YUPbQ5%J<3$D$s3YrH88yXLEv1F' );
define( 'NONCE_KEY',         '#jsFKPCE%D,*W(pbK_BERccaH<Ilmw*`M~?FkmNQYg(]LO(Erm5JN/:6`@0T6q=2' );
define( 'AUTH_SALT',         'qY{iOO|^uOrrfiJS$mfeR5?XTwq_1mM29hX#-z&y,D4baLJX+,g3.#vMaqYTQ>D,' );
define( 'SECURE_AUTH_SALT',  '.?z>%<YCANq2 ]CpcC%|Tm@D]<3&8rj3dpuyt= :-O8mOG${BUQAylyegW8u=+)a' );
define( 'LOGGED_IN_SALT',    'ueQgXjqnFjNYRk?K?iH%wK6=htS.c mJ~5uX_N sfz,u(N@6eDf}c-:_DV~@Q|Vp' );
define( 'NONCE_SALT',        '_g<bS33-XTI5uk<#%jJ$_;ad{;nn!Ldr:]1 4nlo-oq1n%d}-l,o_T RFR><}_0}' );
define( 'WP_CACHE_KEY_SALT', 'I@W@GWb2Fl`|pXS!$W>:dkoa4^Re`!#YIpKt*qJ8R?GEIz7h^_gwb{6u{^cC:%u0' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
