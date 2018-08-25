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

  $sql = "select FriendID, Name, Phone from Friends";
  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "번호:" . $row["FriendID"] . "<br>";
      echo "이름:" . $row["Name"] . "<br>";
      echo "전화:" . $row["Phone"] . "<br>";
    }
  }
  else {
    echo "결과 없음";
  }
  $conn->close();
  ?>
</body>
</html>
