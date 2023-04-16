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
                       value="<?php
                              if(!empty($_POST['family_name']))
                              {
                                  echo $_POST['family_name'];
                              }
                              ?>">
            </div>
            <div>
                <label>名前（名）</label>
                <input type="text" class="error" size="35" name="last_name"
                       value="<?php
                              if(!empty($_POST['last_name']))
                              {
                                  echo $_POST['last_name'];
                              }
                              ?>">
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
                <input type="radio" name="gender" value="0">男性
                <input type="radio" name="gender" value="1">女性
            </div>
                
            
            <div>
                <label>郵便番号</label>
                <input type="number" class="text" size="10" maxlength="7" name="post_code"
                       value="<?php
                              if(!empty($_POST['post_code']))
                              {
                                  echo $_POST['post_code'];
                              }
                              ?>">
            </div>
            <div>
                <label>住所（都道府県）</label>
                <select name="prefecture"
                        value="<?php
                               if(isset($_POST['prefecture']))
                               {
                                   echo $_POST['prefecture'];
                               }
                                ?>">
                    <option value="">
                        都道府県</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
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
                    <option value="01">一般</option>
                    <option value="02">管理者</option>
                </select>    
            </div>
            <div>
                <input type="submit" class="submit" value="確認する"　onclick="return check();">
            </div>
        </form>
    </body>
</html>