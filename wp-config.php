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
define( 'DB_NAME', 'qul_sejadah' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Adamidham1!' );

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
define( 'AUTH_KEY',         'M,#G}x90`!LvPCN<:GVZp.Pw<+5F[^A-*e0pg0YCK(<E*cS/ (U!47xOr+YR{@qh' );
define( 'SECURE_AUTH_KEY',  'G.7fTbF0aVmUHpREhH0wYUTf{#Qk4WHt4=HOp$Q+v=kloSM8,4-2!ZQ9>Gc^<ehT' );
define( 'LOGGED_IN_KEY',    '.Gf?>;+&u`-^!Soy,B}ugrBQV4z5Q`w/GAaJ&=l,zw[}8:+IxM:>Af@9u( qmlKJ' );
define( 'NONCE_KEY',        '`g6!,Cz,E7 }7GB`pSP@{(fPNditK) 2KD@J$=G!-H$#}Sz{H2YQwj!6}>3@o^1&' );
define( 'AUTH_SALT',        ')JG3k+I/Qyv9V:L7.RIUr)reLI%PX[Yr>qN(2aUE#2(#nmFoUqM@,:/V2S./z4*/' );
define( 'SECURE_AUTH_SALT', 'Myp=Gw1NYR1&H38Z3#}]?5azWLG <olp=rlha=^..oR`1{(:t;cz_I<z4uOAPg1h' );
define( 'LOGGED_IN_SALT',   '7yA$VuRDx|V6:&=2KpQ#poOTuT[Yy!GkuR r(/1NMCOu2)T`}:|F j-@[9>wIoe5' );
define( 'NONCE_SALT',       '6-L!0yIF~,Mta^cTd[rg@3nCcZ]QBKg$=HI@@!2t}~F_A_-(myZ%4FasqbyG&]<T' );

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
