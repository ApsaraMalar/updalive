<?php
session_start();
if((isset($_SESSION['completedic']))&&($_SESSION['completedic'] == "yes"))
{
unset($_SESSION['completedic']);
echo "<script>location='https://www.updatraining.com/ic-engines-compressors/'</script>";
}else{
?>
<html>
<style>
body{
font-size:20px;}
</style>
<body>
<h2><center><strong>IC Engines and Compressors Practice-1</h2></strong></br>
</br></br>
 <?php
echo "<form action='https://www.updatraining.com/wp-admin/ic-engine-mock-result.php' method='post'>";
$link = mysqli_connect("localhost", "nirupan_admin", "niru@2089", "nirupan_updamech");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql       = "(SELECT QuestionId,Question,Option1,Option2,Option3,Option4,Answer FROM ic_engines where
QuestionId BETWEEN 7001 and 7025)";
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
        echo '<input type="radio" name="a' . $x . '" value=4 />' . $row['Option4'] . '<br />';
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
</body>
</html>
