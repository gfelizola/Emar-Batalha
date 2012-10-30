<?php
// Define Environments
$environments = array(
	'local'       => 'localhost'
);

$server_name = $_SERVER['SERVER_NAME'];
foreach($environments AS $key => $env){
	if(strstr($server_name, $env)){
		define('ENVIRONMENT', $key);
		break;
	}
}

if(!defined('ENVIRONMENT')) define('ENVIRONMENT', 'production');

switch(ENVIRONMENT){
	case 'local':
		define('DB_NAME', 'emar');
		define('DB_USER', 'root');
		define('DB_PASSWORD', 'gustavof');
		define('DB_HOST', 'localhost');

		define('WP_SITEURL', 'http://localhost:8080/emar/');
		define('WP_HOME', 'http://localhost:8080/emar/');
		break;
}

if(!defined('DB_NAME')) define('DB_NAME', 'emarb819_sitenovo');
if(!defined('DB_USER')) define('DB_USER', 'emarb819_novo');
if(!defined('DB_PASSWORD')) define('DB_PASSWORD', 'emar@2012');
if(!defined('DB_HOST')) define('DB_HOST', 'localhost');
if(!defined('DB_CHARSET')) define('DB_CHARSET', 'utf8');
if(!defined('DB_COLLATE')) define('DB_COLLATE', '');

define('AUTH_KEY',         '4m>VUOAjXhdjJ#xj4tDTTNs82s_Q$i(UGLYFYz1={QL,4}mQ)2JQN7[Qklz0)%-x');
define('SECURE_AUTH_KEY',  '@+TV1lvMmTE2Bi{F~A!qb-+vSR%>&=.h&;+oi{d9QAv3 UxQR4l0Dt~]R8L)f&TT');
define('LOGGED_IN_KEY',    'y,XN+,v%>;<+0dpq`UbmS~lvXhgn*Ik2wwv.LgG=m/V% V`BE1O5ws=t<]U_Jd|k');
define('NONCE_KEY',        '0b lvtP~}`dJY|NXNT={NT^zrN5#|I77obW{ H*Mv&#4?#83,m?GdW8d+Hz|#hU+');
define('AUTH_SALT',        's|2gYPS4[Z21BI(]4d>gU57%p3S87x*(8-JH7;@y-4dpEXSAwr3SpdP}7zi+@NE@');
define('SECURE_AUTH_SALT', '`]8Z&HobN.z4EfhvUW@ZA3Hh]!CSZbhsS=`Nh{odEM.`~<v]ML|~ev[g| prnl|l');
define('LOGGED_IN_SALT',   '&JMY-~10l<F!)s>aFEs_pjq$69X,Su|ytW0D[WVR`0},&+(8A|-bu$cLgPNy9WPi');
define('NONCE_SALT',       '=VTS!FA~4(%el@=DW?R/FNHzI]XU4jr<./-~^hAi`]S=-$Qm7*QDsfs@KoL*+*LF');

$table_prefix  = 'wp_';
define('WPLANG', 'pt_BR');

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
require_once(ABSPATH . 'wp-settings.php');