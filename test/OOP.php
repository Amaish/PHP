  <?php

 class Person
  {
      
     public static function say ()
      {
          echo "Here are my thoughts!";
      }
  }
  class Blogger extends Person {
 const cats = 50;
}
echo Blogger::say();
echo Blogger::cats
?>

