@extends('layouts.logged_in')

@section('content')
    {{--<h1>{{ $title }}</h1>--}}
    <div class="product container">    
    <dl>
        <dt class="product_title">商品名</dt>
        <dd class="product_name">{{ $item->name }}</dd>
        <!--<dt>画像</dt>-->
        <!--下のclassは画像表示のために適当に付けただけです、後で変更してください-->
        <dd class={{--"item_image"--}}"col-5 item_figure"> 
            @if($item->image !== '')
                <img src="{{ secure_asset($item->image) }}" class="product_img">
            @else
                <img src="{{ secure_asset('images/no_image.png') }}">
            @endif
            @if($item->user_id === Auth::user()->id)
                <a href="{{ route('items.edit_image', $item) }}">
                    画像を変更
                </a>
            @endif
        </dd>
        {{--<dt>カテゴリ</dt>--}}
        {{--<dd>{{ $item->category->name }}</dd>--}}
        {{--<dd>{{ $item->name }}</dd>--}}
        <dt class="product_title">価格</dt>
        <dd class="product_name">{{ $item->price }}円</dd>
        <!--<dt class="product_title">説明</dt>-->
        <dd class="product_discription">{{ $item->description }}</dd>
    </dl>
    <form method="POST" {{--action="{{ route('line_item.create') }}"--}}>
            @csrf
            <input type="hidden" name="id" {{--value="{{ $item->id }}"--}}/>
            <div class="product_quantity">
                <input type="number" name="quantity" min="1" value="1" require/>
            </div>
            <div class="product_cart">
                <button type="submit" class="btn btn-outline-secondary">カートに入れる</button>
            </div>
    </form>
    <a href="#{{--{{ route('item.index') }}--}}">TOPへ戻る<a>
    
    </div>
@endsection