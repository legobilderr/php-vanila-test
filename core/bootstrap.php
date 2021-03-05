<?PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$app = [];



$app['config'] = require 'config.php';




require 'core/database/Conection.php';

require 'core/database/QueryBilder.php';
require 'core/Router.php';
require 'core/Request.php';


$app['query'] = new QueryBilder(
    Conection::make($app['config']['database'])
);
