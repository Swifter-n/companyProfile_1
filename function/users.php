<?php
require_once "core/init.php";

function login_data($username, $password){
  global $db;
  $username = escape($username);
  $password = escape($password);
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  while($row = mysqli_fetch_assoc($query)):
  if($result = mysqli_query($db, $query)){
    if(mysqli_num_rows($result)!=0){
      return true;
    }else {
      return false;
    }
  }
}
endwhile;

function escape($data){
  global $db;
  $result =  mysqli_real_escape_string($db, $data);
  return $result;
}
 ?>
