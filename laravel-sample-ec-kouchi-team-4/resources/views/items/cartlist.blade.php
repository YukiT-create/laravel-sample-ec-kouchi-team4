<!--カート画面（仮）-->
@extends('layouts.logged_in')

@section('title', $title)

@section('content')
    <h1>{{$title}}</h1>
    <div>
    <table>
        <caption>ご注文内容</caption>
        <thead>
            <tr>
                <th>商品名</th>
                <th>単価（税込）</th>
                <th>数量</th>
                <th>小計</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>商品写真</td>
                <td>商品名</td>
                <td>単価</td>
                <td>数量<input type="text" name="count" value="1" id="count" maxlength="5" size="2"></td>
                <td>小計</td>
                <td>取り消し<input type="image" name="cancel" id="submit"></td>
            </tr>
        </tbody>
    </table>
    <span>合計金額を再計算／かごを空にする</span>
    <div>
        <table>
            <tbody>
                <tr>
                    <th>数量</th>
                    <td>1</td>
                </tr>
                <tr>
                    <th>商品合計</th>
                    <td>¥100</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <div>買い物を続ける</div>
    <div>購入手続きへ進む</div>
    <footer></footer>
@endsection    