<?php
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>登録フォーム</title>
        <link rel="stylesheet" type="text/css" href="regist2.css">
    </head>
    <body>
        <h1>登録内容確認</h1>
        <div class="confirm">
            <p>登録内容にお間違いございませんか？
                <br>よろしければ「登録」ボタンを押してください。
            </p>
            <p>名前（姓）:
                <?php
                if (empty($_POST["family_name"])) {
                    echo "この項目は入力必須です";
                    }
                else{
                    echo $_POST["family_name"];
                }
                ?>
                
            </p>
            <p>名前（名）：
                <?php echo $_POST['last_name']; ?>
            </p>
            <p>カナ（姓）：
                <?php echo $_POST['family_name_kana']; ?>
            </p>
            <p>カナ（名）：
                <?php echo $_POST['last_name_kana']; ?>
            </p>
            <p>メールアドレス：
                <?php echo $_POST['mail']; ?>
            </p>
            <p>パスワード：
                <?php echo $_POST['password']; ?>
            </p>
            <p>性別：
                <?php echo $_POST['gender']; ?>
            </p>
            <p>郵便番号：
                <?php echo $_POST['post_code']; ?>
            </p>
            <p>住所（都道府県）：
                <?php echo $_POST['prefecture']; ?>
            </p>
            <p>住所（市区町村）：
                <?php echo $_POST['address_1']; ?>
            </p>
            <p>住所（番地）：
                <?php echo $_POST['address_2']; ?>
            </p>
            <p>アカウント権限：
                <?php echo $_POST['authorrity']; ?>
            </p>
            
            <form action="regist.php" method="post">
                <input type="submit" class="button1" value="修正">
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST['family_name']))
                              {
                                  echo $_POST['family_name'];
                              }
                              ?>" name="family_name">
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST['last_name']))
                              {
                                  echo $_POST['last_name'];
                              }
                              ?>" name="last_name">
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST['family_name_kana']))
                              {
                                  echo $_POST['family_name_kana'];
                              }
                              ?>" name="family_name_kana">
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST['last_name_kana']))
                              {
                                  echo $_POST['last_name_kana'];
                              }
                              ?>" name="last_name_kana">
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST['mail']))
                              {
                                  echo $_POST['mail'];
                              }
                              ?>" name="mail">
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST['post_code']))
                              {
                                  echo $_POST['post_code'];
                              }
                              ?>" name="post_code">
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST['prefecture']))
                              {
                                  echo $_POST['prefecture'];
                              }
                              ?>" name="prefecture">
                                                 
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST["address_1"]))
                              {
                                  echo $_POST['address_1'];
                              }
                              ?>" name="address_1">
                <input type="hidden"
                       value="<?php
                              if(!empty($_POST['address_2']))
                              {
                                  echo $_POST['address_2'];
                              }
                              ?>" name="address_2">
                
            </form>
            
            <form action="regist_complete.php" method="post">
                <input type="submit" class="buttot2" value="登録">
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
                <input type="hidden" value="<?php echo $_POST['authorrity']; ?>" name="authorrity">
                       
            </form>
        </div>
    </body>
</html>