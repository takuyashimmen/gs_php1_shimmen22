<?php

//誤作動防止
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function getfile(){
    // ファイルを開く
    $openFile = fopen('./data/data.txt', 'r');
    // ファイル内容を1行ずつ読み込んで出力
    while ($str = fgets($openFile)){ //fgetsは上から1行ずつ読み込む
        // echo nl2br($str); //nl2brで改行
        $array = json_decode($str, true);
        $name = h($array ["name"]);
        $mail = h($array ["mail"]);
        $q1 = h($array ["q1"]);
        $q2 = h($array ["q2"]);
        echo "<tr><td>".$name."</td><td>".$mail."</td><td>".$q1."</td><td>".$q2."</td></tr>";
    }
    // ファイルを閉じる
    fclose($openFile);
    };
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>集計結果</title>
</head>
<body>
    <h1>集計結果</h1>
    <table border="3">
        <tr>
            <th>名前</th>
            <th>メール</th>
            <th>Q1</th>
            <th>Q2</th>
        </tr>
        <?php getfile() ?>
    </table>
</body>
</html>