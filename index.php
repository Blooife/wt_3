<?php
require_once 'vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$title = "Yoga is for everyone";
$template = 'index.html.twig';
$style = "Main.css";

echo $twig->render("base.html.twig", [
    'title' =>$title,
    'template' =>$template, 'style' =>$style
]);





