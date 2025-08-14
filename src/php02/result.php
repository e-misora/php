<?php
// $name=htmlspecialchars($_POST["name"],ENT_QUOTES);
// $choice=htmlspecialchars($_POST["choices"],ENT_QUOTES);
// $take=htmlspecialchars($_POST["take"],ENT_QUOTES);
// echo "私の名前は、".$name."<br>";
// echo "ご希望の商品は、".$choice."<br>";
// echo "注文数は、".$take.;
?>
<?php
// $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
// $choice = htmlspecialchars($_POST['choice'], ENT_QUOTES);
// $take = htmlspecialchars($_POST['take'], ENT_QUOTES);

// print "私の名前は、" . $name . "<br>";
// print "ご希望の商品は、" . $choice . "<br>";
// print "注文数は、" . $take;
?>
<?php
require_once('functions/search_city_time.php');
$tokyo=searchCityTime("東京");
$city=htmlspecialchars($_GET["city"], ENT_QUOTES);
$comparison=searchCityTime($city);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/index.php">World Clock</a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $tokyo['name']?></p>
                        <p class="result-card__time"><?php echo $tokyo['time']?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $comparison['name']?></p>
                        <p class="result-card__time"><?php echo $comparison['time']?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>