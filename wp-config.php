<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'fregates' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'rDji<vF@_IQ@Jctqt@E&Uc!kO?aY-!cB,,Frh;N_tw@yAV9Fp6R#0<OiO*!TO0)B' );
define( 'SECURE_AUTH_KEY',  '#FIRZ}csTTb/F4zwP7Rn;Bq@Gw4$OZr4=Qq J_;>5)j)F|]:_{c*d}PGY}l!{;19' );
define( 'LOGGED_IN_KEY',    'o|shHU>^b},zpJJQCuj]77FFqM:_o[WZ[`;]bKvcY&ks5-N@|M N7y/v6hJq]A?_' );
define( 'NONCE_KEY',        ' kO.a2r;,yDy>S3%EYB,7fX!Fp#B~#&&=`y*:(;!#$V3#cEupPas z8#pbF4-?C@' );
define( 'AUTH_SALT',        'j%Q?_z(@Dp<PNKjTZ87BkiI_zAvMq|^;D>RC{p2_5F`t=9Tn|.oRedpPJ8%s5!he' );
define( 'SECURE_AUTH_SALT', 'txk*6Ka1bV7/ho>>-`D{V8S5YsMO(/n8Q.HFk05.&j>(Xat5|o SKpJT10php/y7' );
define( 'LOGGED_IN_SALT',   'a!1S#d[BXn%&+Ai+^K[>;#MU,~o<5!-5rkU7jrK]b7~QsC8,&YnYV@:rj]MQ0tLY' );
define( 'NONCE_SALT',       '1i;*XJkRmWuupn3~dJHY_VrG]h}Uf8ltqZ,k!8J&9uZ0LU3rc4S#3H_n-Ym6qcC~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'fre_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
