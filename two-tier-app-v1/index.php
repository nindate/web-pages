<!DOCTYPE HTML>
<html>
<body>

<?php 
function get_server_name(){
  $server_name = shell_exec('uname -n');
  //$server_name = shell_exec('curl http://169.254.169.254/latest/meta-data/hostname');
  return $server_name;
}
$server_name = get_server_name();
echo "<h2>You are using My Contacts application on $server_name</h2>";
echo "<h3>version: v2.1</h3>";
?>

<?php
// Create connection
$con=mysqli_connect("localhost","user1","password","test2");

// Check connection
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Run query
$sql="select ID,FirstName,LastName,ContactNo,Comments from Persons order by ID desc limit 10;";
$result = mysqli_query($con,$sql);
if ($result) {
  echo "<br>";
} else {
  echo "Error running query: " . mysqli_error($con);
}

// Close connection
mysqli_close($con);

echo "<hr>";
echo "<h3>Current contacts: </h3>";
echo "<b>Latest 10 entries</b>";
echo "<form method='post' action='confirmdelete.php'>";
echo "<ul>";

$numrows=mysqli_num_rows($result);
if ($numrows == '0') {
echo "<span class='error'>*Presently there are no entries in the database</span>";
}

echo "<table border='1'>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Contact No</th><th>Comments</th><th></th></tr>";
while($row = mysqli_fetch_array($result)) {

  // echo "<li>";

  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td><td>" . $row['FirstName'] . "</td><td> " . $row['LastName'] . "</td><td>" . $row['ContactNo'] . "</td><td>" . $row['Comments'] . "</td>";

  $thisid=$row['ID'];

  echo "<td><input type='checkbox' name='checkboxvar[]' value='$thisid'>Delete</td>";
  echo "</tr>";

  // echo "</li>";

}
echo "</table>";
  echo "</ul>";
  echo "<input type='submit' name='Delete' value='Delete selected entries'>";
echo "</form>";

?>

<hr>
<br>
<p> <h3> Add new contact </h3> </p>
<p><span class="error">* required field.</span></p>

<form method='post' action='updatedb.php'>
   First Name:  <span class="error">* </span> <input type="text" name="firstname" value="<?php echo $firstname;?>">
   <?php echo $firstnameErr;?>
   Last Name: <span class="error">* </span> <input type="text" name="lastname" value="<?php echo $lastname;?>">
   <?php echo $lastnameErr;?></span>
   Contact No:  <span class="error">* </span> <input type="text" name="contactno" value="<?php echo $contactno;?>">
   <?php echo $ageErr;?></span>
   <br><br>Comments: <textarea name="comment" rows="2" cols="60"><?php echo $comment;?></textarea>
   <br><br>
   <input type="submit" name="Update" value="Update">
</form>


</body>
</html>
