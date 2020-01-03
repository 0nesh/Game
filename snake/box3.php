<?php
$name = $_POST['name'];
  if(isset($_POST['comment'])){
            if(empty($name)){
                        echo "<script>alert('Nhập Tên NGười CHơi Để Comment!');</script>";
                    }
                    else{
                      $content = $_POST['content-comment'];
                        $timeCMT = date('Y-m-d');
                        
                        if(isset($_POST['comment'])){
                          $sqlc = mysqli_query($con,"INSERT INTO comment VALUES('".$name."', '".$content."', '".$timeCMT."', 4)");
                        }
                    }
                   
                }
  ?>
  
<form method="POST">
  <input type="text" name="name">
  <h4>Viết Bình Luận...<i class="fa fa-pencil"></i></h4>
    <div class="form-group">
      <textarea class="form-control" rows="4" cols="50" name="content-comment"></textarea>
    </div>
    <div>
      <button class="btn btn-primary" name="comment">Comment</button>
    </div>
    <?php
        $sqlcm = mysqli_query($con,"SELECT * FROM comment WHERE idGame = '".$id."'");
      while ($result = mysqli_fetch_array($sqlcm)) {  
    ?>
    <div class="show-comment">  
  <table>   
    <tr>
      
      <td><h6><?= $result['timeCmt'] ?></h6></td>     
    </tr>
    <tr>
      <td><h5><?= $result['namePlayer'] ?> :  </h5></td>
      <div id="contentCMT"><td><p><?= $result['contentCmt'] ?></p></td></div>
    </tr>   
  </table>
    </div>
    <?php } ?>
 </form> 