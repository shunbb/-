<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you | FashionablyLate</title>
    <style>
        /* 基本スタイル */
        body {
            margin: 0;
            padding: 0;
            font-family: 'serif';
            background-color: #fff;
            color: #8b7969;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden; /* 背景文字がはみ出してもスクロールさせない */
            position: relative;
        }

        /* 背景の大きなThank you */
        .bg-text {
            position: absolute;
            font-size: 15rem; /* 巨大なサイズ */
            font-weight: bold;
            color: #f6f6f6; /* 非常に薄いグレー（ほぼ白） */
            z-index: 1;
            white-space: nowrap;
            user-select: none; /* テキスト選択不可にする */
        }

        /* 前面のコンテンツ */
        .content {
            position: relative;
            z-index: 2; /* 背景文字より前に出す */
            text-align: center;
        }

        .message {
            font-size: 1.2rem;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .home-btn {
            display: inline-block;
            background-color: #8b7969;
            color: #fff;
            text-decoration: none;
            padding: 10px 40px;
            font-size: 0.9rem;
            border: none;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .home-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div class="bg-text">Thank you</div>

    <div class="content">
        <div class="message">お問い合わせありがとうございました</div>
        <a href="/contact" class="home-btn">HOME</a>
    </div>

</body>
</html>
