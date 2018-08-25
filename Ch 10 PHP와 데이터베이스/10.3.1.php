<!--데이터베이스 연결하기-->
<!DOCTYPE html>
<html>
<body>
  <?php
    $servername = "localhost";          // MySQL이 설치된 컴퓨터 주소                                     
    $username = "root";                 // MySQL 사용자 계정
    $password = "password";             // MySQL 사용자 암호
    $dbname = "test";                   // MySQL의 데이터베이스

    $conn = new mysqli($servername, $username, $password, $dbname);     // MySQL 서버와 연결 만들기
    if($conn->connect_error) {                                          // 연결 상태 확인
      die("연결 실패: " . $conn->connect_error);
    }

    echo "연결 성공";
    
    // 연결 끊기
    $conn->close();
    ?>
</body>
</html>