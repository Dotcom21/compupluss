<?php
session_start();
include 'assets/lib/config.php';

if(!isset($_SESSION['id'])){
    echo '<script>window.location="login.php"</script>';

}if(isset($_GET['cook'])){

    $new_cookie = $_GET['cook'];
    $new_redireccionar = $_GET['redireccionar'];
    $id_user = $_SESSION['id'];

    //seteo la cookie
    setcookie("USERCOOKIE", $id_user , time() + (60*60*24*365),'/','compuplustech.com',1); //por un año de session
    setcookie("TOKENCOOKIE", $new_cookie , time() + (60*60*24*365),'/','compuplustech.com',1); //por un año de session

    if(!isset($_GET['redireccionar'])){
        
        echo '<script>window.location="index.php?page=1"</script>';

    }else{
        echo '<script>window.location="'.$new_redireccionar.'"</script>';
    }

}else{
    echo '<script>window.location="index.php?page=1"</script>';
}
?>