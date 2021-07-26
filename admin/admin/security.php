<?php
require_once("connect.php");
date_default_timezone_set('Africa/Nairobi');
/*if (session_id() != ''){
//check if session has not timed out
  $last_activity=$_SESSION['last_activity_time'];
  $current_time=time();
  $dif=($current_time-$last_activity)/60;
  if($dif>20){//if the system has last been used 30 min ago
  session_destroy();
  echo '<META http-equiv="refresh" content="0,url=../login.php" />Loading...';
  return;
  }
}
//keep track of the session
if(!isset($_REQUEST['autopage'])){//if its not an automatic page load
$_SESSION['last_activity_time']=time();
//add page links
}*/
//function for cleaning inputs
function clean_data($data){
$data=trim($data);
$data=stripslashes($data);//
$data=mysql_real_escape_string($data);
//$data=htmlspecialchars($data);
return $data;
}
?>
