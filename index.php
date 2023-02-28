<?php 
set_include_path( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR );
require_once "php/back.php";
require_once "php/parts/begin.php";

// Variables
$browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // the language of browser (en)


// Main
if(isset($page))
{
    $file = "php/pages/". $page .".php";
}

if(is_file($file))
{
    require_once $file;
}
else
{
    require_once "php/pages/404.php";
}




require_once "php/parts/end.php";
?>