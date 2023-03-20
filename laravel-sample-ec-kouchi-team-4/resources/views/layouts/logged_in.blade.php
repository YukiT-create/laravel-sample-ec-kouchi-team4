@extends('layouts.default')

@section('header')
<header>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!-- ここからナビの記述 -->
<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <img src="../images/logo2.png" alt="陽はまた昇るロゴ" id="logo.png">
  <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="mainNav">
<ul class="header_nav">
        <ul class="header_nav">
        <li>こんにちは、{{ Auth::user()->name }}さん！</li>
        <li>
            <a href="{{ route('users.show', Auth::user()) }}">
                プロフィール
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="ログアウト">
            </form>
        </li>
    </ul>
  </div>
  </nav>
<!-- ここまでナビの記述 -->
</header>
@section('footer')
<!--<footer>-->
<!--    <ul class="footer_nav">-->
<!--        <li>このサイトについて</li>-->
<!--        <li>プライバシーポリシー</li>-->
<!--        <small>&copy;team4 All Rights Reserved.</small>-->
<!--    </ul>-->
<!--</footer>-->
@endsection