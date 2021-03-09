<?PHP


App::bind('config', require 'config.php');

App::bind('query', new QueryBilder(
    Conection::make(App::get('config')['database'])
));

function view($name, $data = null)
{
    if (!$data == null) {
        extract($data);
    }
    return require "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
