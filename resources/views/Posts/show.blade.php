@extends('layout.layout', ['title' => "Пост№$post->post_id. $post->title"])


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }} </h2>
                </div>
                <div class="card-body">

                    <div class="card-img card-img_max"
                        style=" background-image: url({{ $post->img ?? asset('img/non.jpg') }});"></div>
                    <div class="post_descr">Описание: {{ $post->descr }}</div>
                    <div class="card_author">Автор: {{ $post->name }}</div>
                    <div class="card-date">Пост создан: {{ $post->created_at->diffForHumans() }}</div>


                    <div class="card-btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Вернуться на главную</a>
                        
                        @auth
                        @if(Auth::user()->id == $post->author_id)
                        <a href="{{ route('post.edit', ['id' => $post->post_id]) }}"
                            class="btn btn-outline-success">Редактировать</a>
                        <form action="{{ route('post.destroy', ['id' => $post->post_id]) }}" method="post"
                            onsubmit="if(confirm('Удалить пост?')) {return true} else {return false}">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-outline-danger card-btn" type="submit" value="Удалить" />
                        @endif    
                        @endauth
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
