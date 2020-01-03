<?php include'../connection.php';
error_reporting(0); ?>

<html>
  <head>
  <title></title>
  <html lang="en">
    <script src="snake.js"></script>
    <script src="game.js"></script>
    <script type='text/javascript'>
    window.onload = function()
    {
        var game = new Game("canvas");
        game.init();
    }
    </script>
    <style type="text/css">
      body {
        width: 1200px;
        background-color: #EEE;
        margin-left: auto;
        margin-right: auto;
      }
      #container {
        background-color: white;
      }
      #box {
        padding: 10px;
        width: 300px;
        float: left;
      }
      #box2 {
        
        float: left;

      }
      #box3 {
        width: 400px;
        height: 401px;
        border: 1px solid black;
        margin-left: 10px;
        float: left;

      }
    </style>
  </head>
 
  <body>
    
  <div id="container">
  <div id="box">
  <?php include'box.php'; ?>
  </div>
  
  <div id="box2">
  <canvas id="canvas" tabindex="0" style="margin:0px; border: 1px solid"> </canvas>
  </div>

  <div id="box3">
  <?php include'box3.php'; ?>
  </div>
  
  </body>
</html>