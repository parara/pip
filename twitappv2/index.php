<?php
//include_once "lock.php";
include "inc/config.php";

session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select username from admin where username='$user_check'");
$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];
if(!isset($login_session)) {
  header('location:login.php');
}

$mod = $_GET['mod'];  
  switch($mod){
    case "home" :
    $view = "utama/home.php";
    break;
    
    case "pengaduan" :
    $view = "utama/pengaduan.php";
    break;
    
    case "verifikasi" :
    $view = "utama/verifikasi.php";
    break;

    case "pengecekan" :
    $view = "utama/pengecekan.php";
    break;

    case "pembahasan" :
    $view = "utama/pembahasan.php";
    break;

    case "jawaban" :
    $view = "utama/jawaban.php";
    break;

    case "editor" :
    $view = "utama/editor.php";
    break;

    case "pengaturan" :
    $view = "utama/pengaturan.php";
    break;

    case "pengaturan_surel" :
    $view = "utama/pengaturan_surel.php";
    break;
}
    include $view;

if(empty($_GET['mod'])){
  header("location:?mod=home");
}
?>