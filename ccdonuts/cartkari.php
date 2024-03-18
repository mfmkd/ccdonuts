<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
foreach ($_SESSION['products']['$id'] as $id=>$products) {
echo '<option value"', $products,'">', $id, '</option>';}
?>
<?php require 'footer.php'; ?>