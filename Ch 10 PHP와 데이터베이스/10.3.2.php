<!--데이터베이스 정보 찾기-->
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

    $sql = "select id, firstname, lastname from MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"];
        echo " " . $row["lastname"];
      }
    }
    else {
      echo "결과 없음";
    }
    $conn->close();
  ?>
</body>
</html>
