<?php
// PHPの設定
$name = "池田翔";
$professions = ["Web エンジニア","と","テストエンジニア"];
$bio = "私はWeb開発を目標とし日々勉強しているエンジニアです。PHP、フロントサイド（HTML,CSS）、MySQLを使用したバックエンド開発を行なった経験があります。";
$skills = ["PHP", "JavaScript", "HTML/CSS", "MySQL"];
$levels = ["基本的なプログラミングが可能","基本的な理解が可能"];
$email = "monsuto.mura@gmail.com";
$github = "https://github.com/johndoe";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自己紹介ページ</title>
    <link rel="stylesheet" href="css/css1.css"> <!-- CSSファイル -->
</head>
<body>

    <!-- ヘッダー -->
    <header>
        <nav>
            <ul>
                <li><a href="/">ホーム</a></li>
                <li><a href="#skills">スキル</a></li>
                <li><a href="#projects">プロジェクト</a></li>
                <li><a href="#contact">連絡先</a></li>
            </ul>
        </nav>
    </header>

    <!-- 自己紹介セクション -->
    <section id="intro">
        <img src="image/DIsney.ti.jpeg" alt="プロフィール画像" class="profile-image"> <!-- プロフィール画像 -->
        <div class="text-content">
            <h1>こんにちは！私は<?php echo $name; ?>です。</h1>
            <p>職業: <?php foreach($professions as $index=>$profession) echo $profession; ?></p>
            <p><?php echo $bio; ?></p>
        </div>
    </section>



    <!-- スキルセクション -->
    <section id="skills">
        <h2>私のスキル</h2>
        <ul>
            <?php
             foreach ($skills as $index => $skill){
                if($skill == "PHP"){
                    $level = "基本的なプログラミングが可能";
                } elseif ($skill == "HTML/CSS") {
                    $level = "基本的な理解が可能";
                } else {
                    $level = $levels[1]; //「基本的な理解が可能」を選択
                }
                 echo "<li>{$skill}...{$level}</li>";
            }
            ?>
        </ul>
    </section>
    <section id="hobbys">
        
        <?php
     include "include.php";
    
    ?>
        <ul>
        <p><a href="<?php echo "include.php"; ?>">趣味一覧</a></p>
        </ul>
        </section>
    

    <!-- 連絡先セクション -->
    <section id="contact">
        <h2>連絡先</h2>
    <!--    <p>メール: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>-->
        <p>GitHub: <a href="<?php echo $github; ?>" target="_blank">GitHub</a></p>
    </section>

    <!-- フッター -->
    <footer>
        <p>&copy; 2024 <?php echo $name; ?>. All Rights Reserved.</p>
    </footer>

    <html>
 <?php
if(isset($_POST["send_message"])){
        //送信されたname="message"とname="user_name"の値を取得する
        $message = trim($_POST['message']);
        $user = trim($_POST['user_name']);
    

    if(empty($message)){
        if(empty($user)){
            $user = "名無し";
        }

    }
}
 ?>

<head lang="ja">
<meta charset="utf-8">
</head>
<body>
<h1>コメント</h1>

<!--ここで投稿内容を送信する-->
<form action="" method="post">
    メッセージ:<input type="text" name="message">
    ユーザー名:<input type="text" name="user_name">
    <input type="submit" name="send_message" value="投稿">
</form>

<h2>投稿一覧</h2>
<ul>
    <?php
    echo "<p><strong>ユーザー名:</strong> " . htmlspecialchars($user) . "</p>";
    echo "<p><strong>メッセージ:</strong> " . nl2br(htmlspecialchars($message)) . "</p>";
?>
</ul>
</body>
</html>
</body>
</html>
