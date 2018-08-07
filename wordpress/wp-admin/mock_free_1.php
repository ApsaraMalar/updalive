<?php
session_start();
?>
 <html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
<h1><center>Mock Free Test 1</h1>
</br></br>
 <?php
echo "<form action='http://localhost/mocklocal/wordpress/wp-admin/mock_result.php' method='post'>";
$link = mysqli_connect("localhost", "root", "", "updamock");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql       = "(SELECT QuestionId,Question,Option1,Option2,Option3,Option4,correct,null as Solution FROM mock_1 
ORDER BY RAND() LIMIT 2) UNION (select QuestionId,Question,Option1,Option2,Option3,Option4,
correct,Solution from mock_explanation ORDER BY RAND() LIMIT 2)";
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
        echo $row['Question'] . '?<br />';
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

?>
	</div>
</html>
