<?php
include './db_conn.php';

$filtered = array(
  'id' => mysqli_real_escape_string($conn, $_POST['id']),
  'name' => mysqli_real_escape_string($conn, $_POST['name']),
  'java' => mysqli_real_escape_string($conn, $_POST['java']),
  'spring' => mysqli_real_escape_string($conn, $_POST['spring']),
  'db' => mysqli_real_escape_string($conn, $_POST['db']),
  'react' => mysqli_real_escape_string($conn, $_POST['react'])
);

$sql ="
  UPDATE score
  SET
    name='{$filtered['name']}',
    java='{$filtered['java']}',
    spring='{$filtered['spring']}',
    db='{$filtered['db']}',
    react='{$filtered['react']}'
  WHERE
    id='{$filtered['id']}';
";

// $result = mysqli_query($conn, $sql);

if ( !mysqli_query($conn, $sql) ){
  echo("쿼리오류 발생: " . mysqli_error($conn));

} else {
  header('Location: index.php');
}


if ($result === false) {
  echo "저장하는 과정에서 문제가 생겼습니다.";
} else {
  header('Location: read.php');
}
?>