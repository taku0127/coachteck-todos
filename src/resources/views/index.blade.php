@extends('layouts/app')
@section('title','indexページ')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
@section('content')
@if (session('message'))
<div class="alert">{{ session('message') }}</div>
@endif
@error('content')
<div class="alert --danger">{{ $errors->first('content') }}</div>
@enderror
<div class="contents">
    <form action="/todos" method="post">
        @csrf
        <div class="form">
            <input type="text" name="content" value="{{old('content')}}">
            <button type="submit">作成</button>
        </div>
    </form>
    <div class="todos">
        <div class="todos_title">
            Todo
        </div>
        <div class="todos_lists">
            @foreach($todos as $todo)
            <div class="todos_list">
                <p class="todos_item">{{$todo['content']}}</p>
                <div class="todos_btns">
                    <a href="" class="todos_btn">更新</a>
                    <a href="" class="todos_btn --delete">削除</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
