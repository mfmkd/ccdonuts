<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div class=logoutOutputContents>
<?php
if(isset($_SESSION['customers'])) {
    unset($_SESSION['customers']);
    echo 'ログアウトしました。';
} else {
    echo 'すでにログアウトしています。';
}
?>
</div>
<?php require 'footer.php'; ?>