<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'found');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VA~;yj?3 ThUgR1t[3IGE6R.89ivS&JGF#Be.,d{f=02j1:9rL{2Nbw^r/C#&Zic');
define('SECURE_AUTH_KEY',  'W3wX7p=}}HpwE/Al8dS-Zui]Rnf3N6-Au<YK0Jjb38wPWoc-sH~#LcZ}F@;WE;Fg');
define('LOGGED_IN_KEY',    '9NY::+GMUN^zFSVGUq3?T$wL{R,]T!YuER}&KO?wtBvOoj4bMvTHzO`zC;i!}:+r');
define('NONCE_KEY',        '4SjL#b eT;A$`Kh0FK,8cvy~[lG?CTecl0@,D1rqN:A6p]Uj6JXgRPq @x9?-,#@');
define('AUTH_SALT',        '4*1Xn:0 ?*68Ikw-mB$}s|!go19H~+i,I {Z?m77K],56pz_oJvst,-C~K{Ej@6^');
define('SECURE_AUTH_SALT', '}bU}QUt> }{(|Q-&8]R5@8<`Y=t>$*s7s[}ELeZ-4&Nzp3t=sFq(Zp/RB=dy^p~<');
define('LOGGED_IN_SALT',   'b_9!a],cU&,bY7Z_b4v8f)VrUdW&A}mOWcoz%OcT|Pt>S=G%{)rDvFR0rfF^#@!c');
define('NONCE_SALT',       'RZfeScQ~zBfvAQBhYK`<OP]HwPs8golW%s]OA<2!<EhY*R<3eZ`!j>yjb#@5/h>+');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'fd_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
