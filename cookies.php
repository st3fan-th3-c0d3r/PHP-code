<?php


$cookie_name = "username";
$cookie_value = "John";


setcookie($cookie_name,$cookie_value);


if(!isset($_COOKIE[$cookie_name]))   {
    
    
    echo "Cookie named " . $cookie_name . " is not set ";
    
    
};


 if(isset($_COOKIE[$cookie_name])){
    
    echo "Cookie " . $cookie_name . " is set <br>";
    echo $_COOKIE[$cookie_name];
    
    
    
};


?>
