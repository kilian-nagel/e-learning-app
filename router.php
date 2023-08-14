<?php
require_once "./src/views/components/navbar.php";
require_once "./src/views/components/footer.php";

$uri = $_SERVER["REQUEST_URI"];
$relativeUrl = "/e-learning-platform";

$routes = [
    "$relativeUrl/"=>["index.php","./src/views/landing.php"],
    "$relativeUrl/courses"=>["./src/views/courses.php"],
    "$relativeUrl/create"=>["./src/views/create.php"],
];

function abort($code = 404){
    require_once "./src/views/errors/$code.php";
    die();
}

$navbar = getNavbar($user);
$footer = getFooter();
$main = "";

if(array_key_exists($uri,$routes) && filesExist($routes[$uri])){   
    foreach ($routes[$uri] as $route){
        require_once "$route";
    }
    $main = getIndex();
} else {
    abort();
}

echo $navbar;
echo $main;
echo $footer;

function filesExist($files){
    $exist = true;
    foreach ($files as $file){
        if(!file_exists($file)) $exist = false;
    }
    return $exist;
}