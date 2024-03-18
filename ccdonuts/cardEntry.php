<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
  <!-- 商品一覧コンテンツ -->
  <div>
        <h1 class="cardEntryTitle">カード情報登録</p>
    </div>
    <section>
        <div class="cardEntryContents">
            <form action="cardCheck.php" method="post">
                <p>お名前<span>（必須）</span></p>
                <input type="text" name="name" placeholder="ドーナツ太郎">
                <p>カード番号<span>（必須）</span></p>
                <input type="text" name="cardNumber" placeholder="123456789123">
                <p>カード会社<span>（必須）</span></p>
                <div class="cardCompanyButton">
                    <p><input type="radio" name="cardCompany" value="JCB" checked>JCB</p>
                    <p><input type="radio" name="cardCompany" value="Visa">Visa</p>
                    <p><input type="radio" name="cardCompany" value="Mastercard">Mastercard</p>
                </div>
                <p>有効期限<span>（必須）</span></p>
                <input type="text" name="cardLimit_m" placeholder="4">月
                <input type="text" name="cardLimit_y" placeholder="25">年
                <p>セキュリティコード<span>（必須）</span></p>
                <input type="password" name="securityCode" placeholder="123456">
                <input type="submit" value="入力確認する">
            </form>
        </div>

    </section>
<?php require 'footer.php'; ?>