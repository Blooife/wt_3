<?php
require_once 'vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$title = "History of yoga";
$template = 'history.html.twig';
$style = "History.css";

echo $twig->render("base.html.twig", [
    'title' =>$title,
    'template' =>$template, 'style' =>$style
]);