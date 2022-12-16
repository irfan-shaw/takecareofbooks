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
define( 'DB_NAME', 'u971670766_9nUYE' );

/** Database username */
define( 'DB_USER', 'u971670766_3aTxW' );

/** Database password */
define( 'DB_PASSWORD', 'PqRiwukNv4' );

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
define( 'AUTH_KEY',          'p1<;4Cwcb2HD/$hi7D.Hh)JbJ}wYg4_M{-8K48vvN:(?>{DjS{047k~T$S&]_e=$' );
define( 'SECURE_AUTH_KEY',   'DCo ygfsbDj{f&1]>~W]]&x.{#RRt|>}~:rO5{R1i1ij,&F3CESMSn~pUMPe_r3[' );
define( 'LOGGED_IN_KEY',     'RCkg+^LS?u8+z0{%!:~j`Ih2/RX|SC]Pn-M=Bd.JwbJ1P@``hXZYT:>0v_#,,E+I' );
define( 'NONCE_KEY',         'U2cS&0!R6<.*GM)uOUyd6Yg-xIbwZ879_;m?&r-J)miAcz%_IA_/t3P:A:w#RAcS' );
define( 'AUTH_SALT',         'm})VyD)7X%PM%A2I}5DY0%Nk|`DAf!j2PF|#Zg<[zKc!zMsYkwN^_![ulX31q2t(' );
define( 'SECURE_AUTH_SALT',  '{*jTt8!g|MHS,h6]fAkmI%Dt.BCGQ~22sJGwzg+40<L,c){N[oW8jsp@!x-Wbq@S' );
define( 'LOGGED_IN_SALT',    'K/_5MjI,f>MjSg}jC<.m69zx2(indqUTfh0hh=-KC#*3V:DP*cMezt{Se/v@[[Le' );
define( 'NONCE_SALT',        'NYG@tPZ&-p/5%.t41&`;s39M=I&+{tqhfVu|mn/To.$c+X`Bh{q}{YX`rdYxq$R*' );
define( 'WP_CACHE_KEY_SALT', '$5+=^z=hdJ_!jQ]v]tC9bBr_n=m{0s~cpipgmnLTZIh5^=4X]~8XPoZ8<XwN:ViA' );


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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
