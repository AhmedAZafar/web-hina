<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $bussinessemail=$_POST['bussinessemail'];
  $pass=$_POST['password'];
  mysql_connect('localhost','root','');
  mysql_select_db('dream_events');
  $select=mysql_query("update user set password='$pass' where bussinessemail='$bussinessemail'");
}
?>