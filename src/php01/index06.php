for文
<br>
<?php
for ($i=2; $i <=10; $i+=2) {
    echo $i."<br>";
}
?>
<!-- 解答 -->
<?php
for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . '<br />';
}
?>

while文
<br>
<?php
$count=0;
while ($count < 20) {
    ++$count;
    echo $count."<br>";
}
?>
<br>
break 例
<br>
<?php
$i=0;
while($i<10){
    if ($i==5) {
        break;
    }
    echo $i;
    $i++;
}
?>
<br>
<br>
<?php
$num=0;
do{
    echo "num = ".$num."<br>";
    $num++;
}while ($num<3);
?>
FizzBuzz
<br>
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
?>
<br>
<?php
for ($i=1; $i <=5; $i++) {

    for ($j=1; $j<=5 ; $j++) {
        echo "●";
    }
    echo "<br>";
}