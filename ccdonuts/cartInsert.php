<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<section>
<div class="cart">
<?php
    $id=$_REQUEST['id'];
    if (!isset($_SESSION['products'])) {
                $_SESSION['products']=[];
    }
    $count=0;
    if(isset($_SESSION['products'][$id])) {
      $count=$_SESSION['products'][$id]['count'];
    }

    $_SESSION['products'][$id]=['name'=>$_REQUEST['name'],
                                'price'=>$_REQUEST['price'],
                                'count'=>$count+$_REQUEST['count'],
                                'id'=>$_REQUEST['id']];
                                 /*      echo '<pre>';
                                      print_r($_REQUEST['name']);
                                      echo '</pre>'; 
                                      echo '<pre>';
                                      print_r($count+$_REQUEST['count']);
                                      echo '個</pre>';  */
                                  /*  echo '<pre>';
                                      print_r($_REQUEST['price']);
                                      echo '</pre>'; */ 
                                    /*echo '<pre>';
                                      print_r($_REQUEST['id']);
                                      echo '</pre>'; 
                                      */
        echo '<p>カートに商品を追加しました。</p>';
        echo '<hr>';
?>
</div>
<div class="returnList"><a href="productList.php">商品一覧に戻る</a></div>
</section>
<?php require 'footer.php'; ?>


