<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "000000";
    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error) {
      die("연결 실패: " . $conn->connect_error);
    }
    echo "연결 성공";
  ?>
</body>
</html>
