<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/jquery-3.7.1.min (1).js"></script>
    <title>C.C.Donuts</title>
</head>

<body>
  
    <header>
        <div class="headerImgs">
            <div class="DrawerIcon" id="open_nav"><img src="images/header/PCDrawIcon.png" alt=""></div>
            <a href="topPage.php"><img src="images/header/PCheaderLogo.png" alt="" class="headerLogo"></a>
            <a href="loginInput.php"><img src="images/header/PCloginLogo.png" alt="" class="loginLogo"></a>
            <a href="cart.php"><img src="images/header/PCcartLogo.png" alt="" class="cartLogo"></a>
        </div>
        <div class="headerFrame">
            <form action="" method="post" class="headerForm">
                <div class="searchFrame"><img src="images/header/PCVector.png" alt="" class="searchWindow">
                    <input type="text" name="search" class="headerInput">
                </div>
            </form>
        </div>

        <!-- ドロワーメニュー -->
    <div class="drawerFrame" id="nav">
    <div  class="closeButton" id="close_nav"><img src="images/Drawer/PCDrawerClose.png"></div>
    <img src="images/header/PCheaderLogo.png" class="drawerLogo">
        <nav>    
            <p><a href="topPage.php">TOP</a></p>
            <p><a href="productList.php">商品一覧</a></p>
            <p><a href="">よくある質問</a></p>
            <p><a href="">問い合わせ</a></p>
            <p><a href="">当サイトのポリシー</a></p>          
        </nav>
    </div>



  


    </header>