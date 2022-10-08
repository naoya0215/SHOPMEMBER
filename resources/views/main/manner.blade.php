<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/manner.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>トレーニング用品レンタル</title>
</head>
<body>
    <header>
        @include('user.include.header')
    </header>
    <main>
      <div class="bg">
          <div id="particles-js"></div>
      </div>
        <div class="list_wrapper">
            <h1>レンタル方法</h1>
            <div class="list_box">
                <div class="list_title">
                    <h2>STEP1</h2>
                    <p>・ログインする<br>
                </div>
                <div class="list_menu">
                    <img src="images/loginicon.png" alt="ログインアイコン">
                    <p>アカウントの作成がお済みでない場合は<br>新規登録から行ってください。</p>
                </div>    
            </div>
            <div class="list_box">
                <div class="list_title">
                    <h2>STEP2</h2>
                    <p>・商品を選ぶ<br>
                </div>
                <div class="list_menu">
                    <img src="images/rental002.jpg" alt="カートの写真">
                    <p>ご希望の商品をお選びください。</p>
                </div>
            </div>
            <div class="list_box">
                <div class="list_title">
                    <h2>STEP3</h2>
                    <p>・カートに入れる<br>
                </div>
                <div class="list_menu">
                    <img src="images/rental003.jpg" alt="カートの写真">
                    <p>数量を選択しカートに入れてください<br><span>※レンタルする商品の確認画面へ移ります。</span></p>
                </div>
            </div>
            <div class="list_box">
                <div class="list_title">
                    <h2>STEP4</h2>
                    <p>・レンタル完了<br>
                </div>
                <div class="list_menu">
                    <img src="images/rental004.jpg" alt="レンタル完了">
                    <p>最後にレンタルするをお選びください。</p>
                </div>
            </div>
        </div>
        <div class="jump"><a href="{{ url('top.index') }}">Top Page</a></div>
    <main>
    <footer>
        @include('user.include.footer')
    </footer>
    <script src="/js/index.js"></script>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
