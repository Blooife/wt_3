<?php
require_once 'vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('templates'); // указание папки с шаблонами
$twig = new \Twig\Environment($loader);


$title = "Yoga is for everyone";
$url = 'index.html.twig';
$style = "Main.css";

echo $twig->render("base.html.twig", [
    'title' =>$title,
    'url' =>$url, 'style' =>$style
]);



