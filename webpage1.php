<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$user   = $_POST['username'];
$pass   = $_POST['password'];

$user = stripcslashes($user);
$pass = stripcslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);
    
mysql_connect('localhost','root', "");
mysql_select_db("student");

$result = mysql_query("select * from reg_sc where UserName='$user' && PassWord='$pass'")
or die(mysql_error());
$row = mysql_fetch_array($result);

if($row['UserName']==$user && $row['PassWord']==$pass){
    header('location:Admin.php');
}

else {
    
    echo "wrong password";
    
}




?>

