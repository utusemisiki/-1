<?php
$hobby1 = "ゲームが好きです";
$hobby2 = ["大乱闘スマッシュブラザーズ","eFootball","ヘブンズバーンレッド","ウマ娘"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css1.css"> <!-- CSSファイル -->
    <title>趣味一覧</title>
</head>
<body>
<section  >
<div class="container">
        <h2>趣味、好きなこと</h2>
        
   
        <p><?php echo $hobby1; ?></p>
        <h3>主にしているゲーム</h3> 
    <?php foreach($hobby2 as $index =>$hobbylist ){
    echo $hobbylist."<br>";
    } 
    ?>
</div>
</section>
</body>
</html>
