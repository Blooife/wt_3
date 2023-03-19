<?php
function check($email) {
    if(preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,})$/i", $email)){
        return true;
    }else{
        return false;
    }
}


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$message = preg_replace('/(https?:\/\/(?!bsuir\.by)\S+)/', '#Внешние ссылки запрещены#', $message);

if($name != "" && $email != ""){

    if(check($email)){
        $file = 'email.txt';
        $data = $name . ', ' . $email . ', ' . $message . PHP_EOL;
        file_put_contents($file, $data, FILE_APPEND);
    }

    header('Location: index.php');
    exit();
}else{
    print "fill in all the fields";
}


