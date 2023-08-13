<?php
//var_dump($_POST);
//$errorの文字列がから（初期化）
$error1="";
//$_POST['family_name']がセットされていて、値がからの時
if(isset($_POST['family_name']) && $_POST['family_name']==""){
    //$errorに文字列を代入する
    $error1 = "名前（姓）を入力してください";
    }
else if(isset($_POST['family_name']) && mb_strlen($_POST['family_name']) > 10){
    $error1 = "１０文字以内で入力してください";
}else if(isset($_POST['family_name']) && preg_match('/[ぁ-ん^一-龠]/u',$_POST['family_name']) == 0){
    $error1 = "ひらがな、漢字のみで入力してください";
}

$error2="";
if(isset($_POST['last_name']) && $_POST['last_name']==""){
    $error2 = "名前（名）を入力してください";
}else if(isset($_POST['last_name']) && mb_strlen($_POST['last_name']) > 10){
    $error2 = "１０文字以内で入力してください";
}else if(isset($_POST['last_name']) && preg_match('/[ぁ-ん^一-龠]/u',$_POST['last_name']) == 0){
    $error2 = "ひらがな、漢字のみで入力してください";
}


$error3="";
if(isset($_POST['family_name_kana']) && $_POST['family_name_kana']==""){
    $error3 = "カナ（姓）を入力してください";
}else if(isset($_POST['family_name_kana']) && mb_strlen($_POST['family_name_kana']) > 10){
    $error3 = "１０文字以内で入力してください";
}else if(isset($_POST['family_name_kana']) && preg_match('/[ァ-ヴ]/u',$_POST['family_name_kana']) == 0){
    $error3 = "カタカナのみで入力してください";
}

$error4="";
if(isset($_POST['last_name_kana']) && $_POST['last_name_kana']==""){
    $error4 = "カナ（名）を入力してください";
}else if(isset($_POST['last_name_kana']) && mb_strlen($_POST['last_name_kana']) > 10){
    $error4 = "１０文字以内で入力してください";
}else if(isset($_POST['last_name_kana']) && preg_match('/[ァ-ヴ]/u',$_POST['last_name_kana']) == 0){
    $error4 = "カタカナのみで入力してください";
}

$error5="";
if(isset($_POST['mail']) && $_POST['mail']==""){
    $error5 = "メールアドレスを入力してください";
}else if(isset($_POST['mail']) && strlen($_POST['mail']) > 100){
    $error5 = "１００文字以内で入力してください";
}else if(isset($_POST['mail']) && preg_match('/^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/',$_POST['mail']) == 0){
    $error5 = "メールアドレスを正しく入力してください";
}

$error6="";
if(isset($_POST['password']) && $_POST['password']==""){
    $error6 = "パスワードを入力してください";
}else if(isset($_POST['password']) && strlen($_POST['password']) > 10){
    $error6 = "１０文字以内で入力してください";
}else if(isset($_POST['password']) && preg_match('/^[a-zA-Z0-9]+$/',$_POST['password']) == 0){
    $error6 = "半角英数字のみで入力してください";
}

$error7="";
if(isset($_POST['post_code']) && $_POST['post_code']==""){
    $error7 = "郵便番号を入力してください";
}else if(isset($_POST['post_code']) && strlen($_POST['post_code']) > 7){
    $error7 = "７文字以内で入力してください";
}else if(isset($_POST['post_code']) && preg_match('/[0-9]+$/',$_POST['post_code']) == 0){
    $error7 = "数字のみで入力してください";
}

//var_dump($_POST['prefecture']);
$error8="";
//都道府県が選択されていない（初期値の状態）時エラーを表示
if(isset($_POST['prefecture']) && $_POST['prefecture']==""){
    $error8 = "都道府県を選択してください";
}
var_dump($error8);
    
$error9 ="";
if(isset($_POST['address_1']) && $_POST['address_1']==""){
    $error9 = "住所（市町村）を入力してください";
}else if(isset($_POST['address_1']) && mb_strlen($_POST['address_1']) > 10){
    $error9 = "１０文字以内で入力してください";
}else if(isset($_POST['address_1']) && preg_match('/^[^a-zA-Z]+$/',$_POST['address_1']) == 0){
    $error9 = "正しく入力してください";
}

$error10 = "";
if(isset($_POST['address_2']) && $_POST['address_2']==""){
    $error10 = "住所（番地）を入力してください";
}else if(isset($_POST['address_2']) && mb_strlen($_POST['address_2']) > 100){
    $error = "１００文字以内で入力してください";
}else if(isset($_POST['address_2']) && preg_match('/^[^a-zA-Z]+$/',$_POST['address_2']) == 0){
    $error10 = "正しく入力してください";
}


//var_dump($error1);
//var_dump($error3);

