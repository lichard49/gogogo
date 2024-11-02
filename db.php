<?php

header("Access-Control-Allow-Origin: *");

$fileName = "./db.txt";

if (isset($_GET["data"])) {
  // set
  $file = fopen($fileName, "a");
  fwrite($file, $_GET["data"] . "\n");
  fclose($file);
  echo 1;
} else {
  // get
  $contents = file_get_contents($fileName);
  if ($contents === FALSE) {
    echo -1;
  } else {
    echo $contents;
  }
}
?>
