<?php
var_dump($_POST);
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
        <form method="post" action="2regist_confirm.php">
            <div>
                <label>名前（姓）</label>
                <input type="text" size="35" name="family_name"
                       value="<?php
                              //入力保持
                              if(!empty($_POST['family_name'])){
                                  echo $_POST['family_name'];
                                  }
                              ?>">
            </div>
            <div>
                <label>名前（名）</label>
                <input type="text" size="35" name="last_name"
                       value="<?php
                              if(!empty($_POST['last_name'])){
                                  echo $_POST['last_name'];
                                  }
                                ?>">
            </div>
            <div>
                <label>カナ（姓）</label>
                <input type="text" size="35" name="family_name_kana"
                       value="<?php
                              if(!empty($_POST['family_name_kana'])){
                                  echo $_POST['family_name_kana'];
                              }
                              ?>">
            </div>
            <div>
                <label>カナ（名）</label>
                <input type="text" size="35" name="last_name_kana"
                       value="<?php
                              if(!empty($_POST['last_name_kana'])){
                                  echo $_POST['last_name_kana'];
                              }
                              ?>">
            </div>
            <div>
                <label>メールアドレス</label>
                <input type="email" size="35" name="mail"
                       value="<?php
                              if(!empty($_POST['mail'])){
                                  echo $_POST['mail'];
                              }
                              ?>">
            </div>
            <div>
                <label>パスワード</label>
                <input type="password" size="35" name="password">
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
            </div>
            <div>
                <label>住所（都道府県）</label>
                <select name="prefecture">
                    <option value="都道府県">都道府県</option>
                    
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
            </div>
            <div>
                <label>住所（市町村）</label>
                <input type="text" size="35" name="address_1"
                       value="<?php
                              if(!empty($_POST['address_1'])){
                                  echo $_POST['address_1'];
                              }
                              ?>">
            </div>
            <div>
                <label>住所（番地）</label>
                <input type="text" size="35" name="address_2"
                       value="<?php
                              if(!empty($_POST['address_2'])){
                                  echo $_POST['address_2'];
                              }
                              ?>">
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
                            <?php
                            if (isset($_POST['authority']) && $_POST['authority'] == "1"){
                                echo 'selected';
                            }
                            ?>>管理者</option>
                </select>
            </div>
            <div>
                <input type="submit" class="submit" value="確認する">
                <input type="hidden" value="<?php
                                            if(!isset($_POST['family_name'])){
                                                echo "名前（姓）を入力してください";
                                            }"
                                            ?>
            </div>
        </form>
    </body>
</html>