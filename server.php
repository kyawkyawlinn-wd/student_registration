<?php 

echo "<pre>";
var_dump($_POST);

echo "save to database";
header("Location:./register.php?success=Save new Student!");