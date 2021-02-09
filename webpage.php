<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

    
$con= mysqli_connect('localhost','root', '');
mysqli_select_db($con,'student');

$name   = $_POST['name'];
$user   = $_POST['username'];
$pass   = $_POST['password'];
$email  = $_POST['email'];

$name = stripcslashes($name);
$user = stripcslashes($user);
$pass = stripcslashes($pass);
$email = stripcslashes($email);

$name = mysql_real_escape_string($name);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);
$email = mysql_real_escape_string($email);

$s= "select * from reg_sc where UserName = '$user'";

$result = mysqli_query($con, $s);
$num    = mysqli_num_rows($result);

if($num==1) {
    echo "Username already exists";
}

else {
    $reg    = "insert into reg_sc(Name,UserName,PassWord,Email) values('$name', '$user', '$pass', '$email')";
    mysqli_query($con, $reg);
    echo "Registration successful";
}




?>