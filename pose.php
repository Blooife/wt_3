<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$u = key($_GET);

$url = 'pose.html.twig';
$style = "style.css";
$steps = [];
$title = '';
$name = '';
$description = '';
$src = '';
if($u == 'child'){
    $title = "Child's Pose";
    $name = "Child's Pose";
    $description = "This should be your go-to pose whenever you need to rest for a moment during a yoga workout.";
    $src = 'child.jpg';
    $steps = ['Kneel on your hands and knees, with your hands in front of your shoulders and your knees about hip width apart, 
                            or wider if that is more comfortable and your big toes touching.',
        'As you exhale, lower your buttocks toward your heels as your torso rests on your thighs, or between your thighs, 
                            and your head rests on the floor or a block or cushion.',
        'Rest your arms alongside the thighs, palms facing up.',
        'Release the muscles around the spine and hips and take several slow breaths.'
    ];

}elseif ($u == 'tree'){
    $title = "Tree Pose";
    $name = "Tree Pose";
    $description = "This balancing pose is one of the most recognized poses in modern yoga.";
    $src = 'tree.jpg';
    $steps = ['Kneel on your hands and knees, with your hands in front of your shoulders and your knees about hip width apart, 
                            or wider if that is more comfortable and your big toes touching.',
        'As you exhale, lower your buttocks toward your heels as your torso rests on your thighs, or between your thighs, 
                            and your head rests on the floor or a block or cushion.',
        'Rest your arms alongside the thighs, palms facing up.',
        'Release the muscles around the spine and hips and take several slow breaths.'
    ];
}elseif ($u == 'plank'){
    $title = "Plank Pose";
    $name = "Plank Pose";
    $description = "This common pose can build strength in the core, shoulders, arms and legs.";
    $src = 'plank.jpg';
    $steps = ['Begin in Downward-Facing Dog pose.',
        'Inhale and shift forward until your body is in a straight line, shoulders 
        stacked over your wrists and heels above the balls of the feet.',
        'Exhale as you press down through your forearms and hands, gazing at the floor in front of you.',
        'Keep breathing steadily as you hold the pose for as long as you can, engaging the core muscles by drawing your navel into the body and toward your spine. 
        Keep your thighs lifted and your hips high, but don’t let your rear stick up too high.'
    ];
}elseif($u == 'triangle'){
    $title = "Triangle Pose";
    $name = "Triangle Pose";
    $description = "This pose can be found in many yoga sequences.";
    $src = 'triangle.jpg';
    $steps = ['Kneel on your hands and knees, with your hands in front of your shoulders and your knees about hip width apart, 
                            or wider if that is more comfortable and your big toes touching.',
        'As you exhale, lower your buttocks toward your heels as your torso rests on your thighs, or between your thighs, 
                            and your head rests on the floor or a block or cushion.',
        'Rest your arms alongside the thighs, palms facing up.',
        'Release the muscles around the spine and hips and take several slow breaths.'
    ];
}elseif ($u == 'bridge'){
    $title = "Bridge Pose";
    $name = "Bridge Pose";
    $description = "This is a back-bending pose that stretches the muscles of the chest, 
    back and neck. It also builds strength in the back and hamstring muscles.";
    $src = 'bridge.jpg';
    $steps = ['Kneel on your hands and knees, with your hands in front of your shoulders and your knees about hip width apart, 
                            or wider if that is more comfortable and your big toes touching.',
        'As you exhale, lower your buttocks toward your heels as your torso rests on your thighs, or between your thighs, 
                            and your head rests on the floor or a block or cushion.',
        'Rest your arms alongside the thighs, palms facing up.',
        'Release the muscles around the spine and hips and take several slow breaths.'
    ];
}elseif ($u == 'dog'){
    $title = "Downward-Facing Dog";
    $name = "Downward-Facing Dog";
    $description = "This is one of the most common yoga poses.";
    $src = 'dog.jpg';
    $steps = ['KStart on your hands and knees, with your hands shoulder-distance apart and 
        your knees under your hips, toes tucked.',
        'Inhale, press evenly into your palms and raise your knees off the ground..',
        'Lift your hips up and back, working to lengthen your spine. ',
        ' Exhale as you begin to straighten your legs as much as possible, heels reaching toward the ground.',
        ' Lift the shoulders away from the ears and flatten the shoulder blades on your back. Rotate your upper arms 
        down towards the floor. Firm your outer hips in toward the center.',
        'Keep inhaling and exhaling evenly as you hold the pose.'
    ];
}

echo $twig->render("base.html.twig", [
    'url' =>$url, 'style' =>$style,
    'steps' => $steps,
    'title' =>$title, 'name' => $name,
    'description' => $description, 'src' => $src
]);







