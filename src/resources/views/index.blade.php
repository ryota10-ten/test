<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
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
    <main class="contact">
        <div class="contact__header">Contact</div>
        <div class="form">
            <form class="contact__form" action="/confirm" method="post">
                @csrf
                <div class="contact__form--group">
                    <label class=required> お名前</label>
                    <div class="contact__form--item">
                        <div class="contact__form--list">
                            <input class="contact__form--name" type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}">
                            <div class="form__error">
                                @error('first_name')
                                {{ $message }}
                                @enderror
                            </div>
                            <input class="contact__form--name" type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}">
                            <div class="form__error">
                                @error('last_name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact__form--group">
                    <label class=required> 性別</label>
                    <div class="contact__form--item">
                        <p style="display:inline-block; width:100px;">
                            <input type="radio" name="gender" value="1" required checked="checked">男性
                        </p>
                        <p style="display:inline-block; width:100px;">
                            <input type="radio" name="gender" value="2" required>女性
                        </p>
                        <p style="display:inline-block; width:100px;">
                            <input type="radio" name="gender" value="3" required>その他
                        </p>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="contact__form--group">
                    <label class=required> メールアドレス</label>
                    <div class="contact__form--item">
                        <input class="contact__form--detail" type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}">
                        <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="contact__form--group">
                    <label class=required> 電話番号</label>
                    <div class="contact__form--item">
                        <input class="contact__form--tel" type="text" name="tel1" maxlength="4" required placeholder="080" value="{{ old('tel1') }}">
                        <div class="hyphen">-</div>
                        <input class="contact__form--tel" type="text" name="tel2" maxlength="4" required placeholder="1234" value="{{ old('tel2') }}">
                        <div class="hyphen">-</div>
                        <input class="contact__form--tel" type="text" name="tel3" maxlength="4" required placeholder="5678" value="{{ old('tel3') }}">
                        <div class="form__error">
                            @error('tel1')
                            {{ $message }}
                            @enderror
                            @error('tel2')
                            {{ $message }}
                            @enderror
                            @error('tel3')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="contact__form--group">
                    <label class=required> 住所</label>
                    <div class="contact__form--item">
                        <input class="contact__form--detail" type="text" name="address" required placeholder="例:東京都渋谷区千駄ヶ谷千駄谷1-2-3" value="{{ old('address') }}">
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="contact__form--group">
                    <label> 建物</label>
                    <div class="contact__form--item">
                        <input class="contact__form--detail" type="text" name="building" required placeholder="例:千駄谷マンション101" value="{{ old('building') }}">
                    </div>
                </div>
                <div class="contact__form--group">
                    <label class=required> お問い合せの種類</label>
                    <div class="contact__form--item">
                        <select class="contact__form--select" type="id" name="category_id" required placeholder="選択してください">
                            <option value="" selected hidden>選択してください</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category['id'] }}">
                                    {{ $category['content'] }}
                                </option>
                            @endforeach
                        </select>
                        <div class="form__error">
                            @error('category_id')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="contact__form--group">
                    <label class=required> お問い合せの内容</label>
                    <div class="contact__form--item">
                        <textarea class="contact__form--detail" type="text" name="detail" required placeholder="お問い合せ内容をご記載してください" value="{{ old('detail') }}"></textarea>
                        <div class="form__error">
                            @error('detail')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="contact__button">
                    <button class="contact__form--button" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>