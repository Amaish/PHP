<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
      <?php
      class Dog{
          //public $isAlive=true;
          public $numLegs=4;
          public $name;
           public function __construct($name) {
                $this->name = $name;
                }
            public function bark() {
                return " Woof!!! Woof!!!";
             }
             public function greet(){
                 return " My name is ". $this->name." nice to meet you.";
                 }
        }
        $dog1= new Dog ('Barker');
        $dog2= new Dog ('Amigos');
        echo $dog1->bark();
        echo $dog2->greet();
      ?>
      </p>
    </body>
</html>