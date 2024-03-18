<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div>
    <h1 class="loginFinTitle">会員登録</h1>
</div>
    <section>
    <div class="entryContents">
<?php

/*  if文でpreg_match分岐 */
echo '<form action="entryCheck.php" method="post">';
echo '<p>お名前<span>（必須）</span></p>';
echo '<input type="text" name="name" placeholder="ドーナツ太郎">';
echo '<p>お名前（フリガナ）<span>（必須）</span></p>';
echo '<input type="text" name="furigana" placeholder="ドーナツタロウ">';
echo '<p>郵便番号<span>（必須）</span></p>';
echo '<input type="text" name="postcode_a" placeholder="123">';
echo '<input type="text" name="postcode_b" placeholder="6789">';
echo '<p>住所<span>（必須）</span></p>';
echo '<input type="text" name="address" placeholder="千葉県〇〇市中央1-1-1">';
echo '<p>メールアドレス<span>（必須）</span></p>';
echo '<input type="text" name="mail" placeholder="123@gmail.com">';
echo ' <p>メールアドレス確認用<span>（必須）</span></p>';
echo '<input type="text" name="mail" placeholder="123@gmail.com">';
echo '<p>パスワード<span>（必須）</span></p>';
echo '<p class="carefulPoint"><span>半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</span></p>';
echo '<input type="password" name="password" placeholder="123456abcd">';
echo '  <p>パスワード確認用<span>（必須）</span></p>';
echo '<input type="password" name="password" placeholder="123456abcd">';
echo '<a href="entryCheck.php"><input type="submit" value="入力確認する"></a>';
echo '</form>';
?>
</div>

</section>
<?php require 'footer.php'; ?>