<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div class=cartBody>
<div class="cartDetail">
<?php
/* 再計算機能 */
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['recalculate'])) {
    foreach ($_SESSION['products'] as $productId => $products) {
        if (isset($_POST['quantity'][$productId])) {
            $quantity = $_POST['quantity'][$productId];
            $_SESSION['products'][$productId]['count'] = $quantity;
        }
    }
}
/* echo '<pre>';
print_r($_POST);
echo '</pre>'; */
// header("Location: cart.php");
// exit;
?>
          <?php
            if (!empty($_SESSION['products'])) {
            /* 
            echo '<section>';
            echo '<div class="cartContents">';
            echo '<p class="purchaseCount">現在　商品点</p>';
            echo '<p class="subTotal">ご注文小計：税込<span>￥</span></p>';
            echo '<div class="purchaseCheck">';
            echo '<p><a href="purchaseCheckPay.php"><input type="submit" value="購入確認へ進む"></a></p>';
            echo '</div>';
            echo '</div>';
            echo '</section>'; 
            */
            $total=0;
            $totalCount=0; 
         
            foreach ($_SESSION['products'] as $id=>$products) {
                echo '<section>';
                echo '<div class="cart">';             
                echo '<p class="cartImg"><img src="images/productList/', $products['id'], '.png"></p>';
                echo '<div class="cartText">';
                echo '<p class="cartTitle">', $products['name'], '</p>';
                echo '<div class="border3"></div>';
                echo '<div class="priceAndItems">';
                echo '<p class="singleItemPrice">税込 ￥' , $products['price']*$products['count'] /* $_SESSION['products'][$id]['price'] */, '</p>';
                echo '<form action="" method="post">';//action空白で同ページへ送信
                echo '<div class="items">';
                echo '<div class="item1">数量</div>';
                echo <<<HTML
                <input type="number" name="quantity[{$products['id']}]" value="{$products['count']}" min="1" class="cartCount">
                <input type="hidden" name="id" value="{$products['id']}">
                HTML;
                //echo '<input type="number" name="newAmount" value="', $products['count'] /* $_SESSION['products']['$id']['count'] */,'"  min="1" ">';
                //echo '<input type="hidden" name="id" value="', $products['id'], '">';
                $subtotal=$products['price']*$products['count'];/* $_SESSION['products'][$id]['price']*$_SESSION['products'][$id]['count']; */
                $total+=$subtotal;
                $totalCount+=$products['count']; 
                echo '<div class="item2">個</div>';
                echo '</div>';
                echo '<div class="recalc"><input type="submit" name="recalculate" value="再計算"></div>';
                echo '</form>';
                echo '</div>';
                echo '<div class="deleteButton"><a href="cartDelete.php?id=', $id, '">削除する</a></div>';
                echo '<div class="border4"></p>';
                echo '</div>';
                echo '</div>';
                echo '</section>';
            }
            }else {
                echo '<p class="noCart">カートに商品がありません。</p>';
            }       
        /*  echo '<pre>';
            print_r($_POST);
            echo '</pre>';  */
            ?>
<section class="cartTotalUp">
<?php require 'cartTotal.php'; ?>
</section>
<?php require 'cartTotal.php'; ?>

 <!-- 買い物を続ける -->
        <section>
            <p class="shoppingContinueContents">
                <a href="productList.php"><input type="submit" value="買い物を続ける" class="shoppingContinue"></a>
            </p>
        </section>
    </div>
</div>

<?php require 'footer.php'; ?>


