<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/flow1.png') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="container collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="col-6 navbar-nav mr-auto">

      <li class="nav-item active ">
        <a class="nav-link" href="{{ route('post.index') }}">Главная <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active offset-2">
        <a class="nav-link" href="{{ route('post.create') }}">Создать пост <span class="sr-only">(current)</span></a>
      </li>
      

    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{ route('post.index') }}">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Найти пост ..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
    </form>
  </div>
</nav>

<div class="container">

@if($errors->any())
  @foreach ($errors->all() as $error )
      
  @endforeach
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ $error }}
    <strong></strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif


  @if (session('suc'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('suc') }}
    <strong></strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
    @yield('content')
</div>


<script src="/js/app.js"></script>
</body>
</html>   