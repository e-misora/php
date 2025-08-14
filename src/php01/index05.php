<!-- if文 -->
<?php
$a = 5;
if($a==5){
    echo "\$aは5です";
}
?>
<br>
<?php
$a=7;
if ($a==5) {
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
?>
<br>
<?php
$a=7;
if ($a==5) {
    echo "\$aは5です";
}elseif ($a==7) {
    echo "\$aは7です";
}else {
    echo "\$aはでも7でもありません";
}
?>
<br>
<?php
// switch文
$people="Saburo";
switch ($people) {
    case 'Saburo':
        echo "三郎です";
        break;
    default:
        echo "三郎ではありません";
        break;
}
?>
<br>
<!-- 三項演算子 -->
<?php
$a=7;
$result=($a==7)?"TRUE":"FALSE";
echo $result;
