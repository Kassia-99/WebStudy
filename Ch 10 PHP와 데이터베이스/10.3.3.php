<!DOCTYPE html>
<html>
<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) {
      die("연결 실패: " . $conn->connect_error);
    }

    $sql = "insert into MyGuests (firstname, lastname, email) values ('John', 'Doe', 'john@example.com')";
    $result = $conn->query($sql);

    if ($conn->query($sql)) {
      echo "데이터 추가 성공";
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  ?>
</body>
</html>
