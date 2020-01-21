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
define( 'DB_NAME', 'ava_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'F!4]b`/WLXiPB;RwrBR$8A~|.T{e.}p(Jua34m65N(M*>0Jc5!p&*fi9de[A,M L' );
define( 'SECURE_AUTH_KEY',  'aLID3M0jq):W[r/Dts7%`%hqvOA_r0v*/Og^0;`Pjm#l`g;#e%U>ShBR1m|woC%$' );
define( 'LOGGED_IN_KEY',    '=$Io+yLi(@0%4cG%+#O2 -OiMN;/z]GiY&G47d!hV=,5x7mJv}q4mLS@)``f}8#w' );
define( 'NONCE_KEY',        'LO0{T-1[K-Um ^X)Cw~XF(=uTskur{^q=>y9d)6b|1MsO,r9)f4@Z]fOb-JY^aT.' );
define( 'AUTH_SALT',        '|+QxThcHo!Nb97#p`R)[cXbNlLncWa7LAM_7:K`u%_TA8yyQ!~+i^K5bz8E5JA(M' );
define( 'SECURE_AUTH_SALT', 'f}MUnLq (5W*ROt]!`|b:?kA7<Iw6BdS|@`6|%X?d8{J_P1iuhDU[mJbk~qu$r{W' );
define( 'LOGGED_IN_SALT',   'tZfW_z-1jY-fwz:duVWv($_-k:z&0jr+F]?G1r@YF3w$9flmwzogh.zY@Ksnq`WH' );
define( 'NONCE_SALT',       'BT;O{m Jz=cyzze%Vb<MDDqIe1{V|QgKlC[@-]<e|zK@xEzb.9Libx!h>`,g:nPJ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
