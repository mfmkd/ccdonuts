<?php session_start() ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div>
    <h1 class="entryCheckTitle">入力確認</h1>
</div>
    <section>
        <div class="entryCheckContents">


        <?php
       $_SESSION['customers']['name']=$_REQUEST['name'];
       $_SESSION['customers']['furigana']=$_REQUEST['furigana'];
       $_SESSION['customers']['postcode_a']=$_REQUEST['postcode_a'];
       $_SESSION['customers']['postcode_b']=$_REQUEST['postcode_b'];
       $_SESSION['customers']['address']=$_REQUEST['address'];
       $_SESSION['customers']['mail']=$_REQUEST['mail'];
       $_SESSION['customers']['password']=$_REQUEST['password'];
        if(isset($_SESSION['customers'])){
            echo '<p>お名前</p>';
            echo '<p class="entryColumn">',$_SESSION['customers']['name'],'</p>';
            echo '<p>お名前（フリガナ）</p>';
            echo '<p class="entryColumn">',$_SESSION['customers']['furigana'],'</p>';
            echo '<p>郵便番号</p>';
            echo '<p class="entryColumn">〒',$_SESSION['customers']['postcode_a'],'-',$_SESSION['customers']['postcode_b'],'</p>';
            echo '<p>住所</p>';
            echo '<p class="entryColumn">',$_SESSION['customers']['address'],'</p>';
            echo '<p>メールアドレス</p>';
            echo '<p class="entryColumn">',$_SESSION['customers']['mail'],'</p>';   
            echo '<p>メールアドレス確認用</p>';
            echo '<p class="entryColumn">',$_SESSION['customers']['mail'],'</p>';
      /*    echo '<p>パスワード</p>';
            echo '<p class="entryColumn"> </p>';
            echo '<p>パスワード確認用</p>'; 
            echo '<p class="entryColumn"> </p>'; */
            echo '<a href="entryPageOutput.php"><input type="submit" value="入力確認する"></a>';
            
        }
 /*        echo '<pre>';
        print_r($_SESSION['customers']);
        echo '</pre>';  */
        ?>            
        </div>
    </section>
<?php require 'footer.php'; ?>