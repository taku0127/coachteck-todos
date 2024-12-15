<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoContoroller extends Controller
{
    //
    function index(){
        // todoを全件取得する
        $todos = Todo::all();
        return view('index',['todos' => $todos]);
    }

    function store(TodoRequest $request){
        // todoをDBに保存する
        $form = $request->all();
        Todo::create($form);
        return redirect('/')->with('message', 'Todoを作成しました。');
    }
}
