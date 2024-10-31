<?php
    session_start();

    $_SESSION["dinero"] = $_SESSION["dinero"] + $_GET["dinero_extra"];
    header("Location: 01.php");
?>