<?php
include './db_conn.php';
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);

$sql ="
  DELETE FROM score
  WHERE id = {$filtered['id']};
";

$result = mysqli_query($conn, $sql);

if ($result===false) {
  echo '저장하는 과정에서 문제가 발생했습니다.';
} else {
  header('Location: index.php');
}
?>