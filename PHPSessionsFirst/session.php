<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "GOT: ".$_POST["usr"].", ".$_POST["psw"];
        session_start();
        if ($_POST["usr"] == "admin" && $_POST["psw"] == "admin"){
            $_SESSION["usr"] = $_POST["usr"];
            $_SESSION["psw"] = $_POST["psw"];
        }

        if (isset($_SESSION["usr"])){
            $user = $_SESSION["usr"];
            $password = $_SESSION["psw"];
            echo "<br><br>LOGGED IN: ".$user." PASS: ".$password;
            echo "<form action='' method='get'><input type='submit' name='logout' value='logout'></form>";
            if(isset($_GET["logout"])){
                session_unset();
                session_destroy();
                //header("Location: http://localhost:8081/PHPSessionsFirst/index.php");
            }
        }
        else{
            echo "<br><br>Unauthorised user";
            echo "<form action='' method='get'><input type='submit' name='back' value='back'></form>";
            if(isset($_GET["back"])){
                session_unset();
                session_destroy();
                header("Location: http://localhost:8081/PHPSessionsFirst/index.php");
            }
        }
    ?>
</body>
</html>