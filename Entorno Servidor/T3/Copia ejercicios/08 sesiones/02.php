<?php
    /*
        Se accede desde el 1
    */
    
    session_start();
    
    $_SESSION["dinero"] = 0;
    header("Location: 01.php");
?>