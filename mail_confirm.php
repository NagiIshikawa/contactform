<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" href="./style2.css">
</head>

<body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            <br>よろしければ「送信する」ボタンを押して下さい。
        </p>
    

    <p>名前
        <br><?php echo $_POST['name']; ?>
    </p>

    <p>メールアドレス
        <br><?php echo $_POST['mail']; ?>
    </p>

    <p>年齢
        <br><?php echo $_POST['age']; ?>
    </p>

    <p>コメント
        <br><?php echo $_POST['comment']; ?>
    </p>
    


    <div class="buttons">
        <form action="index.html" >
            <input type="submit" value="戻って修正する" class="button button1">
        </form>

        <form action="insert.php" method="post">
            <input type="submit" value="登録する" class="button button2">
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comment']; ?>" name="comment">
        </form>
    </div>
    </div>


</body>
</html>