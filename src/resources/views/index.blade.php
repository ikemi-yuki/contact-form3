@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
    <div class="contact-form__content">
        <div class="contact-form__header">
            <h2>お問い合わせ</h2>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <input class="form__input" type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}">
                    <div class="form__error">
                    @error('name')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <input class="form__input" type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}">
                    <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <input class="form__input" type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}">
                    <div class="form__error">
                    @error('tel')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__label">お問い合わせ内容</div>
                <div class="form__group-content">
                    <textarea class="form__text" name="content" placeholder="資料をいただきたいです"></textarea>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
@endsection