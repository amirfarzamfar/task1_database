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
<form action="server.php" method="post">
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">national_code</label>
        <input type="text" class="form-control" name="national_code">
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">blood_type</label>
        <input type="text" class="form-control"  name="blood_type">
    </div>
    <div class="mb-3 mt-3">
        <label for="text" class="form-label">age</label>
        <input type="number" class="form-control" name="age">
    </div>
    <div><select class="form-select form-select" name="gender">
            <option>male</option>
            <option>female</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br>

</form>

</body>
</html>