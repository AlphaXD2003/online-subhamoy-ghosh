<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'workwithsonu' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2/VgO].a ,QzNX_0L#?a~=cAyz90-pUP=*LM?7)SWq;Xszi7(J/&lh-Ern;Ewt/a' );
define( 'SECURE_AUTH_KEY',  'tH}.z-Pc)#c=IrPVo;n0dCbp;UlS]+;[&k|@rRQ1W;7((Nu$A|9=Gu1rSU}8!qM9' );
define( 'LOGGED_IN_KEY',    'vH2y.pbcbL.pbYEhdl=wOwgqfxS+W7]W^IR-gLzx,t+fomRuS<=<U:ulomxz!OF(' );
define( 'NONCE_KEY',        'zaLM+?Qn`l.$flrL%c@FV|C9q3Xl3;#|=xI&-pb(^^)vc:z%wWe7}_3)fF<MovrJ' );
define( 'AUTH_SALT',        'G>3hv4[)ee1-UwnYN4s.u:L:=/^*8z,|3Kw8XB^eOFa0lByrut,Flw-z2.0~q%,s' );
define( 'SECURE_AUTH_SALT', '_&Ax-{!`cdD0Xs}Lv0F^=|h+O+m.Vd+50r@ACabphedchCM1!~:%[DLkC5SmJ:o?' );
define( 'LOGGED_IN_SALT',   '3d$?*IN-{ze%n1(NnM81WshSlYa2H:M8d$|m,uL*433U/8R[/(2k2O6b3PHM8O K' );
define( 'NONCE_SALT',       'OG*H;gm:)3%Kg0}SI9 4i?+6;GVuq]oGjMKUt=x|yQQ@5m5z}PZN0M@Fx!6,l40k' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
