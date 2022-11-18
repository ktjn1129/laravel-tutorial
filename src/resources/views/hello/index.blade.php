@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    @if (Auth::check())
    <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
    @else
    <P>※ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
    @endif
    <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection