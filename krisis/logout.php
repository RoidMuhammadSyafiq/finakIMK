<?php
session_start();
unset($_SESSION["uname"]);
header('Location: homeView.php');