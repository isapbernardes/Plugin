<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Itu,43/0~ Y kHzO$E8Gd!.,cuGejcC7d[p<rU5A^,YfW&Gr~8 ~mTjPc$2KnkfN' );
define( 'SECURE_AUTH_KEY',  'Ms%Q_oT$}iq~qcpS,.Fb1w;@92nt{nf-9$5MYkUC=-?aP-},x0?8#^qV`F#$d4ne' );
define( 'LOGGED_IN_KEY',    'FC{;.iL,cGKdZ%Y-GyoK|faK`]Ba0BU(Jf 0v8Dy}PzX6;Mh6?ZAw(R-Z{`;*Wt-' );
define( 'NONCE_KEY',        'G~e6D0;axDeM=`&eKVlVooczFH$(0cS2F3! DBZbZB (_GoDGc@A)=aA^Vp.wK2L' );
define( 'AUTH_SALT',        'tW,T[lyG.-f ufQhK$-hy:2xCb}&}F7[9([_cv<5^<]8Gt1-wq7%;r7zkpAKxR%p' );
define( 'SECURE_AUTH_SALT', 'q0b_Ar^b]6W1Y6-Jx{>7;kt&pN};^sw_S4*Z2D#T5F~V$)8dbf]$Vs@!e,_2r#kq' );
define( 'LOGGED_IN_SALT',   '%M7CUd:Xpd(55@Rt@^>ZXAZKIZ/0@rle_!sF@kN*|vQ_83vurT->.NfFh .`NwDp' );
define( 'NONCE_SALT',       'Lo0n/:9R9n!Xb?Gt7;jv<_HJ`b3$X&eYS^b%rd8O,`yqK4:E,{.--xF*Xpq`RG[S' );
	define('JWT_AUTH_SECRET_KEY', '6{hG=KPl j#OS&Z? #k2ijw*XI4Qw%)K&-UkH9`EJO[cRsx7BrB#4IX|EM0!;H,e');
define('JWT_AUTH_CORS_ENABLE', true);

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
