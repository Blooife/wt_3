<?php
require_once 'vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('templates'); // указание папки с шаблонами
$twig = new \Twig\Environment($loader);


$title = "To begin";
$url = 'to-begin.html.twig';
$style = "To-begin.css";
$poses = [
    [
        'src'=> 'images/child.jpg',
        'name' => 'Child\'s Pose',
        'text' => 'This calming pose is a good default pause position. You can use child’s pose to rest and 
        refocus before continuing to your next pose. It gently stretches your lower back, hips, thighs, knees 
        and ankles and relaxes your spine, shoulders and neck.'
    ],[
        'src'=> 'images/tree.jpg',
        'name' => 'Tree Pose',
        'text' => 'Beyond helping improve your balance, it can also strengthen your core, ankles, calves, thighs 
            and spine.'
    ], [
        'src'=> 'images/plank.jpg',
        'name' => 'Plank Pose',
        'text' => 'A commonly seen exercise, plank helps build strength in the core, shoulders, arms and legs.'
    ], [
        'src'=> 'images/triangle.jpg',
        'name' => 'Triangle Pose',
        'text' => 'Triangle, which is a part of many yoga sequences helps build strength in the legs and 
            stretches the hips, spine, chest, shoulders, groins, hamstrings and calves.'
    ],[
        'src'=> 'images/bridge.jpg',
        'name' => 'Bridge Pose',
        'text' => 'This is a back-bending pose that stretches the muscles of the chest, back and neck. 
            It also builds strength in the back and hamstring muscles.'
    ],[
        'src'=> 'images/dog.jpg',
        'name' => 'Downward-Facing Dog',
        'text' => 'Downward-facing dog strengthens the arms, shoulders and back while stretching the hamstrings, 
            calves and arches of your feet. It can also help relieve back pain.'
    ]
];

echo $twig->render("base.html.twig", [
    'title' =>$title,
    'url' =>$url, 'style' =>$style, 'poses'=>$poses
]);



