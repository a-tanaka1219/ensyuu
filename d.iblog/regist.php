<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="ja">
    <hrad>
        <meta charset="UTF-8">
        <title>登録フォーム</title>
        <link rel="stylesheet" type="text/css" href="regist1.css">
        
        
        
    </hrad>
    
    <body>
        <h1>登録フォーム</h1>
        <form method="post" action="regist_confirm.php">
            <div>
                <input type="date" name="update_time">
            </div>
            <div>
                <label>名前（姓）</label>
                <input type="text" class="error" size="35" maxlength="10" name="family_name" 
                       //必須入力設定
                       required title="名前（姓）を入力してください。" 
                       //文字種の設定
                       pattern="[^\x20-\x7E]*.[^\u30A1-\u30F6]*"
                       value="<?php
                              //もし名前（姓）が入力されている場合、$_POSTで送られてきた値を表示(入力値の保持)
                              if(!empty($_POST['family_name']))
                              {
                                  echo $_POST['family_name'];
                              }
                              ?>"> 
            </div>
            <div>
                <label>名前（名）</label>
                <input type="text" class="last_name" size="35" name="last_name"
                       value="<?php
                              if(!empty($_POST['last_name']))
                              {
                                  echo $_POST['last_name'];
                              }
                              ?>">
                <?php
                if(isset($_POST['last_name']) && empty($_POST['last_name'])){
                    echo "<p style='color: red;'>名前（名）を入力してください。</p>";
                }
                ?>
                
            </div>
            <div>
                <label>カナ（姓）</label>
                <input type="text" class="text" size="35" maxlength="10" name="family_name_kana"
                       value="<?php
                              if(!empty($_POST['family_name_kana']))
                              {
                                  echo $_POST['family_name_kana'];
                              }
                              ?>">
            </div>
            <div>
                <label>カナ（名）</label>
                <input type="text" class="text" size="35"  maxlength="10" name="last_name_kana"
                       value="<?php
                              if(!empty($_POST['last_name_kana']))
                              {
                                  echo $_POST['last_name_kana'];
                              }
                              ?>">
            </div>
            <div>
                <label>メールアドレス</label>
                <input type="email" size="35" maxlength="100" name="mail"
                       value="<?php
                              if(!empty($_POST['mail']))
                              {
                                  echo $_POST['mail'];
                              }
                              ?>">
            </div>
            <div>
                <label>パスワード</label>
                <input type="password" name="password" maxlength="10">
            </div>
            <div>
                <label>性別</label>
                <input type="radio" name="gender" value="0"
                       <?php
                       //POST[gender]がセットされていない時もしくわPOST[gender]が０の時男性にチェックを入れる
                       if(!isset($_POST['gender']) || $_POST['gender']=="0")
                           {
                               echo 'checked';
                           }
                       ?>>男性
                <input type="radio" name="gender" value="1"
                       //$POST[gender]に変数が代入されているかつ数値が１の時女性にチェックを入れる
                       <?php
                       if(isset($_POST['gender']) && $_POST['gender']=="1")
                          {
                               echo 'checked';
                          }
                       ?>>女性
            </div>
                
            
            <div>
                <label>郵便番号</label>
                <input type="number" class="text" size="10" pattem name="post_code"
                       value="<?php
                              if(!empty($_POST['post_code']))
                              {
                                  echo $_POST['post_code'];
                              }
                              ?>">
            </div>
            <div>
                <label>住所（都道府県）</label>
                <select name="prefecture">
                    <option value="">
                        都道府県</option>
                    <option value="北海道"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="北海道")
                            {
                                echo 'selected';
                            }
                            ?>>北海道</option>
                    <option value="青森県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="青森県")
                            {
                                echo 'selected';
                            }
                            ?>>青森県</option>
                    <option value="岩手県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="岩手県")
                            {
                                echo 'selected';
                            }
                            ?>>岩手県</option>
                    <option value="宮城県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="宮城県")
                            {
                                echo 'selected';
                            }
                            ?>>宮城県</option>
                    <option value="秋田県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="秋田県")
                            {
                                echo 'selected';
                            }
                            ?>>秋田県</option>
                    <option value="山形県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="山形県")
                            {
                                echo 'selected';
                            }
                            ?>>山形県</option>
                    <option value="福島県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="福島県")
                            {
                                echo 'selected';
                            }
                            ?>>福島県</option>
                    <option value="茨城県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="茨城県")
                            {
                                echo 'selected';
                            }
                            ?>>茨城県</option>
                    <option value="栃木県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="栃木県")
                            {
                                echo 'selected';
                            }
                            ?>>栃木県</option>
                    <option value="群馬県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="群馬県")
                            {
                                echo 'selected';
                            }
                            ?>>群馬県</option>
                    <option value="埼玉県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="埼玉県")
                            {
                                echo 'selected';
                            }
                            ?>>埼玉県</option>
                    <option value="千葉県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="千葉県")
                            {
                                echo 'selected';
                            }
                            ?>>千葉県</option>
                    <option value="東京都"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="東京都")
                            {
                                echo 'selected';
                            }
                            ?>>東京都</option>
                    <option value="神奈川県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="神奈川県")
                            {
                                echo 'selected';
                            }
                            ?>>神奈川県</option>
                    <option value="新潟県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="新潟県")
                            {
                                echo 'selected';
                            }
                            ?>>新潟県</option>
                    <option value="富山県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="富山県")
                            {
                                echo 'selected';
                            }
                            ?>>富山県</option>
                    <option value="石川県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="石川県")
                            {
                                echo 'selected';
                            }
                            ?>>石川県</option>
                    <option value="福井県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="福井県")
                            {
                                echo 'selected';
                            }
                            ?>>福井県</option>
                    <option value="山梨県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="山梨県")
                            {
                                echo 'selected';
                            }
                            ?>>山梨県</option>
                    <option value="長野県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="長野県")
                            {
                                echo 'selected';
                            }
                            ?>>長野県</option>
                    <option value="岐阜県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="岐阜県")
                            {
                                echo 'selected';
                            }
                            ?>>岐阜県</option>
                    <option value="静岡県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="静岡県")
                            {
                                echo 'selected';
                            }
                            ?>>静岡県</option>
                    <option value="愛知県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="愛知県")
                            {
                                echo 'selected';
                            }
                            ?>>愛知県</option>
                    <option value="三重県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="三重県")
                            {
                                echo 'selected';
                            }
                            ?>>三重県</option>
                    <option value="滋賀県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="滋賀県")
                            {
                                echo 'selected';
                            }
                            ?>>滋賀県</option>
                    <option value="京都府"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="京都府")
                            {
                                echo 'selected';
                            }
                            ?>>京都府</option>
                    <option value="大阪府"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="大阪府")
                            {
                                echo 'selected';
                            }
                            ?>>大阪府</option>
                    <option value="兵庫県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="兵庫県")
                            {
                                echo 'selected';
                            }
                            ?>>兵庫県</option>
                    <option value="奈良県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="奈良県")
                            {
                                echo 'selected';
                            }
                            ?>>奈良県</option>
                    <option value="和歌山県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="和歌山県")
                            {
                                echo 'selected';
                            }
                            ?>>和歌山県</option>
                    <option value="鳥取県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="鳥取県")
                            {
                                echo 'selected';
                            }
                            ?>>鳥取県</option>
                    <option value="島根県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="島根県")
                            {
                                echo 'selected';
                            }
                            ?>>島根県</option>
                    <option value="岡山県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="岡山県")
                            {
                                echo 'selected';
                            }
                            ?>>岡山県</option>
                    <option value="広島県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="広島県")
                            {
                                echo 'selected';
                            }
                            ?>>広島県</option>
                    <option value="山口県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="山口県")
                            {
                                echo 'selected';
                            }
                            ?>>山口県</option>
                    <option value="徳島県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="徳島県")
                            {
                                echo 'selected';
                            }
                            ?>>徳島県</option>
                    <option value="香川県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="香川県")
                            {
                                echo 'selected';
                            }
                            ?>>香川県</option>
                    <option value="愛媛県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="愛媛県")
                            {
                                echo 'selected';
                            }
                            ?>>愛媛県</option>
                    <option value="高知県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="高知県")
                            {
                                echo 'selected';
                            }
                            ?>>高知県</option>
                    <option value="福岡県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="福岡県")
                            {
                                echo 'selected';
                            }
                            ?>>福岡県</option>
                    <option value="佐賀県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="佐賀県")
                            {
                                echo 'selected';
                            }
                            ?>>佐賀県</option>
                    <option value="長崎県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="長崎県")
                            {
                                echo 'selected';
                            }
                            ?>>長崎県</option>
                    <option value="熊本県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="熊本県")
                            {
                                echo 'selected';
                            }
                            ?>>熊本県</option>
                    <option value="大分県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="大分県")
                            {
                                echo 'selected';
                            }
                            ?>>大分県</option>
                    <option value="宮崎県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="宮崎県")
                            {
                                echo 'selected';
                            }
                            ?>>宮崎県</option>
                    <option value="鹿児島県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="鹿児島県")
                            {
                                echo 'selected';
                            }
                            ?>>鹿児島県</option>
                    <option value="沖縄県"
                            <?php
                            if(isset($_POST['prefecture']) && $_POST['prefecture']=="沖縄県")
                            {
                                echo 'selected';
                            }
                            ?>>沖縄県</option>
                </select>
            </div>
            <div>
                <label>住所（市区町村）</label>
                <input type="text" class="text" size="35" maxlength="10" name="address_1"
                       value="<?php
                              if(!empty($_POST['address_1']))
                              {
                                  echo $_POST['address_1'];
                              }
                              ?>">
            </div>
            <div>
                <label>住所（番地）</label>
                <input type="text" class="text" size="35" maxlength="100" name="address_2"
                       value="<?php
                              if(!empty($_POST['address_2']))
                              {
                                  echo $_POST['address_2'];
                              }
                              ?>">
            </div>
            <div>
                <label>アカウント権限</label>
                <select name="authorrity">
                    <option value="01"
                            <?php
                            if(isset($_POST['authorrity']) && $_POST['authorrity']=="01")
                            {
                                echo 'selected';
                            }
                            ?>>一般</option>
                    <option value="02"
                            <?php
                            if(isset($_POST['authorrity']) && $_POST['authorrity']=="02")
                            {
                                echo 'selected';
                            }
                            ?>>管理者</option>
                </select>    
            </div>
            <div>
                <input type="submit" class="submit" value="確認する"　onclick="return check();">
            </div>
        </form>
    </body>
</html>