{{--Дополняем шаблон--}}
@extends('layout')
{{--Добавляем переменную из класса--}}
@section('title')
    {{$title}}
@endsection

@section('main_content')
    <h2>О нас</h2>
@endsection
