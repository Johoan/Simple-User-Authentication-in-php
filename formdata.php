<?php

session_start();

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    
    
    
    $info_array = [

        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $password,
         
    ];

    echo "Welcome " . $_POST['firstname']. "<br><br>";
    echo "Your email address is " . $_POST['email'] . "<br><br>";
    echo '<button><a href="login.php" style="text-decoration: none;">Login</a></button>';

    file_put_contents("users.txt", json_encode($info_array)."\r\n", FILE_APPEND);

}


 
?>

