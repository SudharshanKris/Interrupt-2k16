<?php
error_reporting(0);
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors',1);
//ini_set('html_errors', 1);
require_once('Connections/database.php');
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
    header("Location:../index.php");
  }
  $user_id=$_SESSION['id'];
if (isset($_SESSION['level'])){
if($_SESSION['x']<5){
header("Location:index.php");
}
$_SESSION['level']=$_SESSION['level']+1;
$_SESSION['x']=0;
$cques=$_SESSION['x'];
$clevel=$_SESSION['level'];
if($clevel>45){
echo "That's all for now, Please do comeback when the next set is posted!!! Keep tuning for SVCE Interrupt FB pages for updates... ";
}else{
echo "Entering level ".$_SESSION['level'];
}
}
else{
if($_SESSION['x']<5){
header("Location:index.php");
}
  $query="SELECT `id` FROM  `conn_user` WHERE  `id` =$user_id";
  // echo $query;
  $result=mysqli_query($sql,$query);
  $flag=mysqli_fetch_assoc($result);
   if($flag['ids']==1)
  {
    $query="SELECT * FROM  `conn_user` WHERE  `id` =$user_id";
    //echo $query;
    $result=mysqli_query($sql,$query);
    $row1=mysqli_fetch_array($result);
    $_SESSION["level"]=$row1['clevel'];
    $_SESSION["x"]=$row1['cques'];
  }
 
}

$query_Recordset3="SELECT * FROM  `conn_quesion` where level= ".$_SESSION['level'];
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
 header("refresh:1;url=index.php");
}
else{
$_SESSION['pic']=$img;
$_SESSION['answer']=$answer;
$_SESSION['hint']=$hint;

$_SESSION['answered'] = array(0,0,0,0,0);
header("refresh:1;url=home.php");
}
?>