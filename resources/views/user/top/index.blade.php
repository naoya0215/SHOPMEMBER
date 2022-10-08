<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>トレーニング用品レンタル</title>
</head>
<body>
    <header>
        <div class="header_wrapper">
            <img src="images/loginicon.png" alt="アイコン画像">
            <div class="header_login">
                <p><a href="{{ url('user.welcome') }}">マイページ</a></p>
            </div>
        </div>
        @include('user.include.header')
    </header>
    <div class="bg">
        <div id="particles-js"></div>
    </div>
    <main>
        <div class="top_image">
            <img class="img" src="images/jimu001.jpg" alt="トレーニングジム">
            <img class="img" src="images/jimu002.jpg" alt="トレーニングジム">
            <img class="img" src="images/jimu003.jpg" alt="トレーニングジム">
            <img class="img" src="images/jimu004.jpg" alt="トレーニングジム">
            <img class="img" src="images/jimu005.jpg" alt="トレーニングジム">
            <img class="img" src="images/jimu006.jpg" alt="トレーニングジム">
        </div>
    </main>
    <footer>
        @include('user.include.footer')
    </footer>
    <script src="/js/index.js"></script>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>