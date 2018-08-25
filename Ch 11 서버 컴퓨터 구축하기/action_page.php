<!DOCTYPE html>
<html>
<body>

<?php
  if(!empty($_POST['fruits'])) {
    foreach ($_POST['fruits'] as $key) {
      echo $key;
    }
  }
?>

</body>
</html>
