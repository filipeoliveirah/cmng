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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cmng');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '68^Zv`]Tp +|28X~mTMM`aUP5^(<Y<9#I@:&>e;_:3LSu8],2PzfZV<V0cCM&pdu');
define('SECURE_AUTH_KEY',  '8du;=26($yFG1_k1r>$PuEn3F].GTf-](G}a? (GmVceFo@/P];@Hwa(*!GmtF A');
define('LOGGED_IN_KEY',    ',/-[>h;IPW(ipN3+%)IvHf&;t/Mw~N~)#=pjW|L YJ`pvNuc^jJR(%TO^b<)I83g');
define('NONCE_KEY',        '=3=kW| 1bqC}35*y7u>>( y2.1O4}5CltLKD(wE}gP:p(&0lh.A]|12Syr]-yBho');
define('AUTH_SALT',        '_k{dFp`G,5)_W+5$S]P@>Mx&jALq<>GWV^JsP,RHKPI{m~w GTWY*/?Ws0}3ED2S');
define('SECURE_AUTH_SALT', 'DZ$H!*!NJTEx$,n6)@,7=3b~d9J*Kf2=9b@N)ubO@_]X_y7@ez<kW$1tJ;2:_|[5');
define('LOGGED_IN_SALT',   '3F[~*KghyBMX=Fl5wxTThw*44D)W1Og3k:UW x[.#_OSA3`?OqpZ1&Wx,eP3{Ih%');
define('NONCE_SALT',       'j[B`<1%F@oC|h;@k<0Anp!bpt2=&UPIftD?m:mqP@Uq27|buNmkdNuG?GQ/^*uA{');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
