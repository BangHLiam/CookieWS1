<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select</title>
</head>
<body>
<?php

$lang = $_GET["language"];
  if(empty($_COOKIE["lang"])){
    setcookie("lang", $_GET["language"]);
  }

  if(isset($_COOKIE["lang"])){
    if($lang == "en"){
    }
    setcookie("lang", $_GET["language"]);
  }


  
  ?>
</form>
</body>
</html>