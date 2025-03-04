<?php
  print "Hello, World! I am running on host " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
  echo "<br/><br/>";
  print "The value of the variable MY_STRING is " . getenv('MY_STRING') . " AND " . $_ENV["MY_STRING"] . "\n";
?>
