<?php
require_once 'vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$title = "History of yoga";
$template = 'history.html.twig';
$style = "History.css";
$branches = [
    [
        'name' => 'Hatha yoga',
        'description' =>'This is the physical and mental branch that aims to prime the body and mind.'
    ],
    [
        'name' => 'Raja yoga',
        'description' =>'This branch involves meditation and strict adherence to a series of disciplinary steps known as the eight limbs of yoga.'
    ],
    [
        'name' => 'Karma yoga',
        'description' =>'This is a path of service that aims to create a future free from negativity and selfishness.'
    ],
    [
        'name' => 'Bhakti yoga',
        'description' =>'This aims to establish the path of devotion, a positive way to channel emotions and cultivate acceptance and tolerance.'
    ],
    [
        'name' => 'Jnana yoga',
        'description' =>'This branch of yoga is about wisdom, the path of the scholar, and developing the intellect through study.'
    ],
    [
        'name' => 'Tantra yoga',
        'description' =>'This is the pathway of ritual, ceremony, or consummation of a relationship.'
    ],
];

echo $twig->render("base.html.twig", [
    'title' =>$title,
    'template' =>$template, 'style' =>$style,
    'elements' => $branches,
]);