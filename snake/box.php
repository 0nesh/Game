<?php
  $query = mysqli_query($con, "SELECT * FROM games WHERE idGame = 4");
  $row = mysqli_fetch_array($query);
  $id = $row['idGame'];
  ?>
  <h2>Game: <?=$row['name']?></h2>
  <h3>Cách Chơi</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A repudiandae explicabo quasi deserunt esse, voluptatem quos non, dicta, sint illum provident adipisci laudantium et amet doloribus officia porro fugit, aut!</p>

    <?php
    $scGame = $_POST['scGame'];
    echo "test".$scGame;
    $name = $_POST['player'];
    
    $sql = "INSERT INTO player(idGame, namePlayer, score) VALUES('".$id."', N'".$name."', '".$scGame."' )";
    if(isset($_POST['btnSubmit'])){
      if(!empty($name)){
        mysqli_query($con, $sql);
      } else {
        echo "<script>alert('Nhập Tên Người Chơi');</script>";
      }      
      //echo $dmm;
    }
      
    ?>
  <form method="POST">
    <h3>Tên Người Chơi:</h3><input type="text" name="player" value="<?php echo $name; ?>">
    <h3>Điểm: </h3><p id="score" name="score">0</p>
    <h3>Điểm Cao: </h3>
    <input type="text" id="scGame" name="scGame" disabled="">
    <button type="submit" name="btnSubmit">Lưu Điểm</button>
    

    <table border="1">
      <tr>
        <td>Người Chơi</td>
        <td>Điểm</td>       
      </tr>
      <?php
      $sql1 = mysqli_query($con, "SELECT * FROM player WHERE idGame = 4 ORDER BY score DESC LIMIT 0,5 ");
      while($row1=mysqli_fetch_array($sql1)){
      ?>
      <tr>
        <td><?=$row1['namePlayer']?></td>
        <td><?=$row1['score']?></td>
      </tr>
      <?php } ?>
    </table>
  </form> 