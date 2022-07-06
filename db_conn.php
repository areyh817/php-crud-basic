<?php
$conn=mysqli_connect('localhost','root','123456','crud');
if($conn){
   echo "mysql database에 연결되었습니다";
}else{
   echo "mysql database에 연결 실패";
}
?>