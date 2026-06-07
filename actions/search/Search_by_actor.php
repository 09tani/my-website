<html>
  <head>
    <title>Search Reasults</title>
    <LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
  </head>
<body>

<h1>
  Actor Search Result
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
<tr> <th>ID</th> <th>Actor_Name</th></tr>

<?php
while($stmt->fetch())
{
  echo "<tr>";
  echo "<td>". htmlentities($actID) ."</td>";
  echo "<td>". htmlentities($actName) ."</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
