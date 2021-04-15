<?php
session_start();

?>

<!Doctype html>

<html>

<body>

<h1> My Home Page</h1>

<button><a href="login.php" style="text-decoration: none;">Logout</a></button>

<?php

    function logout(){
        session_destroy();
        header('location:login.php');
    }

    if(isset($_GET["action"]) && $_GET["action"] == "logout"){

        logout();
    }

?>

</body>

</html>
