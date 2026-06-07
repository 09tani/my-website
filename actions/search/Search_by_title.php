<html>
  <head>
    <title>Search Reasults</title>
    <LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
  </head>
<body>

<h1>
  Movie Search Result
</h1>

<?php
$titlesearch = $_GET['title'];

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

$sql="SELECT id,title,price,year,genre FROM movie WHERE title='$titlesearch'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($ID, $Title, $Price, $Year, $Genre);
?>


<table width="750" border="1" cellpadding="1" cellspacing="1">
<tr> <th>ID</th> <th>Title</th> <th>Price</th> <th>Year</th> <th>Genre</th> </tr>

<?php
while($stmt->fetch())
{
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
