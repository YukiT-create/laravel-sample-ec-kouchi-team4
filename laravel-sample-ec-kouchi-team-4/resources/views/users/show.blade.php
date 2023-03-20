@extends('layouts.logged_in')

@section('content')
    <h1>{{ $title }}</h1>

    <p>{{ $user->name }} さん</p>

    <h2>購入履歴</h2>

@endsection