//$_POSTが空ではなく、$errorが空の時
if(!empty($_POST) && empty($error)){
   //入力がうまくいっていることを表示
    var_dump("うまくいっている");
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>        
        <meta charset="UTF-8">
        <title>登録フォーム</title>
        <link rel="stylesheet" type="text/css" href="2regist1.css">
    </head>
    
    <body>
        <h1>登録フォーム</h1>
        <form method="post" action="2regist.php">
            <div>
                <label>名前（姓）</label>
                <input type="text" size="35" name="family_name"
                       value="<?php
                              //入力保持
                              if(!empty($_POST['family_name'])){
                                  echo $_POST['family_name'];
                                  }
                              ?>">
                
                <?php
                //エラーの表示はここ
                if(!empty($error1)){
                    echo "<p style = 'color:red;'>".$error1;
                }
                ?>
                
            </div>
            <div>
                <label>名前（名）</label>
                <input type="text" size="35" name="last_name"
                       value="<?php
                              if(!empty($_POST['last_name'])){
                                  echo $_POST['last_name'];
                                  }
                                ?>">
                
                <?php
                if(!empty($error2)){
                    echo "<p style = 'color:red;'>".$error2;
                }
                ?>
                
            </div>
            <div>
                <label>カナ（姓）</label>
                <input type="text" size="35" name="family_name_kana"
                       value="<?php
                              if(!empty($_POST['family_name_kana'])){
                                  echo $_POST['family_name_kana'];
                              }
                              ?>">
                
                <?php
                if(!empty($error3)){
                    echo "<p style = 'color:red;'>".$error3;
                }
                ?>
                
            </div>
            <div>
                <label>カナ（名）</label>
                <input type="text" size="35" name="last_name_kana"
                       value="<?php
                              if(!empty($_POST['last_name_kana'])){
                                  echo $_POST['last_name_kana'];
                              }
                              ?>">
                
                <?php
                if(!empty($error4)){
                    echo "<p style = 'color:red;'>".$error4;
                }
                ?>
                
            </div>
            <div>
                <label>メールアドレス</label>
                <input type="email" size="35" name="mail"
                       value="<?php
                              if(!empty($_POST['mail'])){
                                  echo $_POST['mail'];
                              }
                              ?>">
                
                <?php
                if(!empty($error5)){
                    echo "<p style = 'color:red;'>".$error5;
                }
                ?>
                
            </div>
            <div>
                <label>パスワード</label>
                <input type="password" size="35" name="password">
                <?php
                if(!empty($error6)){
                    echo "<p style = 'color:red;'>".$error6;
                }
                ?>
            </div>
            <div>
                <label>性別</label>
                <input type="radio" name="gender" value="0"
                       <?php
                       if(!isset($_POST['gender']) || $_POST['gender']=="0"){
                           echo 'checked';
                       }?>
                       >男性
                <input type="radio" name="gender" value="1"
                       <?php
                       if(isset($_POST['gender']) && $_POST['gender']=="1"){
                           echo 'checked';
                       }?>
                       >女性
            </div>
            <div>
                <label>郵便番号</label>
                <input type="text" size="35" name="post_code"
                       value="<?php
                              if(!empty($_POST['post_code'])){
                                  echo $_POST['post_code'];
                              }
                              ?>">
                <?php
                if(!empty($error7)){
                    echo "<p style = 'color:red;'>".$error7;
                }
                ?>
            </div>
            <div>
                <label>住所（都道府県）</label>
                <select name="prefecture">
                    <option value="">都道府県</option>
                    
                    <?php
                    $todohuken=array("北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県");
                    
                    
                    for($i=0; $i<47; $i++){
                        if(isset($_POST['prefecture']) && $_POST['prefecture'] == $todohuken[$i]){
                            echo "<option selected value='".$todohuken[$i]."'>".$todohuken[$i]."</option>";
                        }else{
                            echo "<option value='".$todohuken[$i]."'>".$todohuken[$i]."</option>";
                        }
                    }
                    ?>
                    
                    
                </select>
                    <?php
                    if(!empty($error8)){
                        echo "<p style = 'color:red;'>".$error8."</p>";
                    }
                    
                    ?>
            </div>
            <div>
                <label>住所（市町村）</label>
                <input type="text" size="35" name="address_1"
                       value="<?php
                              if(!empty($_POST['address_1'])){
                                  echo $_POST['address_1'];
                              }
                              ?>">
                <?php
                if(!empty($error9)){
                    echo "<p style = 'color:red;'>".$error9;
                }
                ?>
            </div>
            <div>
                <label>住所（番地）</label>
                <input type="text" size="35" name="address_2"
                       value="<?php
                              if(!empty($_POST['address_2'])){
                                  echo $_POST['address_2'];
                              }
                              ?>">
                
                <?php
                if(!empty($error10)){
                    echo "<p style = 'color:red;'>".$error10;
                }
                ?>
            </div>
            <div>
                <label>アカウント権限</label>
                <select name="authority">
                    <option value="0"
                            <?php
                            if(!isset($_POST['authority']) || $_POST['authority'] == "0"){
                                echo 'selected';
                            }
                            ?>>一般</option>
                    <option value="1"
                                   ,mu   <?php
                            if (isset($_POST['authority']) && $_POST['authority'] == "1"){
                                echo 'selected';
                            }
                            ?>>管理者</option>
                </select>
            </div>
            <div>
                <input type="submit" class="submit" value="確認する">
                
                
            </div>
        </form>
    </body>
</html>