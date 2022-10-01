@extends('layout.layout', ['title' => '404 Ошибка'])
@section('content')

<div class="card">
    <h2 class="card-header">Кш-кш-кш!</h2>
    <img class="cat" src="{{ asset("img/404.png") }}" alt="angreeccat">
</div>
<a href="{{ route('post.index') }}" class="mybut btn btn-outline-primary ">Вернуться на главную</a>


@endsection