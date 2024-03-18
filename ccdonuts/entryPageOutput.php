<!-- このページは入力画面確認仮用→entrycheck.phpを使う -->


<?php session_start() ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<?php

$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
if (isset($_SESSION['customers'])) {
    $id=$_SESSION['customers']['id'];
    $sql=$pdo->prepare('select * from customers where id!=? and mail=?');
    $sql->execute([$id, $_SESSION['customers']['mail']]);
} else {
    $sql=$pdo->prepare('select * from customers where mail=?');
    $sql->execute([$_SESSION['customers']['mail']]);
/*     echo '<pre>';
    print_r($_REQUEST['mail']);
    echo '</pre>'; */
}
/* $password=$_REQUEST['password'];
if (!preg_match('/^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{8,}$/', $password)){
  echo 'パスワードは適切ではありません。';
}
$mail=$_REQUEST['mail'];
if (!preg_match('/^[a-z0-9].*[a-z0-9.-_]@[a-z].* $/', $mail)){
  echo 'メールアドレスが適切ではありません。';
} */

if (empty($sql->fetchAll())) {
        $sql=$pdo->prepare('insert into customers values(null,?,?,?,?,?,?,?)');
        $sql->execute([$_SESSION['customers']['name'], $_SESSION['customers']['furigana'] ,$_SESSION['customers']['postcode_a'],
                       $_SESSION['customers']['postcode_b'],$_SESSION['customers']['address'],$_SESSION['customers']['mail'],$_SESSION['customers']['password']]);
        /* $sql->execute([$_REQUEST['name'], $_REQUEST['furigana'], $_REQUEST['postcode_a'],
                       $_REQUEST['postcode_b'], $_REQUEST['address'], $_REQUEST['mail'], $_REQUEST['password']]); */
    echo '<div>';
    echo '<h1 class="entryFinTitle">会員登録完了</h1>';
    echo '</div>';
    echo '<section>';
    echo '<div class="entryFinContents">';
    echo '<div class=entryFinFrame>';
    echo '<p>会員登録が完了しました。</p>';             
    echo '<p>ログインページへお進みください。</p>';
    echo '</div>';
    echo '<div class="loginFinEntryLink"><a href="cardEntry.php">クレジットカード情報へすすむ</a></div>';
    echo '<div class="loginFinEntryLink"><a href="purchaseCheckPay.php">購入確認ページへもどる</a></div>';
    echo '</div>';
    echo '</section>';
    } else {
    echo 'ログイン名がすでに使用されていますので、変更してください。';
}
?>
<?php require 'footer.php'; ?>

