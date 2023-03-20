<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class Admin extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function __invoke(){
        
        if(\Auth::user()->email !== 'admin@admin.com'){
            return redirect()->route('top');
        }
        $items = Item::orderBy('created_at', 'desc')->get();
        return view('admin', [
            'title' => '管理画面',
            'items' => $items,
        ]);
    }
}
