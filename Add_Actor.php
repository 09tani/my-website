<html>
  <head>
    <title>Add Actor</title>
    <LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
  </head>
<body>

<h1>
  Actor Added
</h1>

<?php
$actorSearch = $_GET['actor'];

$servername = 'mysql.cs.nott.ac.uk';
$username = 'psyit2_COMP1004';
$password = 'VJK123';
$dbname = 'psyit2_COMP1004';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT actID,actName FROM Actor WHERE actName='$actorsearch'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($actID, $actName);
?>

<table width="750" border="1" cellpadding="1" cellspacing="1">
<tr> <th>ID</th> <th>Title</th> <th>Price</th> <th>Year</th> <th>Genre</th> </tr>

<?php
while($stmt->fetch()){
  echo "<tr>";
  echo "<td>". htmlentities($ID) ."</td>";
  echo "<td>". htmlentities($Title) ."</td>";
  echo "<td>". htmlentities($Price) ."</td>";
  echo "<td>". htmlentities($Year) ."</td>";
  echo "<td>". htmlentities($Genre) ."</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
