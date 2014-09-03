<?php

$city = $_GET ['city'];
$cities = array (
  'New York' => 8175133,
  'Los Angeles' => 3792621,
  'Chicago' => 2695598,
  'Houston' => 2099451,
  'Philadelphia' => 1526006,
);
?> 
<h2> Welcome to population data online. </h2>
 
<p>
  <ul>
    <?php
      foreach ($cities as $name => $population) {
        print '<li><a href="/population.php?city=' . $name . '">View the population of' . $name . '</a></li>';
      }
    ?>
  </ul>
</p>
 
<?php
 
if (!$city || !isset($cities[$city])) {
  print 'Please click any of the above cities to view their populations, or add a valid city to your URL.';
}
 
else {
  print 'The population of ' . $city . ' is ' . $cities[$city];
}
?>
