<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class Market extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function __invoke(Request $request){
        $keyword = $request->input('keyword');
        $items = Item::where('name','like','%'.$keyword.'%')->orderBy('created_at', 'desc')->get();
        $items = Item::where('description','like','%'.$keyword.'%')->orderBy('created_at', 'desc')->get();

        return view('market', [
            'title' => 'Market',
            'items' => $items,
        ]);
    }
}
