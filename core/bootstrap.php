<?PHP

$app = [];



$app['config'] = require 'config.php';




require 'core/database/Conection.php';

require 'core/database/QueryBilder.php';
require 'core/Router.php';
require 'core/Request.php';


$app['query'] = new QueryBilder(
    Conection::make($app['config']['database'])
);
