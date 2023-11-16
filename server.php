<?php
extract($_REQUEST , EXTR_PREFIX_SAME , "dup");

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=blood_managment", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = $conn->prepare("INSERT INTO user_bloods (age , gender , national_code , blood_type)
  VALUES (? ,? ,? , ?)");

    $sql->bindParam(1, $age);
    $sql->bindParam(2, $gender);
    $sql->bindParam(3, $national_code);
    $sql->bindParam(4, $blood_type);
    $sql->execute();

  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
