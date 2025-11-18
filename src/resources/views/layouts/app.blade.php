<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECサイト</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo" id="site-name">
                My Shop
            </div>
            <ul class="nav-menu">
                <li><a href="#home">ホーム</a></li>
                <li><a href="#products">商品</a></li>
                <li><a href="#about">ショップ概要</a></li>
                <li><a href="#contact">お問い合わせ</a></li>
            </ul><a href="#" class="cart-icon" onclick="openCart()"> 🛒 カート <span class="cart-count" id="cart-count">0</span> </a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="footer">
    <div class="footer-content">
    <form class="form">
    @csrf
        <div class="footer-section">
            <h3>会社情報</h3>
            <ul>
            <li><a href="#">会社概要</a></li>
            <li><a href="#">採用情報</a></li>
            <li><a href="#">プレスリリース</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>サポート</h3>
            <ul>
            <li><a href="/contacts">お問い合わせ</a></li>
            <li><a href="#">よくある質問</a></li>
            <li><a href="#">配送について</a></li>
            <li><a href="#">返品・交換</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>利用規約</h3>
            <ul>
            <li><a href="#">プライバシーポリシー</a></li>
            <li><a href="#">利用規約</a></li>
            <li><a href="#">特定商取引法</a></li>
            </ul>
        </div>
    </form>
    </div>
    <div class="footer-bottom">
        <p>© 2025 My Shop. All rights reserved.</p>
    </div>
    </footer>
</body>
</html>