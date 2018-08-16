<?php
session_start();
if(isset( $_SESSION['completedft'])){
	unset($_SESSION['completedft']);
    header("Location: https://www.updatraining.com/fluid-mechanics/");
	 exit();
 }else{
?>
 <html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
<h1><center>Fluid Mechanics Theory-1</h1>
</br></br>
 <?php
echo "<form action='https://www.updatraining.com/wp-admin/fluid-theory-mock-result.php' method='post'>";
$link = mysqli_connect("localhost", "nirupan_admin", "niru@2089", "nirupan_updamech");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql       = "(SELECT QuestionId,Question,Option1,Option2,Option3,Answer FROM fluid_theory where
QuestionId BETWEEN 4001 and 4016)";
$question  = mysqli_query($link, $sql);
$x         = 0;
$j         = 1;
$y         = 1;
$random_id = array();
while ($row = mysqli_fetch_assoc($question)) {
  
        $random_id[$y] = $row['QuestionId'];
        echo "$j";
        echo "&#46;";
        echo $row['Question'] . '?<br />';
        echo '<input type="radio" name="a' . $x . '" value=1 />' . $row['Option1'] . '<br />';
        echo '<input type="radio" name="a' . $x . '" value=2 />' . $row['Option2'] . '<br />';
        echo '<input type="radio" name="a' . $x . '" value=3 />' . $row['Option3'] . '<br />';
        echo "</br>";
        $x++;
        $j++;
        $y++;
        
    
}


$_SESSION['random'] = $random_id;
echo "<center><input type='submit' name='submit' value='Submit' />";
echo "</br>";
echo "</br>";

echo "</form>";
mysqli_close($link);
 }
?>
	</div>
</html>
