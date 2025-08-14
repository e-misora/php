<?php
for ($i=1; $i <= 50; $i++) { 
    if ($i%3==0) {
        echo "Fizz"."<br>";
    }
    if ($i%5==0) {
        echo "Buzz"."<br>";
    }
    if ($i%3==0&&$i%5==0) {
        echo "FizzBuzz"."<br>";
    }
    echo $i."<br>";
}