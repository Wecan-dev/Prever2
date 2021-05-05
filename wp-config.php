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
define( 'DB_NAME', 'db_prever' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MKa(qqj{&/bb+~|8=H9q4%QVKDj74*@v~tt}m;$Z&vk+TAn0dQ!FtV]-DPrm=]2,' );
define( 'SECURE_AUTH_KEY',  'Vy{v<&xHq{6>C_L8YWQOT}-^csmwy{nI*}i|S33U(`)*941j50!Es-?TEagib1Lj' );
define( 'LOGGED_IN_KEY',    '+}NP=2,7FGeC7pJj=`[,T5U/BI(p_^bR4]eCw.U.qzKo=974;WifxFE,p3*r<ULc' );
define( 'NONCE_KEY',        '3~.6^Q}O6$rIpq&_ngw9AQ*+XVN~{#Z^L$)`}#UdsmsiHE9iOZTY{Hksu5gYtnT.' );
define( 'AUTH_SALT',        's;7Yvp;[R+cGU>&}p<R}4HCWF^2g o0Ouxq6,5.Nps`ibgKY:Rbm{GvW4<!KLD8M' );
define( 'SECURE_AUTH_SALT', 'VD&?^A0%Xwrs?_46.Q19blr4{zj*b7WH*N9GVsXsg>p9zpFFvLe:DOjO}!Km)]<Q' );
define( 'LOGGED_IN_SALT',   ':@kX<jJe<~zOZltI&BPJ)_~EDTyXH+*dRqlVVLr![MM?P%,r:KP{joysBKPo/]Yh' );
define( 'NONCE_SALT',       '?#5o(7>:.)j~j: 5+VNn$3v# D^o:,6vQH[hPWjuPLcUvtJ:y>Os1(2k%~B@nq]|' );

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
