<?php
session_start();

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

$login_array = [

    'email' => $email,
    'password' => $password
     
];

$login_handle = fopen('users.txt', 'r');

While(!feof($login_handle)) {

    $user = json_decode(fgets($login_handle), true);

    if($_SESSION($info_array["email"]) == $login_array['email']  && $_SESSION($info_array["password"]) == $login_array['password']){

        echo "Login Successful";

    } else {
        echo "invalid input";
    }
}
}
 
?>


<!DOCTYPE html>

<html>

    <body>

        <form action=""  method="post">
                
                <fieldset>
                
                    <legend>Login</legend>

                    <input type="email" name="email" required placeholder="email">
                    <br><br>
                    <input type="password" name="password" required placeholder="password">
                    <br><br>
                    <button type="submit" name="login">Login</button>
                    <br><br>
                    <span><em>forgot password</em></span>
                
                </fieldset>
                
        </form> 



    </body>


</html>