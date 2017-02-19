<?php
session_start(); 
require_once('includes/connection.php');
$r= mysql_query("SELECT username,admin,tenant,manager FROM Users where username='$_POST[username]'  and password='$_POST[password]'") or die(mysql_error());
 if(mysql_num_rows($r)!=1){
     header('location:index.php'); 
     
}     
else{
$row = mysql_fetch_row($r);
$_SESSION['user'] = $row[0];
  if($row[1]==1)
{
     header('location:../DB/admin.php'); 
}
  if($row[2]==1)
{
     header('location:../DB/tenant.php'); 
}
  if($row[3]==1)
{
     header('location:../DB/manager.php');  
} 
}
?>