<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<?php
unset($_SESSION['products'][$_REQUEST['id']]);
echo '<div class=cart>';
echo 'カートから商品を削除しました。';
echo '<hr>';
echo '</div>';
/* echo 'cart.php'; */
        echo '<pre>';
        print_r($_SESSION['products']);
        print_r($_REQUEST['id']);
        echo '</pre>';
?>
<div class="returnList"><a href="cart.php">カートに戻る</a></div>
<?php require 'footer.php'; ?>