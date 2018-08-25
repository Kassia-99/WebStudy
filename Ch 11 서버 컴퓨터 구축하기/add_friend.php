<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    echo "번호: " . $id . "<br>";
    echo "이름: " . $name . "<br>";
    echo "전화: " . $phone . "<br>";
  ?>
</body>
</html>
