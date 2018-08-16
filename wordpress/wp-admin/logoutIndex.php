<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
	
	 <a href="userAccount.php?logoutSubmit=1" class="logout">LOGOUT</a>
	</br>

<?php
	header("Location:mocklocal/wordpress/");
	die();

?>
	 
    <?php }else{ ?>
	
    <?php }
	?>

</body>
</html>
