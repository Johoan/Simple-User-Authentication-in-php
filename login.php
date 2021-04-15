<?php


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

    if(isset($user) && $login_array['email'] == $user['email']  && $login_array['password'] == $user['password']){

        $_SESSION['login_user'] = $user;
        header('location: home.php');

    } else {
        echo "Invalid Input!";
    }

    /*echo "<pre>";
    print_r($user);
    echo "</pre>";
    */
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
                    <span><em>forgot password?</em></span>
                
                </fieldset>
                
        </form> 



    </body>


</html>
