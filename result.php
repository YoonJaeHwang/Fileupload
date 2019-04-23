<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($password == "cat flag"){
        echo "flag is hi";
    } else {
        echo "error";
    }
   ?>
</body>
</html>
