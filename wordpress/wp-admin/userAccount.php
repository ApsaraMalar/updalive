<?php
session_start();
//load and initialize user class
include 'user.php';
$user = new User();
if(isset($_POST['loginSubmit'])){
    //check whether login details are empty
    if(!empty($_POST['email']) && !empty($_POST['password'])){
    	 //get user data from user class
        $conditions['where'] = array(
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
        );
        $conditions['return_type'] = 'single';
        $userData = $user->getRows($conditions);
        //set user data and status based on login credentials
        if($userData){
			$SESSION['username'] = $userData['username'];
            $sessData['userLoggedIn'] = TRUE;
            $sessData['userID'] = $userData['id'];
			$sessData['username']=$userData['username'];
            $sessData['status']['type'] = 'success';
            $sessData['status']['msg'] = 'Welcome '.$userData['username'].'!';
			
			$link = mysqli_connect("localhost", "nirupan_admin", "niru@2089", "nirupan_updamech");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
			 $sql_query = "select count(*) as cntUser from users where username='".$userData['username']."' and password='".md5($_POST['password'])."'";
  $result = mysqli_query($link,$sql_query);
  $row = mysqli_fetch_array($result);

  $count = $row['cntUser'];

  if($count > 0){
	  
 $token = "";
 $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
 $codeAlphabet.= "0123456789";
 $max = strlen($codeAlphabet); // edited

 for ($i=0; $i < 10; $i++) {
  $token .= $codeAlphabet[rand(0, $max-1)];
 }
   
    $_SESSION['username'] = $userData['username'];
   $_SESSION['token'] = $token;
 $id_check=$userData['id'];

   // Update user token 
   $result_token = mysqli_query($link, "select count(*) as allcount from user_token where id= '$id_check'");
   
   $row_token = mysqli_fetch_assoc($result_token);
   if($row_token['allcount'] > 0){
    mysqli_query($link,"update user_token set token='".$token."' where username='".$userData['username']."'");
   }else{
    mysqli_query($link,"insert into user_token(id,username,token) values('".$userData['id']."','".$userData['username']."','".$token."')");
   }
   
  }
		}else{
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Wrong email or password, please try again.'; 
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Enter email and password.'; 
    }
    //store login status into the session
    $_SESSION['sessData'] = $sessData;
    //redirect to the home page
    header("Location:loginIndex.php");
}elseif(!empty($_REQUEST['logoutSubmit'])){
    //remove session data
    unset($_SESSION['sessData']);
    session_destroy();
    //store logout status into the ession
    $sessData['status']['type'] = 'success';
    $sessData['status']['msg'] = 'You have logout successfully from your account.';
    $_SESSION['sessData'] = $sessData;
    //redirect to the home page
    header("Location:loginIndex.php");
}
else{
    //redirect to the home page
    header("Location:loginIndex.php");
}