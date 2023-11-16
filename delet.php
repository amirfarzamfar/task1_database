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
<form action="delet.php">
    <div class="mb-3 mt-3">
        <label for="number" class="form-label">national_code</label>
        <input type="number" class="form-control" name="national_code">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

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
  
    $sql = $conn->prepare("DELETE FROM user_bloods
                         
                           WHERE national_code = ?");
  
      $sql->bindParam(1, $national_code);
      $sql->execute();
  
    echo "record updated successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
