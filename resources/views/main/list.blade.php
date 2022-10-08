<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>トレーニング用品レンタル</title>
</head>
<body>
    <header>
        @include('user.include.header')
    </header>
    <main>
        <div class="list_wrapper">
            <h1>器具一覧</h1>
            <div class="list_box">
                <div class="box fade-up">
                    <img src="images/jimu007.jpg" alt="トレッドミル">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>トレッドミル</h3>
                        <h2>•使用方法</h2>
                        <h3>速度を調整しながら、ベルトコンベアの上を歩行、走行します</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu008.jpg" alt="コードレスバイク">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>コードレスバイク</h3>
                        <h2>•使用方法</h2>
                        <h3>体力レベル、運動目的に応じて負荷・脈拍設定を行い、ペダルを踏みます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu009.jpg" alt="ぶら下がり健康器">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>ぶら下がり健康器</h3>
                        <h2>•使用方法</h2>
                        <h3>ダイエットや筋トレ、姿勢矯正目的でも使用ができます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu010.jpg" alt="チェストプレス">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>チェストプレス</h3>
                        <h2>•使用方法</h2>
                        <h3>グリップを前方に押し出し大胸筋（胸の筋肉）をきたえます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu011.jpg" alt="レッグカール">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>レッグカール</h3>
                        <h2>•使用方法</h2>
                        <h3>膝を曲げハムストリングス（太ももの後部）をきたえます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu012.jpg" alt="ショルダープレス">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>ショルダープレス</h3>
                        <h2>•使用方法</h2>
                        <h3>グリップを真上に持ち上げ三角筋（肩の筋肉）をきたえます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu013.jpg" alt="アブドミナル">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>アブドミナル</h3>
                        <h2>•使用方法</h2>
                        <h3>体を曲げる動作で腹筋をきたえます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu014.jpg" alt="ラットプルダウン">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>ラットプルダウン</h3>
                        <h2>•使用方法</h2>
                        <h3>頭上にあるバーを引くことで、広背筋をきたえます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu015.jpg" alt="レッグプレス">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>レッグプレス</h3>
                        <h2>•使用方法</h2>
                        <h3>フットプレートを足で押し上げることにより、お尻の筋肉をきたえます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu016.jpg" alt="レッグエクステンション">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>レッグエクステンション</h3>
                        <h2>•使用方法</h2>
                        <h3>膝を伸ばすように持ち上げ太ももの前をきたえます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu017.jpg" alt="ハックスクワット">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>ハックスクワット</h3>
                        <h2>•使用方法</h2>
                        <h3>体を斜め後ろに傾けながら下半身の筋肉をきたえます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu018.jpg" alt="ダンベルセット">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>ダンベルセット</h3>
                        <h2>•使用方法</h2>
                        <h3>片手で持ち上げ、筋肉を追い込んでパワーを向上させます</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu019.jpg" alt="バランスボール">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>バランスボール</h3>
                        <h2>•使用方法</h2>
                        <h3>ボールの上に座り、骨盤まわりの強化と腰椎のストレッチになります</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu020.jpg" alt="トランポリン">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>トランポリン</h3>
                        <h2>•使用方法</h2>
                        <h3>全身の有酸素運動として運動不足解消にもなります</h3>
                    </div>
                </div>
                <div class="box fade-up">
                    <img src="images/jimu021.jpg" alt="ベンチプレス">
                    <div class="text">
                        <h2>•器具名</h2>
                        <h3>ベンチプレス</h3>
                        <h2>•使用方法</h2>
                        <h3>「大胸筋」「三角筋」「上腕三頭筋」など上半身の筋肉を全体的にきたえます</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="jump"><a href="{{ url('top.index') }}">Top Page</a></div>
    <main>    
    <footer>
        @include('user.include.footer')
    </footer>
    <script src="/js/index.js"></script>
</body>
</html>