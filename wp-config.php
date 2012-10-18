<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'emar');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'gustavof');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

//D:/TRABALHOS\Agente - Emar/Dev/wordpress

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4m>VUOAjXhdjJ#xj4tDTTNs82s_Q$i(UGLYFYz1={QL,4}mQ)2JQN7[Qklz0)%-x');
define('SECURE_AUTH_KEY',  '@+TV1lvMmTE2Bi{F~A!qb-+vSR%>&=.h&;+oi{d9QAv3 UxQR4l0Dt~]R8L)f&TT');
define('LOGGED_IN_KEY',    'y,XN+,v%>;<+0dpq`UbmS~lvXhgn*Ik2wwv.LgG=m/V% V`BE1O5ws=t<]U_Jd|k');
define('NONCE_KEY',        '0b lvtP~}`dJY|NXNT={NT^zrN5#|I77obW{ H*Mv&#4?#83,m?GdW8d+Hz|#hU+');
define('AUTH_SALT',        's|2gYPS4[Z21BI(]4d>gU57%p3S87x*(8-JH7;@y-4dpEXSAwr3SpdP}7zi+@NE@');
define('SECURE_AUTH_SALT', '`]8Z&HobN.z4EfhvUW@ZA3Hh]!CSZbhsS=`Nh{odEM.`~<v]ML|~ev[g| prnl|l');
define('LOGGED_IN_SALT',   '&JMY-~10l<F!)s>aFEs_pjq$69X,Su|ytW0D[WVR`0},&+(8A|-bu$cLgPNy9WPi');
define('NONCE_SALT',       '=VTS!FA~4(%el@=DW?R/FNHzI]XU4jr<./-~^hAi`]S=-$Qm7*QDsfs@KoL*+*LF');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
