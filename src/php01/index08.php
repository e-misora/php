<!-- 配列 -->
<?php
$people = array("Taro","Jiro","Saburo");
var_dump($people);
echo "<br>";
echo $people[1];
?>
<br>
<!-- 連想配列 -->
<?php
$people=array(
    "person1"=>"Taro",
    "person2"=>"Jiro",
    "person3=>"=>"Saburo"
);

var_dump($people);
?>
<br>
<?php
$people=[
    "person1"=>"taro",
    "person2"=>"jiro",
];
var_dump($people);
?>
<br>
<!-- 多次元配列 -->
<?php
$people=[
[
    "last_name"=>"山田",
    "first_name"=>"太郎",
    "age"=>"29"
],
[
    "last_name"=>"佐藤",
    "first_name"=>"花子",
    "age"=>"20"
]
];
var_dump($people);
echo "<br>";
echo $people[1]["first_name"];
?>
<br>
<?php
// foreach文
$person=["Taro","Jiro","Saburo"];
foreach ($person as $people) {
    echo $people;
    echo "<br>";
}
$people=[
    "person1"=>"Taro",
    "person2"=>"Jiro"
];
?>
<br>
<?php
foreach ($people as $person => $name){
    echo $person."は".$name."です"."<br>";
}
?>
<br>
<?php
$people=[
    ["Taro","25","men"],
    ["Jiro","20","men"],
    ["hanako","16","women"]
];
foreach ($people as $key) {
    echo $key[0]."(".$key[1]."歳".$key[2].")"."<br>";
}