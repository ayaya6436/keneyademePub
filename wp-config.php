<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'keneyademePub' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xGH@^:7Pp_p|:RARip9 wgM#lP6%Mxb7+n[P^,Cd?|e@ik,_0{-{??g]{K{UkBV ' );
define( 'SECURE_AUTH_KEY',  'Ntitwv3&;kXDTT(f}K$|qHE=LLNcdxr+P7#jjyexPf?i-*.M5mbNhP5,v%bAa$^2' );
define( 'LOGGED_IN_KEY',    'Th[ZuXFr0=~</)~!e:%IzM0[sl18q`Zp]7r5Jc&eP~Sx+Oo.Enl`Etq$+UV@);[L' );
define( 'NONCE_KEY',        'j}l]/P{R0M|HNqX<05{!ixU~H$Asyve8>O4dge/V+[U=Of/3t+.lMydT3`bY10YL' );
define( 'AUTH_SALT',        'PX&&kb <(4bxMY?gcqd7Z~}oRKOYR.p{<QmRu2y,Z4<OOnzu^nu)$`7aKvC8CN<J' );
define( 'SECURE_AUTH_SALT', 'Jsv$[-* rKX{9Y,zE=)r(H/&f7^W5KQ~o`%C!U+[1lZm{}JZdb?PuFY,|dGn~E#K' );
define( 'LOGGED_IN_SALT',   '(%O@R;7x?}3.K@@oi$DZd(sa]EM6R~x^/)JO9J3R;E[oS__!_CPFfy96dX@.,.={' );
define( 'NONCE_SALT',       'Gk9R*3-<pkmXg*b0Oi*qdm9:M,l}=;D`<`uD*2tD:3u@D8Yo)jvTY.fq@K`1a%5I' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
