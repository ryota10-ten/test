<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header">
            <h1 class="header__title">
                FashionablyLate
            </h1>
            <nav class="header__nav">
                <ul>
                    <li>
                        <a class="header__nav--item" href="/register">register</a>
                    </li>
                </ul>
            </nav>
    </header>
    <main class="content">
        <div class="content__title">
            login
        </div>
        <div class="content__main">
            <form class="content__form" action="/admin" method="post">
                @csrf
                <label class="content__form--label">メールアドレス</label>
                <input class="content__form--item" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>

                <label class="content__form--label">パスワード</label>
                <input class="content__form--item" type="password" name="password" placeholder="例: coachtech1106" value="{{ old('password') }}">

                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <button class="button__login" type="submit">
                    ログイン
                </button>
            </form>
        </div>
    </main>
</body>
</html>