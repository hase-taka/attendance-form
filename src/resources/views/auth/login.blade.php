@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('content')
<div class="login-form">
    <h2 class="login-form__head-title">ログイン</h2>
    <div login-form__inner>
        <form class="login-form__form" action="">
        @csrf
            <div class="login-form__group">
                <input class="login-form__input" type="mail" name="email" id="email" placeholder="メールアドレス">
                <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="login-form__group">
                <input class="login-form__input" type="password" name="password" id="password" placeholder="メールアドレス">
                <p class="register-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <input class="login-form__btn" type="submit" value="ログイン">
        </form>
        <div class="register-transition__form">
            <p class="register-nav">アカウントをお持ちでない方はこちらから</p>
            <a class="register-transition__btn" href="/register">会員登録</a>
        </div>
    </div>
</div>
@endsection