<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<section>
        <div class="productDetail">
            <?php     
            $pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
            $sql=$pdo->prepare('select * from products where id=?');
            $sql->execute([$_REQUEST['id']]);
            foreach ($sql as $row) {
                echo '<form action="cartInsert.php" method="post">';
                echo '<div class=productDetailFlex>';
                echo '<img src="../ccdonuts/images/productList/', $row['id'],'.png" class="CCdonuts">';
                echo '<div class="productDetailRight">';
                echo '<h3>', $row['name'], '</h3>';
                echo '<div class="border2"></div>';
                echo '<p class="productDetailText">', $row['introduction'], '</p>';
                echo '<div class="border2"></div>';
                echo '<p class="productDetailPrice">税込￥ ' ,$row['price'], '</p>';
                echo '<div class="countAndtext">';
                echo '<select name="count" class="productDetailCount">';
                for($i=1; $i<=10; $i++) {
                    echo '<option value="' , $i, '">', $i, '</option>';
                }
                echo '</select>';
                echo '<div class="ko">個</div>';
                echo '<input type="submit" value="カートに入れる" class="detailCart">';
                echo '<input type="hidden" name="id" value="' ,$row['id'], '">';
                echo '<input type="hidden" name="name" value="' ,$row['name'], '">';
                echo '<input type="hidden" name="price" value="' ,$row['price'], '">';
                echo '</form>';
                echo '<p class="fav"><img src="../ccdonuts/images/productDetail/favorite.png"></p>';
                echo '</div>';
                echo '</div>';
            }
            ?>   
        </div>
    </section>
<?php require 'footer.php'; ?>