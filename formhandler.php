<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $age = htmlspecialchars($_POST["age"]);

    echo "this is you data you submitted";
    echo "<br>";
    echo "firstname: ";
    echo $firstname;
    echo "<br>";
    echo "lastname: ";
    echo $lastname;
    echo "<br>";
    echo "age: ";
    echo $age;

    
   
    

}else{header("location: ../includes/index.php");}