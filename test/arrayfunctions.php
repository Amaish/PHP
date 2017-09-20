<!DOCTYPE html>
<html>
    <head>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>arrayfunctions, test</title>
  </head>
  <body>
  <p>arrayfunctions is a go!!!!</p>
   <?php
   // Create an array and push on the names
    // of your closest family and friends
    $names = array();
    array_push($names, "Ruth");
    array_push($names, "Tinny");
    array_push($names, "Joe");
    array_push($names, "Esther");
    array_push($names, "Maina");
    array_push($names, "Joan");
    array_push($names, "King'ori");
  // Sort the list
sort ($names);
print join(", ", $names);
print count ($names);

  // Randomly select a winner!
print "<p></p>";
$winner= $names {rand (0,count($names)-1)};
print $winner;
  // Print the winner's name in ALL CAPS
  print "<p></p>";
  print strtoupper($winner);
     ?>
    </body>
</html>