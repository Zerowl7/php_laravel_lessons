 @extends('layout.layout', ['title' => "Пост№$post->post_id"])


 @section('content')

 <form action="{{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
 @method("PATCH")
 <h3>Редактировать</h3>
  @include('posts.parts.forms')
  <input type="submit" value="Редактировать пост" class="btn btn-outline-success">

</form>


@endsection