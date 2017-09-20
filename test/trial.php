<?php
// Use your knowledge of strlen(), substr(), and rand() to
// print a random character from your name to the screen.
  $name = "Maina";
  $print = substr($name, rand(0, strlen($name) - 1), 1);
    echo $print;
    ?>