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
    <script type="text/javascript">
      function update(id, name, java, spring, db, react){
        document.getElementById("update_id").value = id;
        document.getElementById("update_name").value = name;
        document.getElementById("update_java").value = java;
        document.getElementById("update_spring").value = spring;
        document.getElementById("update_db").value = db;
        document.getElementById("update_react").value = react;
      }
    </script>
  </head>
  <body>
    <div>
      <table border="1" style="margin : 0 auto;">
        <tr style="background-color:#D8D8D8; text-align : center;">
          <td style="width : 70px;">이름</td>
          <td style="width : 70px;">JAVA</td>
          <td style="width : 70px;">Spring</td>
          <td style="width : 70px;">SQL</td>
          <td style="width : 70px;">React</td>
          <td style="width : 50px;">수정</td>
          <td style="width : 50px;">삭제</td>
          <td style="width : 50px;">추가</td>
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
          <td>
            <input type="button" name="" value="수정"
             onclick="update('<?=$filtered['id']?>', '<?=$filtered['name']?>',
             '<?=$filtered['java']?>', '<?=$filtered['spring']?>', '<?=$filtered['db']?>', '<?=$filtered['react']?>')" >
          </td>
          <td>
            <form class="" action="./process/process_delete.php" method="post">
              <input type="hidden" name="id" value="<?=$filtered['id']?>">
              <input type="submit" value="삭제">
            </form>
          </td>
          <td>
            <input type="submit" value="추가" onClick="localhot">
          </td>
        </tr>
      <?php
       }
      ?>
      </table>
    </div>  <!-- table div-->

    </table><!-- create update table -->
        <div style="border : 1px solid black; width : 350px; height : 180px; margin : 0 auto; margin-top:10px">
          <form class="" action="update.php" method="post">
          <table style="margin : 0 auto">
              <tr>
                <caption>성적 수정</caption>
                <input type="hidden" name="id" id="update_id" value=""/>
                  <tr>
                      <td>이름</td>
                      <td><input type="text" name="name" placeholder="이름입력" style="width:100px" id="update_name" value=""></td>
                  </tr>
                  <tr>
                      <td>Java</td>
                      <td><input type="text" name="java" placeholder="성적입력" style="width:100px" id="update_java" value=""></td>
                  </tr>
                  <tr>
                      <td>Spring</td>
                      <td><input type="text" name="spring" placeholder="성적입력" style="width:100px" id="update_spring" value=""></td>
                  </tr>
                  <tr>
                      <td>SQL</td>
                      <td><input type="text" name="db" placeholder="성적입력" style="width:100px" id="update_db" value=""></td>
                  </tr>
                  <tr>
                      <td>React</td>
                      <td><input type="text" name="react" placeholder="성적입력" style="width:100px" id="update_react" value=""></td>
                  </tr>
              </tr>
          </table>
            <div style="text-align : center;">
              <input type="submit" value="성적수정">
            </div>
          </form> <!-- form -->
        </div> <!-- grade update div -->
      </td> <!-- grade update td -->
    </tr>
  </table><!-- create update table -->
  </body>
</html>