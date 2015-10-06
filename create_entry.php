<?php

$conn = mysql_connect("localhost","root","password","guestbook");
if(empty($conn)){
  die("mysql_connect failed: " . mysql_connect_error());
}
print "connected to " . mysql_get_host_info($conn) . "\n";

$name = $_POST['name'];
$location = $_POST['location'];
$email = $_POST['email'];
$url = $_POST['URL'];
$comments = $_POST['comments'];

mysql_select_db("guestbook", $conn);

mysql_query("insert into guestbook (name, location, email, url, comments) values ('" . $name . "','" . $location . "', '" . $email . "', '" . $url . "', '" . $comments . "')")
    or die (mysql_error());

?>
<h2>Thanks!!</h2>
<h2><a href="view.php">View My Guestbook!</a></h2>

<?php
mysql_close($conn);
?>

