<?php

require_once dirname(__DIR__)."/vendor/autoload.php";

$root = dirname(__DIR__);

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$pathInfo = $request->getPathInfo();

//$f = new \Symfony\Component\Config\FileLocator(dirname(__DIR__)."/docs");
//$file = $f->locate('api.md');

$loader = new Twig_Loader_Filesystem($root."/resources/view");
$twig = new Twig_Environment($loader, array(
    //'cache' => $root."/cache",
));
$twig->enableDebug();

$yaml = new \Symfony\Component\Yaml\Yaml();
$menu = $yaml->parse(file_get_contents($root."/docs/map.yml"));
$location = findLocation($menu['side-menu'], $pathInfo);
//foreach($menu['side-menu'] as $item){
//    if(trim($pathInfo, '/') == trim($item['route'], '/') ){
//        $location = trim($item['location'], '/');
//    }
//}

if(null == $location){
    $location = $menu['side-menu'][0]['location'];
}
$res = \Michelf\MarkdownExtra::defaultTransform(file_get_contents($root."/docs/".$location));


echo $twig->render('layout.html.twig', [
    "content" => $res,
    "topmenu" => $menu['top-menu'],
    "sidemenu" => $menu['side-menu'],
    "location" => $location
]);

function findLocation($menu, $route) {
    $location = null;
    foreach($menu as $item){
        if($item['children']) {
            $location = findLocation($item['children'], $route);
        }
        if(trim($route, '/') == trim($item['route'], '/') ){
            $location = trim($item['location'], '/');
        }
    }
    return $location;
}
