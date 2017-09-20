<!DOCTYPE html>
<html>
    <head>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>Do while and use of rand ()</title>
  </head>
  <body>
  <p>Do while is a go!!!!</p>
   <?php
    // Use rand() to print a random number to the screen
    $attempts=0;
     do {
        $display= rand (0,10);
        $attempts ++;
        if ($display!=5 && $attempts != 1) {
            print "<p> failed at $attempts attempts</p>";
            }
            elseif ($display !=5 && $attempts == 1) {
                print "<P> failed at $attempts attempt";
                }
            elseif ($display ==5 && $attempts == 1){
                print "<p>success after $attempts attempt.</p>";
                }    
            else {
            print "<p>success after $attempts attempts.</p>";
            
            }
    }
            while ($display!=5);
                ?>
                </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
  for ($try=0; $try<=5; $try++){
 $name="Maina";
   $print = substr($name, rand(0, strlen($name) - 1), 1);
     print "<p></p>";
    echo $print;
    }
     ?>
    </body>
</html>