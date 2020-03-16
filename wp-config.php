<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'tuxcar' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c_kuN6]N$U6_*oG}nO8K5jYI_KojD5->mjVsH#F3Uu&#lS{kOe%uCN< bb|:}Xjc' );
define( 'SECURE_AUTH_KEY',  'I#(T%w9B:%&{ xFZe+Rf51j5+EWElnE?=q&fF|2TnQ4Ey5WCa!x6#gP|w;v*DZyq' );
define( 'LOGGED_IN_KEY',    ',u^hC:]e6@,s{MCC-A[EJ:`sEedHt-xKy(0Ai5zk?_<]q1F>y89PKK!J2_WgK#!Z' );
define( 'NONCE_KEY',        'U6~bhY0MjdW1+8JZ?d=TX@#9}vKvC3RH:mQ0,iGsg.:}F@A~E|mh_F71xhnyTOiV' );
define( 'AUTH_SALT',        ',<kxGOQB0hPu^eR=F6Xh6]o/T/$qFQ05IAO1WEOTz0a!;J:_c-^%}C)XuA}/k*W,' );
define( 'SECURE_AUTH_SALT', 'W(IHp&8A^^a~2W3d~3-zV6wN-TLHz9tBZf$5Jyt](}}66cG1{F[elvb-?!J/2>>h' );
define( 'LOGGED_IN_SALT',   'mjp!2|@mk+Ad!+[`<=2`ZHoGLui4RGq PIF_`4Vk7uhsccJ/3Ep,~qd+/..p@;$F' );
define( 'NONCE_SALT',       '~8WNv4hr<oG4WbG_bps8KSrOl)aK&:Jcjtf!,NV,|tX[)tio&Op1PE0%q{ c:g9(' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
