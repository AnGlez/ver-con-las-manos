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
define('DB_NAME', 'museo');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'admin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'pl4sm4');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'i_?d_!<n>@-tz*e]1ydIlIH-(kmXXf$T>%KOP8S=k~X4>>uzIkUEw;BCKVB<c-p:'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'BT+(`M-dX` W3v}A=|,]A^<Nw`ki?!lu lSF?4J87A%4 i$0l2Ro+Op,JP7z`)oQ'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'TCak,|!&PaD>]|xjfto (]>FfJeC+z69l_%%%E1.GvmsB;W[@M(c1AzFVy7Rz4s#'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'a|N(sP;CS|*JOf.>[A3p[g1?c,5.7bo-@0LM84XJ[&8WbsEemq6|P-6[><:?$S|s'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '+-vOQwp$|44^SG72o(7S`_4oB#jU,;^:4I3AJwrDDyV%)|PZu&g!E]k)iHOLGUn/'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '3K]QQ so~BqI{$7t[VL9t?/_YI@%UnfSt{my8rO1$8!8d9}8d+Sx3I0|O${|ZC9]'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'qzUW iPp_sS+5ej+ZOP:M3 0NwZ]7@%,&@?AnH-%0<-o5;*dt#MB|xSq^wmr>u:?'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '+[7(&s4RtQXX^ke1 <d@8&2d6h0QEuv4d]_$d--7Poo`LqY~xAm1+fk5L-A_4LW$'); // Cambia esto por tu frase aleatoria.

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

