<?php
$url = explode("/", $_SERVER['REQUEST_URI']);

if ($url[1] === "rabraby") {    // Local Server
    $test = true;
    $local = "/rabraby/";
    $page = $url[2] ? $url[2] : "home";
    $lang = isset($url[3]) ? $url[3] : "hu";
}
else                            // Public Server
{
    $test = false;
    $local = "/";
    $page = $url[1] ? $url[1] : "home";
    $lang = isset($url[2]) ? $url[2] : "hu";
}


$json = file_get_contents('json/lang.json');
$lang_data = json_decode($json, JSON_OBJECT_AS_ARRAY);

if ($lang === "hu") {
    $lang_number = 1;
} else {
    $lang = "en";
    $lang_number = 2;
}
?>