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
  $dbname = "test";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
  }

  $sql = "insert into  Friends values (2, '김개똥', '010-2345-6789')";
  
  $conn->close();
  ?>
</body>
</html>
