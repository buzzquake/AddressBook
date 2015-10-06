<html>
<head><title>View My Guestbook</title></head>
<body>
<h2> View My Guestbook </h2>
<?php

$conn = mysql_connect("localhost","root","password","guestbook");

if(empty($conn)){
  die("mysql_connect failed: " . mysql_connect_error());
}

mysql_select_db("guestbook", $conn);

$result = mysql_query("select * from guestbook") or die (mysql_error());

while ($row = mysql_fetch_array($result))
{
    echo "<br><br>";
    echo "<b>Name:</b>";
    echo $row["name"];
    echo "<br>\n";
    
    echo "<b>Location:</b>";
    echo $row["location"];
    echo "<br>\n";
    
    echo "<b>Email:</b>";
    echo $row["email"];
    echo "<br>\n";
    
    echo "<b>URL:</b>";
    echo $row["url"];
    echo "<br>\n";
    
    echo "<b>Comments:</b>";
    echo $row["comments"];
    echo "<br>\n";
}
mysql_free_result($result);
?>
<h2><a href="sign.php">Sign My Guestbook!</a></h2>
</body>
</html>
