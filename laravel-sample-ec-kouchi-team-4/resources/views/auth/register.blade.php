@extends('layouts.not_logged_in')
 
@section('content')
​
  <form method="POST" action="{{ route('register') }}">
    @csrf
    {{--  入力欄をページ中央に集約 --}}
    <div class="signup_field">
      {{--  webページのタイトルロゴを挿入 --}}
      <img src="../images/logo.png" alt="陽はまた昇るロゴ" class="logo.png">
    <div>
      <label>
        ユーザー名:
        <input type="text" name="name" size="30">
      </label>
    </div>
 
    <div>
      <label>
        メールアドレス:
        <input type="email" name="email" size="30">
      </label>
    </div>
 
    <div>
      <label>
        パスワード:
        <input type="password" name="password" size="30">
      </label>
    </div>
 
    <div>
      <label>
        パスワード（確認用）:
        <input type="password" name="password_confirmation" size="30">
      </label>
    </div>
 
    <div>
      <input type="submit" value="登録">
      <p>ログインは<a href="{{ route('login') }}">こちら</a></p>
    </div>
    </div>
  </form>
@endsection