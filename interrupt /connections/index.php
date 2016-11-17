<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['id'])&& isset($_COOKIE['name'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['id'] = $_COOKIE['id'];
      $user_id=$_COOKIE['id'];
      $_SESSION['name'] = $_COOKIE['name'];
    }
  }
  if (!isset($_SESSION['email'])) {
    header("Location:../quizzler.php");
  }
?>
<?php require_once('Connections/database.php'); ?>
<?php
$sql = dbConnect();
$user_id=$_SESSION['id'];

if (isset($_SESSION['level'])){
if($_SESSION['level']>45){
  
    header("Location:../index.php");
}
$clevel=$_SESSION['level'];
}
else
{
  //$query="SELECT count(`id`) as `ids` FROM  `conn_user` WHERE  `id` =$user_id";
$query="SELECT `id` FROM  `conn_user` WHERE  `id` =$user_id";
  // echo $query;
  $data=mysqli_query($sql,$query);
  if (mysqli_num_rows($data)== 1) {
    $query="SELECT * FROM  `conn_user` WHERE  `id` =$user_id";
   // echo " query: ".$query;
    $data=mysqli_query($sql,$query);
    $row1 = mysqli_fetch_array($data);
    $_SESSION["level"]=$row1['clevel'];
    $_SESSION["x"]=$row1['cques'];
    
    
  }
  else{
  $query_Recordset2="INSERT INTO `conn_user` VALUES('$user_id',1,0,0,now())";
$Recordset2 = mysqli_query($sql,$query_Recordset2);
	$_SESSION["level"]=1;
	$_SESSION['x']=0;
  }
}

$query_Recordset3="SELECT * FROM  `conn_quesion` where level= ".$_SESSION['level'];
//echo " Query3: ".$query_Recordset3;
$Recordset3 = mysqli_query($sql,$query_Recordset3);
$img=array();
$answer=array();
$hint=array();
while($row = mysqli_fetch_array($Recordset3)){
    array_push($img,$row["pic"]);
    array_push($hint,$row["hint"]);
    array_push($answer,$row["answer"]); 

}
if(empty($img)){
echo "That's all for now, Please do comeback when the next set is posted!!! Keep tuning for SVCE Interrupt FB pages for updates... ";
 header("refresh:1;url=../index.php");
}
else{
$_SESSION['pic']=$img;
$_SESSION['answer']=$answer;
$_SESSION['hint']=$hint;

$_SESSION['answered'] = array(0,0,0,0,0);
header("refresh:1;url=home.php");
}
?>