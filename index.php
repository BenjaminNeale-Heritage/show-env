<?php
  print "Hello, World! I am running on host " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
  echo "<br/><br/>";

  if(getenv('MY_STRING') == 'BLUE') {
    echo "<p style='color:blue;'>";
  } elseif(getenv('MY_STRING') == 'GREEN') {
    echo "<p style='color:green;'>";
  } else {
    echo "<p>";
  }
  print "The value of the variable MY_STRING is " . getenv('MY_STRING') . "\n";
  echo "</p>";
?>
