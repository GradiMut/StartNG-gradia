<?php 

    // include('./error.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['msg'];

    try {
        if (isset($_POST['send'])) {
            $msg = "\nName : " . $name . "| Email : " . $email . "| Title : " . $title . "| Message : " . $message;

            $file = fopen("README.md", "a") or die("Unable to open file!");

            fwrite($file, $msg);

            fclose($file);

            echo "Your message has been sent!!";
        } else {
        echo "Error";
        }
    } catch(Exception $e) {
        echo $e;
    }
