<?php

session_start();


echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_SIGNATURE'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_HOST'];
echo "<br>";




$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);
echo "<br>";
// printing the length of an array

echo $fruits[1];
// returning the second element of an array
echo "<br>";

$age = array("Peter","35", "Ben", "37", "Joe", "43");

echo $age;


echo "<br>";



// switch statement starts

$color = "ok";

switch ($color) {
  
case "red":
    echo "Hello";
    break;
  
case "green":
    echo "Welcome";
    break;
        
  default:
    echo "the color is neither red or green";
};

// switch statement ends

echo "<br>";

// time game


function ShowTheClock($time)  {
    
    if($time < 12)  {
        
        echo  "Good morning!";
        
        
    } elseif( $time < 16)   {
        
        echo "Good day!";
        
        
        
    } elseif( $time > 15)  {
        
        
        echo "Good afternoon!";
        
        
    }  elseif($time > 19)  {
        
        echo "Good evening!";
        
    }  elseif($time > 21)  {
        
        echo "Good night!";
        
        
    };
    
    
    
};

ShowTheClock(date("h:sa"));




// SESSION code starts


$_SESSION["favcolor"] = "red";

echo "<br>";


$colors = array("red", "green", "purple");

foreach($colors as $color)  {
    
    echo $color . "<br>";
    

};


for($time = 0; $time < 24; $time++)
    
    foreach($time as $clock) {
        
        $time1 = array($clock);
        
        
    };

echo $clock;



include 'exercises2.PHP';
echo "I have a " . $color . " car. <br>";




 /* $myfile = fopen("exercises.PHP", "r") or die("Unable to open file!");
echo fread($myfile,filesize("exercises.PHP"));
fclose($myfile); */




// Classess


class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  // set up the name
  function set_name($name) {
    $this->name = $name;
  }
    // returning the name that we set up
  function get_name() {
    return $this->name;
  }
    // set up the color
  function set_color($color) {
  
  $this->color = $color;
  
  }
    // returning the name that we set up
    function get_color() {
  
      return $this->color;
  
  }
}

//assigning the class to a variable
$apple = new Fruit();
//assigning the class to a variable
$banana = new Fruit();
// assigning the set method value to the same variable
$apple->set_name('Apple');
// assigning the set method value to the same variable
$banana->set_name('Banana');


$red = new Fruit();
$yellow = new Fruit();
$red->set_color('red');
$yellow->set_color('yellow');


echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $red->get_color();
echo "<br>";
echo $yellow->get_color();
echo "<br>";
echo "<br>";


// Class car exemple


class car  {
    
    public $car_name;
    public $color;
    
    function set_name($car_name) {
      $this->car_name = $car_name;
    }
    function get_name() {
      return $this->car_name;
    }
    function set_color($color) {
    
    $this->color = $color;
    
    } function get_color() {
    
        return $this->color;
    
    }
    
}


$my_car = new car();
$my_car->set_name('Volvo');
$my_car_color = new car();
$my_car_color->set_color('Red');


echo "I have a" . $my_car_color->get_color('Red')  . $my_car->get_name('Volvo');

echo "<br>";

// class food example

class my_fav_food  {
    
    public $favourite_food;
    

    function set_favourite_food($favourite_food)  {
        
        $this->favourite_food = $favourite_food;
        
        
    } function get_favourite_food()  {
        
        return $this->favourite_food;
    }
    
    
};


$fav_food = new my_fav_food();
$fav_food->set_favourite_food('Pizza');

echo "My favourite food is: " . $fav_food->get_favourite_food('Pizza');

echo "<br>";


print "Hello";
echo "<br>";


// class drink example


class my_fav_drink  {
    
    public $favourite_drink;
    
    function set_favourite_drink($favourite_drink)  {
        
        $this->favourite_drink = $favourite_drink;
        
        
    } function get_favourite_drink()  {
        
        
        return $this->favourite_drink;
        
    }
    
    
    
    
};


$fav_drink = new my_fav_drink();
$fav_drink->set_favourite_drink('Coke');

echo "My favourite drink is: " . $fav_drink->get_favourite_drink('Pizza');

echo "<br>";








?>


<?php

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";


// SESSION code ends

?>




