
<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul> 
    </div>
    <form action="write.php" method="post">
        お名前: <input type="text" name="name">
        EMAIL: <input type="text" name="mail">
        <br>
        Q1. 感想をお聞かせください <input type="text" name="q1">  
        <br>
        Q2. 改善点への意見をお聞かせください <input type="text" name="q2">  
    
        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信">
    </form>
</body>

</html>
