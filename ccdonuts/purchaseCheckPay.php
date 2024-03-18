<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div>
        <h1 class="purchaseCheckPayTitle">ご購入確認</h1>
</div>
    <section>
        <div class="purchaseCheckPayContents">
            <h2>ご購入商品</h2>
            <div class="purchaseCheckPayFrame">
            <?php
             $total=0;
             $totalCount=0; 
             foreach ($_SESSION['products'] as $id=>$products) {
            echo '<div class="border6"></div>';    
            echo '<div class="purchaseFlex">';
            echo '<p class="purchaseFlexTitle">商品名</p>';
            echo '<p class="entryColumn2"> ',$products['name'], '</p>';
            echo '</div>';
            echo '<div class="purchaseFlex">';
            echo '<p class="purchaseFlexTitle">数量</p>';
            echo '<p class="entryColumn2"> ',$products['count'], '個</p>';
            echo '</div>';
            echo '<div class="purchaseFlex">';
            echo '<p class="purchaseFlexTitle">金額</p>';
            echo '<p class="entryColumn2">税込 ￥',$products['price'], '</p>';
            echo '</div>';
            echo '<div class="border6"></div>';
            $subtotal=$products['price']*$products['count'];/* $_SESSION['products'][$id]['price']*$_SESSION['products'][$id]['count']; */
            $total+=$subtotal;
            $totalCount+=$products['count']; 
            }
            echo '<div class="border6"></div>';
            echo '<div class="purchaseFlex">';
            echo '<p class="purchaseFlexTitle2">合計数量</p>';
            echo '<p class="entryColumn3">' ,$totalCount,'個</p>';
            echo '</div>';
            echo '<div class="purchaseFlex">';
            echo '<p class="purchaseFlexTitle2">合計金額</p>';
            echo '<p class="entryColumn3">税込　￥' ,$total,'</p>';
            echo '</div>';
            echo '<div class="border6"></div>';
            echo '</div>';
            ?>
           
            <h2>お届け先</h2>
            <div class="checkAddress">
            <div class="border6"></div>
            <?php
            if(isset($_SESSION['customers'])){
            echo '<div class="addressFlex">';
            echo '<p class="purchaseFlexTitle">お名前</p>';
            echo '<p class="entryColumn2">',$_SESSION['customers']['name'],'</p>';
            echo '</div>';
            echo '<div class="addressFlex">';
            echo '<p class="purchaseFlexTitle">郵便番号</p>';
            echo '<p class="entryColumn2">〒',$_SESSION['customers']['postcode_a'],'-',$_SESSION['customers']['postcode_b'],'</p>';
            echo '</div>';
            echo '<div class="addressFlex">';
            echo '<p class="purchaseFlexTitle">住所</p>';
            echo '<p class="entryColumn2">',$_SESSION['customers']['address'],'</p>';
            echo '</div>';
            echo '</div>';
            }
        ?>
            <div class="border6"></div>
            <h2>お支払い方法</h2>
            <div class="checkPay">
                <form action="cardEntry.php" method="post">
                <input type="submit" value="カード情報登録する">
                <p>カード情報登録がまだのお客様はこちらへお進みください。</p>
                </form>
            </div>
        </div>
    </section>
<?php require 'footer.php'; ?>