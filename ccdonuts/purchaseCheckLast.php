<?php require 'header.php'; ?>
<?php require 'topFix.php'; ?>
<div>
        <h1 class="purchaseCheckPayTitle">ご購入確認</h1>
    </div>
    <section>
        <div class="purchaseCheckPayContents">
            <h2>ご購入商品</h2>
            <div class="purchaseCheckPayFrame">
                <div class="purchaseFlex">
                    <p>商品名</p>
                    <p class="entryColumn2"><!-- 回答 --></p>
                </div>
                <div class="purchaseFlex">
                    <p>数量</p>
                    <p class="entryColumn2"><!-- 回答 --></p>
                </div>
                <div class="purchaseFlex">
                    <p>金額</p>
                    <p class="entryColumn2"><!-- 回答 --></p>
                </div>

            </div>

            <h2>お届け先</h2>
            <div class="checkAddress">
                <div class="addressFlex">
                    <p>お名前</p>
                    <p class="entryColumn2"><!-- 回答 --></p>
                </div>
                <div class="addressFlex">
                    <p>郵便番号</p>
                    <p class="entryColumn2"><!-- 回答 --></p>
                </div>
                <div class="addressFlex">
                    <p>住所</p>
                    <p class="entryColumn2"><!-- 回答 --></p>
                </div>
            </div>
            <h2>お支払い方法</h2>
            <div class="checkPay">
                <div class="payFlex">
                    <p>お支払い</p>
                    <p class="entryColumn2"><!-- 回答 --></p>
                </div>
                <div class="payFlex">
                    <p>ブランド</p>
                    <p class="entryColumn2"><!-- 回答 --></p>
                </div>
                <div class="LastcheckButton">
                    <form>
                        <input type="submit" value="購入を確定する">
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require 'footer.php'; ?>