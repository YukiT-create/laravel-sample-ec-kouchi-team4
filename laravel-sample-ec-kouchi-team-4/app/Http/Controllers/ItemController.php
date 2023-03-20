<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use App\Http\Requests\ItemImageUpdateRequest;
use App\Services\FileUploadService;

class ItemController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $categories = Category::all();
        return view('items.create', [
           'title' => '商品を出品',
           'categories' => $categories,
        ]);
    }

    public function store(ItemCreateRequest $request, FileUploadService $service)
    {
        //画像投稿処理
        $filename = $service->saveImage($request->file('image'), 'photos');

        $parameters = $request->only([
            'name',
            'description',
            'category_id',
            'price',
            'stock'
        ]);
        $parameters['image'] = $filename;

        $item = Item::create($parameters);

        \Session::flash('success', '商品を追加しました');
        return redirect()->route('admin');
    }

    // public function show(Item $item)
    // {
    //     return view('items.show', [
    //         'title' => '商品詳細',
    //         'item'  => $item,
    //     ]);
    // }
    
    public function show($id)
    {
        return view('items.show', [
            'title' => '商品詳細',
            'item'  => Item::find($id),
        ]);
    }
    

    public function edit(Item $item)
    {
        return view('items.edit', [
            'title' => '商品情報の編集',
            'item'  => $item,
            'categories' => Category::all(),
        ]);
    }
    
    public function update(ItemUpdateRequest $request, Item $item)
    {
        $item->update($request->only([
            'name',
            'description',
            'category_id',
            'price',
            'stock',
        ]));
        return redirect()->route('items.show', $item);
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin');
    }
    
    public function editImage(Item $item)
    {
        return view('items.edit_image', [
            'title' => '商品画像の変更',
            'item'  => $item,
        ]);
    }
    
    public function updateImage(Item $item, ItemImageUpdateRequest $request, FileUploadService $service){
    
        //画像投稿処理
        $filename = $service->saveImage($request->file('image'), 'photos');
    
        // 変更前の画像の削除
        if($item->image !== ''){
          \Storage::disk('public')->delete('photos/' . $item->image);
        }
    
        $item->update([
            'image' => $filename,
        ]);
        return redirect()->route('items.show', $item);
    }
}
