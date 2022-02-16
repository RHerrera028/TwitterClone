<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    .tweetbox__input img {
      border-radius: 50%;
      height: 40px;
    }

    .tweetBox {
      padding-bottom: 10px;
      border-bottom: 8px solid #e6ecf0;
      padding-right: 10px;
    }

    .tweetBox form {
      display: flex;
      flex-direction: column;
    }

    .tweetbox__input {
      display: flex;
      padding: 20px;
    }

    .tweetbox__input input {
      flex: 1;
      margin-left: 20px;
      font-size: 20px;
      border: none;
      outline: none;
    }

    .tweetBox__tweetButton {
      background-color: #50b7f5;
      border: none;
      color: white;
      font-weight: 900;

      border-radius: 30px;
      width: 80px;
      height: 40px;
      margin-top: 20px;
      margin-left: auto;
    }
  </style>
</head>
<body>
  <div class="tweetBox col-6" style="margin:auto">
    {!! Form::model(Auth::user(),['method' => 'PUT', 'action'=>['App\Http\Controllers\UsersController@update', Auth::user()->id]]) !!}
      {{ csrf_field() }}
      {!! Form::label('favcolor', 'Select tweet color: ') !!}
      {{ Form::input('color', 'favcolor', Auth::user()->color, ['class' => 'favcolor']) }}
      {!! Form::submit('Enviar color') !!}
    {!! Form::close() !!}

    <hr>


    {!! Form::open(['method' => 'POST', 'action'=>'App\Http\Controllers\PostsController@store', 'files' => true]) !!}
      {{ csrf_field() }}
      <h3>Tweet</h3>
      <div class="tweetbox__input">
        {!! Form::text('contenido', '', ['required'=>true, 'placeholder'=>'Escribe un tweet'])!!}
      </div>
      {!! Form::submit('Tweet', ['class'=>'tweetBox__tweetButton fav_color']) !!}
    {!! Form::close() !!}
  </div>

  <style>
    .fav_color {
      background-color: {{ Auth::user()->color }} !important;
    }
  </style>
</body>
</html>
