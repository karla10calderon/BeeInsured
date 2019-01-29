<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'beeinsured-wp');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'y]b`|a29w$c1#W;daen*C.~@UC*Ks]u3njkjY&,q#IW/Rkbv|;s8BjR&0inyYH2+');
define('SECURE_AUTH_KEY', '<2A@^*giT8%FhLz~Sq6&L^uWki;ZSD3%30;rB{nzbeWEW(f|_p[lJo!B]+<0o%qw');
define('LOGGED_IN_KEY', 'r4eW]2%XW,Z]Gtr&H1q&hs/[V4aDkPt|DsiJXs)upzUfLk~5%VPm2~.+T]8TjxKD');
define('NONCE_KEY', 'AbxZ@l2M{Yy;_*P68#PU VrThZ=I$dhSr{tJ-.<Ul:};TQ#Dh-F{ZsN.>JB/EaH}');
define('AUTH_SALT', 'SYVoND&90.DxWet::`HJg1Dcdy6 :VxR)Hcy4[8Q0eNqIWW4-__VzEizvbCBT@is');
define('SECURE_AUTH_SALT', '{pcuC( 1h8VV}lJfw9p|Yn$AE2=lq8{k^w.gaB]Nh!/%E[vg^$G?$EIN,.+./M|K');
define('LOGGED_IN_SALT', 'DG/W}BNTgh`D7|Eg(tS+5EArZu.?eB6AueQ?y^Ywp)8c^=#_4=zF$|oTQ<1P^4iq');
define('NONCE_SALT', '*/sk7C3eM^j~J*([/8cV#t?Q7$X&=X38]F3|fW|@nvRCmi( Z{(lLMk3lZzJ._m@');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

