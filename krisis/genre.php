<?php
session_start();

    $_SESSION["genre"]=$_GET["result"];

header("Location: genreresult.php");