<?php
session_start();
if(isset( $_SESSION['completed1'])){
	unset($_SESSION['completed1']);
    header("Location: https://www.updatraining.com/mocknext/");
	 exit();
 }else{
?>
 <html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
<h1><center>Mock Test</h1>
</br></br>
 <?php
echo "<form action='https://www.updatraining.com/wp-admin/combomock-result.php' method='post'>";
$link = mysqli_connect("localhost", "nirupan_admin", "niru@2089", "nirupan_updamech");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql       = "(select QuestionId,Question,Option1,Option2,Option3,Option4,
Answer,null as Solution from pmp ORDER BY RAND() LIMIT 2) UNION (SELECT QuestionId,Question,Option1,Option2,Option3,Option4,Answer,
null as Solution FROM nfpa ORDER BY rand() LIMIT 4) UNION (SELECT QuestionId,Question,Option1,Option2,Option3,Option4,Answer,null 
as Solution FROM thermodynamics ORDER BY rand() LIMIT 4) UNION (SELECT QuestionId,Question,Option1,Option2,Option3,Option4,Answer,null 
as Solution FROM refrigeration ORDER BY rand() LIMIT 6) UNION (SELECT QuestionId,Question,Option1,Option2,Option3,Option4,Answer,null 
as Solution FROM mock_test ORDER BY rand() LIMIT 3) UNION (SELECT QuestionId,Question,Option1,Option2,Option3,Option4,Answer,
Solution FROM fluid_problems ORDER BY rand() LIMIT 2) UNION (SELECT QuestionId,Question,Option1,Option2,Option3,Option4,Answer,
null as Solution FROM gas_dynamics ORDER BY rand() LIMIT 4)";
$question  = mysqli_query($link, $sql);
$x         = 0;
$j         = 1;
$y         = 1;
$random_id = array();
while ($row = mysqli_fetch_assoc($question)) {
   if ($row['Solution'] == '' || is_null($row['Solution']) || !is_null($row['Solution'])) {
        $random_id[$y] = $row['QuestionId'];
        echo "$j";
        echo "&#46;";
		 if(is_null($row['Solution'])){
		 echo $row['Question'] . '?<br />';}
		 else{
			 echo"</br>";
			  echo '<img src="data:image/jpg;base64,'.base64_encode($row['Question'] ).'"/><br />';
		 }
        echo '<input type="radio" name="a' . $x . '" value=1 />' . $row['Option1'] . '<br />';
        echo '<input type="radio" name="a' . $x . '" value=2 />' . $row['Option2'] . '<br />';
        echo '<input type="radio" name="a' . $x . '" value=3 />' . $row['Option3'] . '<br />';
        echo '<input type="radio" name="a' . $x . '" value=4 />' . $row['Option4'] . '<br />';
        echo "</br>";
        $x++;
        $j++;
        $y++;
   }  
    
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