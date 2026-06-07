<html>
  <head>
    <title>Delete Movie</title>
    <LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
  </head>
<body>

<h1>
    Delete Movie 
</h1>


<?php
$servername = 'mysql.cs.nott.ac.uk';
$username = 'psyit2_COMP1004';
$password = 'VJK123';
$dbname = 'psyit2_COMP1004';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed" . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM Movie WHERE title=1";

if ($conn->query($sql) === TRUE) 
{
  echo "Movie deleted successfully";
} 
else 
{
  echo "Error deleting the movie" . $conn->error;
}

$conn->close();
?>
</table>
</body>
</html>