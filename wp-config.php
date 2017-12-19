<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_test_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'WP_test_user');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '2575952');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[bEsezq$d3adIw_y.Ci[~!AFrE!6EW%nGYZdd[atAvM`X.Odf=OH+r-ajyF(,7J=');
define('SECURE_AUTH_KEY',  'm-aB?H0_1]<id=*`mNfBP:Vh&g!u9{]Wn:_H #lc UF4@iqJ,hOX16N~PLTZTdq2');
define('LOGGED_IN_KEY',    'N;lw=-g0G` 2XS6{2SRK5><:)R&Er(uEOFJkcB:Ix3_5-WaZo6>Io.~MYX}-{dLD');
define('NONCE_KEY',        '7S,.9!JW{r!LhmAwn(+.Lb7v0-/+p&@-7^AE5#S2A@Fdp/aC[K$(ahLr%#z]P~`+');
define('AUTH_SALT',        'Drg!bgC*!;.+leVw=9#y?9@YL~}Jf}@5df$g~j)#D8)UV<^py]4/B[gizh;vI=ZG');
define('SECURE_AUTH_SALT', 'vU&!0yWL>9;fHy#e;9JiQ<kK=eOo{GMi?cNfh0O1=I21ezTd$f+k9X*hRHrs]e*)');
define('LOGGED_IN_SALT',   'O8d<%.QzPjQR`-=@.7)1Y`r{{_HHa8WsQCK.kF6Etm1x;a)JQ6am1D{1T!DvGnCJ');
define('NONCE_SALT',       '3?|?Vkn.F:#af]Dxe_-y3X+XW:l12?7M`DY|9F6[B0a.;ot,/;z>n|F~2ZfOG|o[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');