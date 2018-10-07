<?php
ob_start();
session_start();
$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData'] : '';
if (!empty($sessData['status']['msg'])) {
    $statusMsg     = $sessData['status']['msg'];
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
if (!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])) {
    include 'user.php';
    $user                      = new User();
    $conditions['where']       = array(
        'id' => $sessData['userID']
    );
    $conditions['return_type'] = 'single';
    $userData                  = $user->getRows($conditions);

$link = mysqli_connect("localhost", "nirupan_admin", "niru@2089", "nirupan_updamech");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$login_id= $sessData['userID'];
$username=$sessData['username'];
$token = $_SESSION['token'];
 $_SESSION['token'] = $token;
 
$_SESSION['loginID'] = $login_id;
$_SESSION['log'] = "yes";
$sql_login="UPDATE users SET updatedTimestamp= NOW() where id = '$login_id' ";
$upd=mysqli_query($link, $sql_login); 
header("Location: https://www.updatraining.com/welcomelogin");
exit();
} 
else {
?>
	<div class="container1">
    <h2><center>Login to Your Account</h2>
    <?php
    echo !empty($statusMsg) ? '<p class="' . $statusMsgType . '">' . $statusMsg . '</p>' : '';
?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        </form>
        <p><br/>Don't have an account?</br>
		<br>
		<button class="button" id="myBtn">Please Contact Us To Grab Your Login</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>
	<img src="https://www.updatraining.com/wp-content/themes/esol/images/mail.jpg" width="50" height="33">
	admin@updatraining.com</br></br>
	<img src="https://www.updatraining.com/wp-content/themes/esol/images/phone.jpg" width="50" height="33">
	+974-50255886</p>
  </div>

</div>
</p>
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>	
    </div>
	</div>
    <?php
}
?>

</body>
</html>
