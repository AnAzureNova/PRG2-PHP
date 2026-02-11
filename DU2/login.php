<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php
    session_start();
    include "../DU2/comps/staticdata.php";
    function loginCheck($currUsr, $currPass): bool{
        $userKey = "user.".$currUsr;
        if (isset($_SESSION[$userKey])) {
            $user = unserialize($_SESSION[$userKey]);
            if ($user->password === $currPass) {
                $_SESSION["isLoggedIn"] = 1;
                $_SESSION["currentuser"] = $_SESSION[$userKey];
                return true;
            }
            else{
                echo "BAD SECRETS";
                return false;
            }
        }
        else{
            echo "USR NOT FOUND";
            return false;
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (!empty($_POST["userLogin"]) && !empty($_POST["passwordLogin"])){
            $canLog = loginCheck($_POST["userLogin"], $_POST["passwordLogin"]);
            if ($canLog){
                header("Location: index.php");
            }
        }
    }
    ?>
    <div>
        <h1>LOGIN</h1>
        <form method="post" action="">
            <h3>USERNAME</h3>
            <input type="text" placeholder="Enter your username" id="userLogin" name="userLogin" required>
            <h3>PASSWORD</h3>
            <input type="password" placeholder="Enter your password" id="passwordLogin" name="passwordLogin" required>

            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>