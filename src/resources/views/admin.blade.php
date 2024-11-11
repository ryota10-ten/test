<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
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
                        <a class="header__nav--item" href="/login">logout</a>
                    </li>
                </ul>
            </nav>
    </header>
    <main class="content">
        <div class="content__title">
            Admin
        </div>
        <div class="content__form">
            <form class="search__form" action="/search" method="get">
                @csrf
                <input class="search__form--key" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください ">
                <select class="search__form--gender" name="gender">
                    <option value="">性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
                <select class="search__form--content" name="category_id">
                    <option value="">お問い合せの種類</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
                <input class="search__form--date" type="date" name="date">
                <button class="search__form--button" type="submit"> 検索</button>
                <button class="search__form--reset" type="reset">リセット</button>
            </form>
        </div>
        <div class="content__table">
            <table class="result__table">
                <tr class="table__row">
                    <th class="table__header">お名前</th>
                    <th class="table__header">性別</th>
                    <th class="table__header">メールアドレス</th>
                    <th class="table__header">お問い合せの種類</th>
                </tr>
                @foreach ($contacts as $contact)
                <tr class="table__row">
                    <td class="table__item">{{$contact['first_name']}} {{ $contact['last_name'] }}</td>
                    <td class="table__item">
                        @switch ($contact['gender'])
                            @case(1)
                            男性
                            @break
                            @case(2)
                            女性
                            @break
                            @default
                            その他
                            @endswitch
                    </td>
                    <td class="table__item">{{$contact['email']}}</td>
                    <td class="table__item">
                        @switch ($contact['category_id'])
                            @case(1)
                            商品のお届けについて
                            @break
                            @case(2)
                            商品の交換について
                            @break
                            @case(3)
                            商品トラブル
                            @break
                            @case(4)
                            ショップへのお問い合わせ
                            @break
                            @default
                            その他
                            @endswitch
                    </td>
                    <td class="table__item">詳細</td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>
</html>