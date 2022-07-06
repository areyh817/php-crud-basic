<?php
include './db_conn.php';
$sql = "SELECT * FROM score";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP_MySQL 연동</title>
    <style>
        a {
            text-decoration: none;
            color : #000;
        }
    </style>    
  </head>
  <body>
    <a href="index.php"><span>이전</span></a>
    <div>
      <table border="1" style="margin : 0 auto;">
        <tr style="background-color:#D8D8D8; text-align : center;">
          <td style="width : 70px;">이름</td>
          <td style="width : 70px;">JAVA</td>
          <td style="width : 70px;">Spring</td>
          <td style="width : 70px;">SQL</td>
          <td style="width : 70px;">React</td>
        </tr>
      <?php
        while ($row = mysqli_fetch_array($result)) {
          $filtered = array(
            'id' => htmlspecialchars($row['id']),
            'name' => htmlspecialchars($row['name']),
            'java' => htmlspecialchars($row['java']),
            'spring' => htmlspecialchars($row['spring']),
            'db' => htmlspecialchars($row['db']),
            'react' => htmlspecialchars($row['react']),
          );?>
        <tr style="text-align : center;">
          <td><?=$filtered['name']?></td>
          <td><?=$filtered['java']?></td>
          <td><?=$filtered['spring']?></td>
          <td><?=$filtered['db']?></td>
          <td><?=$filtered['react']?></td>

        </tr>
      <?php
       }
      ?>
      </table>
    </div>  