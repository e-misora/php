<!-- 関数 -->
<?php
function outputNumber($a){
    echo "引数の値は".$a."です";
    return;
}
outputNumber(2);
echo "<br>";
function outputHello() {
    echo "Hello world";
}
outputHello();
echo "<br>";
function text($number1,$number2) {
    $value=$number1+$number2;
    return $value;
}
$total=text(2,4);
echo $total;
// 問題
echo "<br>";
function number($n) {
    echo $n;
}
number(5);
echo "<br>";
function Score($score1,$score2,$score3) {
    $total=$score1+$score2+$score3;
    if ($total>210) {
        echo "合計点は○○なので合格です";
    }else {
        echo "合計点は○○なので不合格です";
    }
    return $total;
}
Score(78,64,82);
echo "<br>";
?>
<?php
function triangle($bottom,$height) {
    $area=$bottom*$height/2;
    return $area;
}
echo triangle(5,2);
echo "<br>";
?>
<?php
function square($height,$width) {
    $area=$height*$width;
    return $area;
}
echo square(3,2);
echo "<br>";
?>
<?php
function trapezoid($top,$bottom,$height) {
    $area=($top+$bottom)*$height;
    return $area;
}
echo trapezoid(2,3,5);