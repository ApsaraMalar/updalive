<?php
session_start(); 
$link = mysqli_connect("localhost", "nirupan_admin", "niru@2089", "nirupan_updamech");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$login_id = $_SESSION['loginID'];
$sql_login="UPDATE users SET updatedTimestamp= NOW() where id = '$login_id' ";
$upd=mysqli_query($link, $sql_login); 
session_destroy(); 
header("Location: https://www.updatraining.com/"); 
?>