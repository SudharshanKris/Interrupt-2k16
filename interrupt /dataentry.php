<?php
  require_once('dbConnect.php');
  $sql = dbConnect();
  $pic = $_POST['pic'];
  $hint = $_POST['hint'];
  $answer = $_POST['answer'];
  $level = $_POST['level'];
  
  mysqli_query($sql,"INSERT into connection.conn_quesion (`pic`, `hint`, `answer`, `level`) VALUES ('$pic','$hint','$answer','$level') " );




 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Entry </title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  </head>
  <body >
    <div class="container">
    <strong> <h1> Form -Data Entry.</h1> </strong>
     <form class="" action="dataentry.php" method="post">
       <div class="form-group">
          <label for="pic">Picture Name</label>
          <input type="text" class="form-control" id="pic" placeholder="Pic Name" name="pic">
        </div>
        <div class="form-group">
           <label for="hint">Hint</label>
           <input type="text" class="form-control" id="hint" placeholder="Hint" name="hint">
         </div>
         <div class="form-group">
            <label for="answer">Answer</label>
            <input type="text" class="form-control" id="answer" placeholder="Answer" name="answer">
          </div>
          <div class="form-group">
             <label for="level">Level</label>
             <input type="number" class="form-control" id="level" placeholder="Level" name="level">
           </div>
           <button type="submit" class="btn btn-default">Submit</button>
     </form>
   </div>
  </body>
</html>
