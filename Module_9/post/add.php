<?php

//With this file we include the database connection
include_once("config.php");

//isset() function determine if a variable is declared and is different from NULL
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, username, email) VALUES (:name, :username, :email)";

    $sqlQuery = $cobbected->prepare($sql);

    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':username', $username);
    $sqlQuery->bindParam(':email', $email);

    $sqlQuery->execute();

    echo "The user was added succesfully!";
}

?>