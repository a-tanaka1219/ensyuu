<?php

mb_internal_encoding("UTF8");
$pdo=new PDO("mysql:dbname=lesson01;　host=localhost;","root","root");

$pdo ->exec("insert into acount(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,post_code,prefecture,address_1,address_2,authorrity) values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['post_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authorrity']."');");

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>登録フォーム</title>
        <link rel="stylesheet" type="text/css" href="regist2.css">
    </head>
    <body>
    <h1>登録フォーム</h1>
    <div class="confirm">
        <p>ご登録有難うございました。</p>
    </div>
    </body>
</html>