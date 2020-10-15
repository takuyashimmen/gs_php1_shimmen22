<?php
date_default_timezone_set('Asia/Tokyo');
// ファイルに書き込み
$date = date("Y-m-d H:i:s");
$name = $_POST['name'];
$mail = $_POST['mail'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];

$str = $date . '/'. $name .'/'. $mail .'/'. $q1 .'/'. $q2;

//文字作成
$array = ["name" => $name, "mail" => $mail, "q1" => $q1, "q2" => $q2];
$jsonstr = json_encode($array);

$file = fopen('./data/data.txt','a'); //aはファイルが無かったら追加してくれ
fwrite($file, $jsonstr . "\n");
fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>回答完了</title>
</head>

<body>

    <h1>回答ありがとうございました！</h1>
    <p> <?= $str ?></p>

    <ul>
        <li><a href="post.php">戻る</a></li>
        <li><a href="read.php">結果を見る</a></li>

    </ul>
</body>

</html>
