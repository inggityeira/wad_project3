<?php
    $database = mysqli_connect ("localhost:3308", "root", "", "wad_project3");
    $result = mysqli_query ($database, "SELECT * FROM students");
    
    var_dump(mysqli_fetch_object($result));
    var_dump(mysqli_fetch_object($result));
?>