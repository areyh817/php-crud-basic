<?php
include './db_conn.php';

$filtered = array(
  'id' => mysqli_real_escape_string($link, $_POST['id']),
  'name' => mysqli_real_escape_string($link, $_POST['name']),
  'java' => mysqli_real_escape_string($link, $_POST['java']),
  'spring' => mysqli_real_escape_string($link, $_POST['spring']),
  'db' => mysqli_real_escape_string($link, $_POST['db']),
  'react' => mysqli_real_escape_string($link, $_POST['react'])
);

$sql ="
  UPDATE gradeinfo
  SET
    name='{$filtered['name']}',
    java='{$filtered['java']}',
    spring='{$filtered['spring']}',
    sql='{$filtered['db']}',
    react='{$filtered['react']}'
  WHERE
    id='{$filtered['id']}';
";

$result = mysqli_query($link, $sql);

if (result === false) {
  echo "저장하는 과정에서 문제가 생겼습니다.";
} else {
  header('Location: read.php');
}
?>