@extends('layouts.not_logged_in')
 
@section('content')
 <body class=bodyLogImage>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        {{-- 入力欄をページ中央に集約およびflexを使って全体を中央に寄せる --}}
        <div class="login_field">
        <div>
          {{-- webページのタイトルロゴを挿入 --}}
          <img src="../images/logo.png" alt="陽はまた昇るロゴ" id="logo.png">
          {{--  入力欄のサイズを調整 --}}
            <label>
              メールアドレス:
              <input type="email" name="email" {{--size="30"--}}>
            </label>
        </div>
   
        <div>
            <label>
              パスワード:
              <input type="password" name="password" {{--size="35"--}}>
            </label>
        </div>
        <div><input type="submit" value="ログイン"></div>
        {{--  サインアップ画面をリンクを中央 --}}
        <p class="sign-up">サインアップは<a href="{{ route('register') }}">こちら</a>から</p>
        </div>
    </form>
  <body>
@endsection