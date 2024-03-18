<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<?php
    unset($_SESSION['customers']);
    $pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
    $sql=$pdo->prepare('select * from customers where mail=? and password=? ');
    $sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
    //mailとパスワード確認
    $mail=$_REQUEST['mail'];
       /*
       echo '<pre>';
       print_r($_REQUEST['mail']);
       echo '</pre>'; 
       */
    foreach($sql as $row) {
        $_SESSION['customers']=['id'=>$row['id'],
                                'name'=>$row['name'],
                                 'furigana'=>$row['furigana'],
                                 'postcode_a'=>$row['postcode_a'],
                                 'postcode_b'=>$row['postcode_b'],
                                 'address'=>$row['address'],
                                 'mail'=>$row['mail'],
                                 'password'=>$row['password']];
    }
    $password=$_REQUEST['password'];
    if (preg_match('/^[a-zA-Z0-9_.+-]+[@][a-zA-Z0-9.-]+$/', $mail) && 
        preg_match('/^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{8,}$/' , $password)) {
            echo '<div>';
            echo '<h1 class="loginFinTitle">ログイン完了</h1>';
            echo '</div>';
            echo '<section>';
            echo '<div class="loginFinContents">';
            echo '<div class=loginFinFrame>';
            echo '<p>
            ',$_SESSION['customers']['name'],'さんログインが完了しました。</p>';
            echo '<p>引き続きお楽しみください。</p>';
            echo '</div>';
            echo '<div class="loginFinEntryLink"><a href="purchaseCheckPay.php">購入確認ページへすすむ</a></div>';
            echo '<div class="loginFinEntryLink"><a href="topPage.php">TOPページへもどる</a></div>';
            echo '</div>';
            echo '</section>'; 
    } else { 
        echo '<div class=loginFinFrame>';
        echo '<p>ログイン情報を正しく入力してください。</p>';
        echo '<p><a href="loginInput.php">前のページに戻る</a></p>';
        echo '</div>';
    }
               
?>        
<?php require 'footer.php'; ?>

