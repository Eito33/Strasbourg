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
define('DB_NAME', 'strasbourg');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8I/7@o2=opeR99o#]XM X@t4!C?|;X(G2OM3jGgGJde6kKo>Laf!,:wzVyvRBKb4');
define('SECURE_AUTH_KEY',  'vfs.&3B_x4!BWu:dBy.zO4H>n{sF<gI@.2 >} ar17j6D$yB]tMo;2x;`*NC85|/');
define('LOGGED_IN_KEY',    '}=X/qL4ZJO{T6>rQtVo3cF#4Gk*jimSGBLSndoHQYsgcm|mijSHB6xeLsjg3FI>G');
define('NONCE_KEY',        'AWM(&&1$NT!z?L-3(gZJDd!$;TxD##skqvqif~%]7i2Y>ZJ=a7K~Fd0K>#*Pmjk8');
define('AUTH_SALT',        '(e|entn^3;+ Jg!vX<_ZM38P|}8zk{=>pac$e@(.wkin33[+Y[mhShml{vcSL<${');
define('SECURE_AUTH_SALT', '[T.05)MB+o[d!D,|S8>F27H%NjF1]kWCp.Rho!5r7[<~/#P>(fOL_AAU~iZ f!ep');
define('LOGGED_IN_SALT',   '~]Gk(0Y!3_-p7R]`vlib4RQB,aKfiBxutuXI{j%K5T;>/2or4:LHh`/eCKl]H9b,');
define('NONCE_SALT',       'njqU=yk&}@&QhUdz +5x98T)E|+^M}{t@r&XmqIr!4|q?:&X]4>01p@&#m%#6x.Z');
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