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
define( 'DB_NAME', 'repacli449.mysql.db' );

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
define( 'AUTH_KEY',         ':-W#{r0sGp<Sy]_hw?>JLz>M2>k|Cnfe_8bZHI`dec9.Xs_QCJ[6gv]d k-Th<)2' );
define( 'SECURE_AUTH_KEY',  'q jKRM.j=^LjuSC$$-6+z3C$@hP{GI$CSW%gw@zi{Z?541%P<(h)/gu;,HX m_E ' );
define( 'LOGGED_IN_KEY',    'M9QhZQP,D*l9~-:j3PEzX_Vq$zubA>rv<&H6B/j9<}ezp(Ypl/FQ]FQc7u=|p@iK' );
define( 'NONCE_KEY',        'v5Sbyx3USCWb{s,iEv|dhc]A<=t5}CNW3=#91D>j]]?V&w.9(#Bw}bN.s.VjCf3z' );
define( 'AUTH_SALT',        '5pcRlW7>f`de=?T=7%V;Db,s]f=eAi1|k`|A`oS?g<}8}hhxRn7HP:JXKSF>,e^c' );
define( 'SECURE_AUTH_SALT', 'dB)5d|kAcz0dkM-m-a~/e4.c@.l}I,UJ~{GZK~]?PaffFRS5CvC{3Cu9?j(5cv(?' );
define( 'LOGGED_IN_SALT',   '~ O~qB}q8P{~|rjta:Q[Bj{XUE0ZSuqSYv^PIUDE[1oJW5? #ZS&DG5T%,;@U{]v' );
define( 'NONCE_SALT',       'Pvw;1d/YPI^,NToZuuE@y1ttvQ~DTe :3Kk=Nd!(Ud@$@/pdC4#IjwALp}:rdV]q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
