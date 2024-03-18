<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div>
        <h1 class="cardCheckTitle">入力情報登録</h1>
    </div>
    <section>
        <div class="cardCheckContents">
            <form action="cardEntryFinish.php" method="post">
                <p>お名前</p>
                <p class="entryColumn"><?php echo $_POST['name']; ?></p>
                <p>カード番号</p>
                <p class="entryColumn"><?php echo $_POST['cardNumber']; ?></p>
                <p>カード会社</p>
                <div class="cardCompanyButton">
                    <p class="entryColumn"><?php echo $_POST['cardCompany']; ?></p>
                </div>
                <p>有効期限</p>
                <p class="entryColumn"><?php echo $_POST['cardLimit_m']; ?>月</p>
                <p class="entryColumn"><?php echo $_POST['cardLimit_y']; ?>年</p>
                <p>セキュリティコード</p>
                <p class="entryColumn"><?php echo $_POST['securityCode']; ?></p>
                <input type="submit" value="入力確認する">
            </form>
        </div>

    </section>

<?php require 'footer.php'; ?>