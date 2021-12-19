<?php
session_start();

if (isset($_POST["uname"])) {
    $_SESSION["uname"] = $_POST["uname"];
}
if (isset($_POST["uname"])) {
    setcookie("uname",$_POST["uname"]);
    setcookie("pw",$_POST["pw"]);
}
else {
    setcookie("uname","",time() - 3600);
    setcookie("pw","",time() - 3600);
}

header('Location: homeView.php');