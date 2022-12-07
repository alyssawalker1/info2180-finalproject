<?php

$host = 'localhost';
$dbname = 'dolphin_crm';
$username = 'admin@project2.com';
$password = 'password123';

try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    
    //echo "Connection to $dbname at $host successfully.";
    session_start();

    $firstname = $_POST('firstname');
    $lastname = $_POST('lastname');
    $email = $_POST('email');
    $pword = $_POST('password');
    $role = $_POST('role');

    if(isset($firstname) && isset($_POST['lastname']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['role'])){

        $firstname = htmlspecialchars(filter_input(INPUT_GET, $firstname, FILTER_SANITIZE_STRING));
        $lastname = htmlspecialchars(filter_input(INPUT_GET, $lastname, FILTER_SANITIZE_STRING));
        $email = htmlspecialchars(filter_input(INPUT_GET, $email, FILTER_SANITIZE_STRING));
        $pword = password_hash(htmlspecialchars(filter_input(INPUT_GET, $pword, FILTER_SANITIZE_STRING)), PASSWORD_DEFAULT);
        $role = htmlspecialchars(filter_input(INPUT_GET, $role, FILTER_SANITIZE_STRING));

        $stmt = $conn ->prepare("INSERT INTO users (first_name, last_name, email, pass_word, role, created_at) VALUES(null,null,null,null,null,null)");
        $stmt->execute([$firstname, $lastname, $email, $pword, $role]);

        echo "alert('New user successfully created');";
    }else{
        echo "users not added";
    }

} catch (PDOException $e){
    die("could not connect to the database $dbname: ".$e->getMessage());
}