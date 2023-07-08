<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>登録フォーム</title>
        <link rel="stylesheet" type="text/css" href="2regist2.css">
    </head>
    <body>
        <h1>登録内容確認</h1>
        <div class="confirm">
            <p>登録内容に間違いはございませんか？<br>
            間違いなければ「登録」ボタンを押してください。</p>
        </div>
        <p>名前（姓）：
            <?php
                echo $_POST['family_name'];
            ?>
        </p>
        <p>名前（名）：
            <?php
                echo $_POST['last_name'];
            ?>
        </p>
        <p>カナ（姓）：
            <?php
                echo $_POST['family_name_kana'];
            ?>
        </p>
        <p>カナ（名）：
            <?php
                echo $_POST['last_name_kana'];
            ?>
        </p>
        <p>メールアドレス：
            <?php
                echo $_POST['mail'];
            ?>
        </p>
        <p>パスワード：
            <?php
                echo $_POST['password'];
            ?>
        </p>
        <p>性別：
            <?php
                echo $_POST['gender'];
            ?>
        </p>
        <p>郵便番号：
            <?php
                echo $_POST['post_code'];
            ?>
        </p>
        <p>住所（都道府県）：
            <?php
                echo $_POST['prefecture'];
            ?>
        </p>
        <p>住所（市町村）：
            <?php
                echo $_POST['address_1'];
            ?>
        </p>
        <p>住所（番地）：
            <?php
                echo $_POST['address_2'];
            ?>
        </p>
        <p>アカウント権限：
            <?php
                echo $_POST['authority'];
            ?>
        </p>
        
        <form action="2regist.php">
            <input type="submit" class="botton1" value="修正">
        </form>
        
        <form action="2regist_complete.php">
            <input type="submit" class="botton2" value="登録">
                <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                <input type="hidden" value="<?php echo $_POST['post_code']; ?>" name="post_code">
                <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
                <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
                <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
            
        </form>
    </body>
</html>