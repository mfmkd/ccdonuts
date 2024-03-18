<footer>
            <div class="footerNav">
                <a href=""><p class="question">よくある質問</p></a>
                <a href=""><p class="contact">お問い合わせ</p></a>
                <a href=""><p class="policy">当サイトのポリシー</p></a>
                <a href="logoutInput.php"><p class="footerLogout">ログアウト</p></a>
            </div>
            <a href="topPage.php"><img src="images/footer/PCfooterLogo.png" alt="" class="footerLogo"></a>
            <div class="footerImgs">
                <img src="images/footer/PCfacebookLogo.png" alt="" class="facebook">
                <img src="images/footer/PCInstaLogo.png" alt="" class="Insta">
                <img src="images/footer/PCtwitterLogo.png" alt="" class="twitter">
            </div>
            <p class="copyRight">Copyright(C) 2023c.c.dounuts</p>
        </footer>
</body>
<!-- ドロワーメニューJs -->
<script>
        'use strict';
        //ハンバーガーメニュー開く
        $(document).ready(function () {
            $('#open_nav').on('click', function(){
                $('#nav').toggleClass('show');
            });
         });
            //ハンバーガーメニュー閉じる
         $(document).ready(function () {
            $('#close_nav').on('click', function(){
                $('#nav').toggleClass('show');
            });
         });
    </script>

</html>