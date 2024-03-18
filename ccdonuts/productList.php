<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div>
        <h1 class="productList">商品一覧</p>
</div>
    <!-- メインメニュー -->
    <section>
        <div class="mainMenuContents">
            <h2>メインメニュー</h2>
            <div class="menuList">
                <?php 
                $pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
             /* $sql=$pdo->prepare('select * from product where id=?'); 
                $sql->execute([$_REQUEST['id']]);
                foreach ($sql as $row)*/
                $n=1;
                foreach ($pdo->query('select * from products') as $row ) {
                    if($row['id']<=6){
                    echo '<div class="menu$n">';
                          $n+1;
                    echo '<p><a href="productDetail1.php?id=', $row['id'], '"><img src="../ccdonuts/images/productList/', $row['id'],'.png" class="menuImg"></a></p>';
                    echo '<form action="cartInsert.php" method="post">';
                    echo '<p class="productName">', $row['name'], '</p>';
                    echo '<p class="rankPrice">税込 ￥', $row['price'], '</p>';
                    echo '<input type="hidden" name="id" value="' ,$row['id'], '">';
                    echo '<input type="hidden" name="name" value="' ,$row['name'], '">';
                    echo '<input type="hidden" name="price" value="' ,$row['price'], '">';
                    echo '<input type="hidden" name="count" value="1">';
                    echo '<p class="rankCart"><input type="submit" value="カートに入れる"></p>';
                    echo '</form>';
                    echo "\n";
                    echo '</div>';
                    }
                }
                ?>      
            </div>
        </div>
    </section>
    <!-- バラエティーメニュー -->
   <section>
        <div class="varietyMenuContents">
            <h2>バラエティメニュー</h2>
            <div class="menuList">
            <?php
                $n=1;
                foreach ($pdo->query('select * from products') as $row ) {
                    if($row['id']>6){
                    echo '<div class="menu$n">';
                         $n+1;
                    echo '<form action="cartInsert.php" method="post">';
                    echo '<form action="cartInsert.php" method="post">';
                    echo '<p><a href="productDetail1.php?id=', $row['id'], '"><img src="../ccdonuts/images/productList/', $row['id'],'.png" class="menuImg"></a></p>';
                    echo '<form action="cartInsert.php" method="post">';
                    echo '<p class="productName">', $row['name'], '</p>';
                    echo '<p class="rankPrice">税込 ￥', $row['price'], '</p>';
                    echo '<input type="hidden" name="id" value="' ,$row['id'], '">';
                    echo '<input type="hidden" name="name" value="' ,$row['name'], '">';
                    echo '<input type="hidden" name="price" value="' ,$row['price'], '">';
                    echo '<input type="hidden" name="count" value="1">';
                    echo '<p class="rankCart"><input type="submit" value="カートに入れる"></p>';
                    echo '</form>';
                    echo "\n";
                    echo '</div>';
                    }
                }
                ?>  
            </div>
        </div>
    </section>
<?php require 'footer.php'; ?>