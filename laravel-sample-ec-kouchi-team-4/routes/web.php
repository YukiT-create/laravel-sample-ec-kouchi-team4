<?php

// ユーザー認証関連
Auth::routes();

// プロフィール詳細
Route::resource('users', 'UserController')->only(['show']);

// トップページ
Route::get('/', 'Market')->name('top');
// いずれ分けるかもしれないが現時点ではトップページが一覧を兼ねる。
Route::get('/items', 'Market');

// 商品 詳細 / 追加 / 編集
Route::resource('items', 'ItemController');

Route::get('/admin', 'Admin')->name('admin');


// 画面確認用のためのルート
Route::get('/cartlist', function() {
    return view ('items.cartlist',[
        'title' => 'ショッピングカート',
        ]);
});

Route::get('/user_registration', function(){
    return view('layouts.user_registration', [
        'title' => 'ユーザー登録',
    ]);
});
