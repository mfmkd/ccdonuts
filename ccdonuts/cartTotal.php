<?php
    if (!empty($_SESSION['products'])) {       
   
    echo '<div class="cartContents">';
    echo '<p class="purchaseCount">現在　商品',$totalCount,'点</p>';
    echo '<p class="subTotal">ご注文小計：税込<span>￥',$total,'</span></p>';
    echo '<div class="purchaseCheck">';
    echo '<p><a href="purchaseCheckPay.php"><input type="submit" value="購入確認へ進む"></a></p>';
    echo '</div>';
    echo '</div>';
  
    }
?>