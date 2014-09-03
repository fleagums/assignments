<h1>Welcome to the Population Database</h1>

<?php

$city = $_GET['city'];

$localhost = '127.0.0.1:8889';
$user = 'root';
$pw = 'root';

$connect=mysql_connect($localhost, $user, $pw);

// Check connection
if (mysql_errno()) {
  echo "Failed to connect to MySQL: " . mysql_errno();
}

mysql_select_db('day-4-exercises');

$result = mysql_query("SELECT * FROM population WHERE city_name = '".$city."'");

$row = mysql_fetch_array($result);
echo "The population of " . $row['city_name'] . " is " . $row['population'];

$result = mysql_query("SELECT * FROM population");

echo "<h4>City Directory</h4>
      <ul>";
while($row = mysql_fetch_array($result)) {
  echo "<li><a href='population.php?city=" . $row['city_name'] . "'>" . $row['city_name'] . "</a></li>";
}

echo "</ul>";

mysql_close($connect);

?>

<img src="http://www.animateit.net/data/media/179/aalitebuilding.gif">
