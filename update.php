<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="container">
            <form action="update.php" method="post">
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">national_code2</label>
                    <input type="text" class="form-control" name="national_code2">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">national_code</label>
                    <input type="text" class="form-control" name="national_code">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">age</label>
                    <input type="text" class="form-control"  name="age">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">blood_type</label>
                    <input type="text" class="form-control" name="blood_type">
                </div>
                <div><select class="form-select form-select" name="gender">
                        <option>male</option>
                        <option>female</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">update</button>
                <br>
            </form>

</div>


</body>
</html>
<?php

extract($_REQUEST , EXTR_PREFIX_SAME , "dup");

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=blood_managment", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = $conn->prepare("UPDATE user_bloods
                           SET age = ?,
                               gender = ?,
                               national_code = ?,
                               blood_type = ?
                           WHERE national_code = ?");
  
      $sql->bindParam(1, $age);
      $sql->bindParam(2, $gender);
      $sql->bindParam(3, $national_code);
      $sql->bindParam(4, $blood_type);
      $sql->bindParam(5, $national_code2);
      $sql->execute();
  
    echo "record updated successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }


//update user

