<!DOCTYPE html>
<html>
<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "passward";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("연결 실패: " . $conn->connect_error)
    }
    echo "연결 성공";
    $conn->close();
  ?>
</body>
</html>
