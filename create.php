<meta charset="UTF-8">
<?php
include './db_conn.php';

$name = $_POST['name'];
$java = $_POST['java'];
$spring = $_POST['spring'];
$sql = $_POST['sql'];
$react = $_POST['react'];


$sql="insert into score(name,java,spring,db,react)values('$name','$java','$spring','$sql','$react')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.html'; alert('CREATE 완료');</script>"); 

?>