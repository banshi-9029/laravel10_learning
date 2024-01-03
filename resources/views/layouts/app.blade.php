<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP学習</title>
    <link rel="stylesheet" href="/css/layouts.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <a href="/top" class="site-title">ホーム</a>
        <div class="site-menu">
            <a href="/articles" class="site-menu-colum">
                <div class="site-menu-colum-title">ブログ</div>
            </a>
            <a href="/calendar" class="site-menu-colum">
                <div class="site-menu-colum-title">カレンダー</div>
            </a>
            <a href="/" class="site-menu-colum">
                <div class="site-menu-colum-title">サンプル</div>
            </a>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        &copy; PHP学習
    </footer>
</body>
</html>