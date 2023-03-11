<?php
require_once 'vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$title = "History of yoga";
$url = 'history.html.twig';
$style = "History.css";

echo $twig->render("base.html.twig", [
    'title' =>$title,
    'url' =>$url, 'style' =>$style
]);