<?
ini_set('display_errors', 'on');
error_reporting(E_ALL);

define('ACCESS_TOKEN', 'YOUR_ACCESS_TOKEN_HERE');
define('API', 'https://api.spark.io/v1');

$url = API.str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']).'?access_token='.ACCESS_TOKEN;

$ctx = stream_context_create(array(
	'http' => array(
		'method' => $_SERVER['REQUEST_METHOD']
	)
));

header('Content-type: application/json');
echo file_get_contents($url, 0, $ctx);
?>
