<?php

$fruits = array(
"apple" => "red",
"banana"=> "yellow",
"orange"=> "orange",
"grapes"=> "purple",
"guava"=> "green",
);


echo "<br> for loop <br>";
for ($i=0; $i < count($fruits); $i++) { 
    echo "the fruits are ". $fruit[ $i ] ."<br>";
}


echo "for each <br>";
foreach ($fruits as $fruit ) {
    echo"the color is ". $fruit ."<br>";
}






?>