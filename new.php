<?php

$students = array(
  'Becky' => 'F',
  'Jon' => 'M',
  'Banna' => 'F',
  'Zoey' => 'F',
  'Zach' => 'M',
  'Devin' => 'F',
  );

foreach ($students as $student => $gender_key) {
  $gender = 'female';
  if ($gender_key == 'M') {
    $gender = 'male';
  }
    print $student . ' is a ' . $gender . ' student.</br />';
}
