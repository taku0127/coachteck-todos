@extends('layouts/app')
@section('title','indexページ')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
@section('content')
<div class="alert">Todoを作成しました</div>
<div class="contents">
    <form action="" method="post">
        @csrf
        <div class="form">
            <input type="text" name="todo" >
            <button type="submit">作成</button>
        </div>
    </form>
    <div class="todos">
        <div class="todos_title">
            Todo
        </div>
        <div class="todos_lists">
            <div class="todos_list">
                <p class="todos_item">test</p>
                <div class="todos_btns">
                    <a href="" class="todos_btn">更新</a>
                    <a href="" class="todos_btn --delete">削除</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
