<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header">
        <div class="header__logo">
            FashionablyLate
        </div>
    </header>
    <main class="confirm">
        <div class="confirm__header">Confirm</div>
        <form class=form action="/process" method="post">
            @csrf
            <div class="confirm__content">
                <table class="confirm__table">
                    <tr class="confirm__table--row">
                        <th class="confirm__table--header">お名前</th>
                        <td class="confirm__table--item">
                            <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                            <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm__table--row">
                        <th class="confirm__table--header">性別</th>
                        <td class="confirm__table--item">
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
                            <input type="hidden" name="gender" value="{{$contact['gender'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm__table--row">
                        <th class="confirm__table--header">メールアドレス</th>
                        <td class="confirm__table--item">
                            <input type="text" name="email" value="{{$contact['email'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm__table--row">
                        <th class="confirm__table--header">電話番号</th>
                        <td class="confirm__table--item"><input type="text" name="tell" value="{{$contact['tel1'].$contact['tel2'].$contact['tel3'] }}" readonly></td>
                    </tr>
                    <tr class="confirm__table--row">
                        <th class="confirm__table--header">住所</th>
                        <td class="confirm__table--item">
                            <input type="text" name="address" value="{{$contact['address'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm__table--row">
                        <th class="confirm__table--header">建物名</th>
                        <td class="confirm__table--item">
                            <input type="text" name="building" value="{{$contact['building'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm__table--row">
                        <th class="confirm__table--header">お問い合せの種類</th>
                        <td class="confirm__table--item">
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

                            <input type="hidden" name="category_id" value="{{$contact['category_id'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm__table--row">
                        <th class="confirm__table--header">お問い合せの内容</th>
                        <td class="confirm__table--item">
                            <input type="text" name="detail" value="{{$contact['detail'] }}" readonly>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="confirm__button">
                <button class="confirm__button--submit" name="action" type="submit" value="send">送信</button>
                <button class="confirm__button--edit" name="action" type="submit" value="edit">修正</button>
            </div>
        </form>
        </div>
    </main>
</body>
</html>