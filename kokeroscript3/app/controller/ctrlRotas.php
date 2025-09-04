<?php

$uri = $_GET["uri"] ?? '';

ob_clean(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);


$routes = [
    'index'     => [ 'path'=> __DIR__ . '/../../public/index.php', 'login'=>false, 'nivelAcesso'=>0 ],
    'main'      => [ 'path'=> __DIR__ . '/../view/main.php',       'login'=>true,  'nivelAcesso'=>1 ],
    'homeAdmin' => [ 'path'=> __DIR__ . '/../view/homeAdmin.php',  'login'=>true,  'nivelAcesso'=>5 ]
];


foreach ($_GET as $key => $value) {
    $_GET[$key] = addslashes($value);
}

foreach ($_POST as $key => $value) {
    $_POST[$key] = addslashes($value);
}

    if ( !isset($routes[$uri]) || $uri == '' || $uri == NULL){
    $route = $routes['index'];
    getFile($route['path']);
}else{

    if (str_starts_with($uri, "public/")) {
    getFile($uri);
    
} else {
    if ( $route['login'] == true ){
        session_start();
        if( $route['nivelAcesso'] == $_SESSION['nivelAcesso']){
            getFile($uri);
        }else{
            die("Error 404 - Not Found");
        }
    }else{
        getFile($uri);
     }
    }
}




function getFile( $uri ){
    $fileExtension = strtolower(pathinfo($uri, PATHINFO_EXTENSION));
    if ($fileExtension == 'php' || $fileExtension == 'html' || $fileExtension == 'css' || $fileExtension == 'js' || $fileExtension == 'json') {
        require $uri;
    } else {
        ob_clean();
        switch ($fileExtension) {
            case 'txt':     header('Content-Type: text/plain');         break;
            case 'jpeg':    header('Content-Type: image/jpeg');         break;
            case 'jpg':     header('Content-Type: image/jpeg');         break;
            case 'png':    header('Content-Type: image/png');          break;
            case 'gif':     header('Content-Type: image/gif');          break;
            case 'json':    header('Content-Type: application/json');   break;
            case 'xml':     header('Content-Type: application/xml');    break;
            case 'pdf':     header('Content-Type: application/pdf');    break;
            case 'mp3':     header('Content-Type: audio/mpeg');         break;
            case 'mp4':     header('Content-Type: video/mp4');          break;
            default:        header('application/octet-stream');         break;
        }
        readfile($uri);
    }
}
