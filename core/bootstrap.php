<?PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

App::bind('config', require 'config.php');

App::bind('query', new QueryBilder(
    Conection::make(App::get('config')['database'])
));
