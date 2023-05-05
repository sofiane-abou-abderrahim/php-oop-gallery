<?php

  echo __FILE__ . "<br>";
  echo __LINE__ . "<br>";
  echo __DIR__ . "<br>";

  if(file_exists(__DIR__)) {
    echo "Yes";
  }

  echo "<br>";

  if(is_file(__DIR__)) {
    echo "Yes";
  } else {
    echo "No";
  }

  echo "<br>";

  if(is_file(__FILE__)) {
    echo "Yes";
  } else {
    echo "No";
  }

  echo "<br>";

  if(is_dir(__FILE__)) {
    echo "Yes";
  } else {
    echo "No";
  }

  echo "<br>";

  echo file_exists(__FILE__) ? "Yes" : "No";

?>