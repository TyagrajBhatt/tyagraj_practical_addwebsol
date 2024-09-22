<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tyagraj_practical' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'u5*(F^?Whe@?ERIW`c9kz5x^.0:c%uAcy5Ke;@DRurRBOc~>&iYm<<.$BRJgwpxe' );
define( 'SECURE_AUTH_KEY',  'pFPGh_(&-pSm83jcEPV[(!aejL`=[:odsAiU*V|r}1DyMSKxmGIxz]MP?cb>sHk0' );
define( 'LOGGED_IN_KEY',    'M3msUga@JP6rMdCY_:,)|@6b&A`DV;xK7R%(K=wDMMsW59^eZ{*MOsvr~qMuqi0%' );
define( 'NONCE_KEY',        'C8;<d5]{4yerzCu404)b_?L [cHKrTOO{OPJr1y-v{70`nE}>rGvQ?Ittz!?)O57' );
define( 'AUTH_SALT',        'iXHu5|AWm+^MlJ@xmfWp?x4l6rK25aM=Wf? qC:3ia#s-WC)K|lSQ%fw=hBJA5MN' );
define( 'SECURE_AUTH_SALT', 'Uc>02VFV]!XDy)$~zvAzV(y97YO=AG-=b0qe0V@{>pOfNvRP=q0:i,b$J1?E2TkS' );
define( 'LOGGED_IN_SALT',   '=Nf6-6-v3,_PB;0o=KW9%76w]]DyrmA f&5&`fx,aL2L9m*h/3yh:lo`(q01v_s?' );
define( 'NONCE_SALT',       'qcu9BX,KYK(;mT>kfn)PWvY)Rfeffo?r2W:^!lepPV8CLxZLnGyI6ey=jSZlHj09' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
