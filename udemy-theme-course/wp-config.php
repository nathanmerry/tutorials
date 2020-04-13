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
define( 'DB_NAME', 'udemy-theme-course' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'kwY4^a@6N!k$~zZmXyhSp`_bp+/EBP{IsJf=I[L##!AnMgB~Gw!;#O&)5&SING+L' );
define( 'SECURE_AUTH_KEY',   'KB]|t9sK[t=U+b^9_.tsf0avieu[R,Lj!59daNVAC*5t_#U)sMLB[$70V2s+zP{*' );
define( 'LOGGED_IN_KEY',     '{oahDE{nU[nMa#=xuSr]~?Oe_kIs,=Yi@U0Nqjb$^P  Yh(/{!OXsMRiLM4abT<k' );
define( 'NONCE_KEY',         '@_*w)-B=^&%NYjJ6+v:qH|*-~:!D(1hi3#SR=i9s#LeP>bfM)3Mxp;!-l88=G4(c' );
define( 'AUTH_SALT',         'bG8z(jSt476?~:W=f%Q1_Ui<lKr9EV/$j(aX6OOHx;MUv0pxHQvat!vxY{m6S71h' );
define( 'SECURE_AUTH_SALT',  '^ibrDcI^sghDTNzITD}YF(MQS#N?]iG+$MepwooW.849aOh(+6*xDBX2dUoA9^k:' );
define( 'LOGGED_IN_SALT',    '^XMVX]/p=+UAgv76BIR|W1Q90^_$+eH9N: Bw-Kr^_n/WR82vHr_>bSo)6q|*5Yk' );
define( 'NONCE_SALT',        'a322/R bSqdY1$+!Eit:Nzt3fx4V0?#h&8n(QJ_-=pnVn++?x&h~f}?A2VZdW}R%' );
define( 'WP_CACHE_KEY_SALT', ']o3$iVm4&Ci1D*CY]m)YB):NKA c,dd)QbX79Ku/m}`Wat/KX_jKFS~h&+T$~FWf' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


        define( 'WP_DEBUG', true );
        define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
