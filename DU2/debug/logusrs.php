<?php
    session_start();
    include "../comps/staticdata.php";
    echo "<h1>USER LOG</h1>";
    if (isset($_SESSION["currentuser"]) && $_SESSION["isLoggedIn"] === 1){
        foreach ($_SESSION as $key => $value) {
            if (strpos($key, "user.") === 0) {
                $user = unserialize($value);
                echo "<hr><strong>USER: ".$user->name."</strong><br>";
                echo "Email: ".$user->email;
                $currentuser = unserialize($_SESSION["currentuser"]);
                if ($currentuser->perms === "admin"){
                    echo "<br>Password: ".$user->password;
                    echo "<br>Permissions: ".$user->perms;
                }
            }
        }
    }
    else{
        echo "<strong>PERMISSION DENIED:</strong> Not logged in";
    }
?>
<hr>
<br><br>
<a href="../index.php">Back</a>