<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div>
        <h1 class="productList">ログイン</h1>
</div>
<section>
        <div class="loginContents">
            <div class=loginFrame>
                <form action="loginFinish.php" method="post" class="loginForm">
                    <p class="loginText">メールアドレス</p>
                    <input type="text" name="mail">
                    <p class="loginText">パスワード</p>
                    <input type="password" name="password">
                    <input type="submit" value="ログインする">
                </form>
            </div>
            <div class="entryLink"><a href="entryPageInput.php">会員登録はこちら</a></div>
        </div>
      
    </section>
<?php require 'footer.php'; ?>