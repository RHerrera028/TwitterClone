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
    .button {
      border: none;
      background-color: white;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }
    .form-inline {
      display: inline-block;
    }
  </style>
</head>
<body>

  @can('like', $model)
      <form class="form-inline" action="{{ route('like') }}" method="POST">
          @csrf
          <input type="hidden" name="likeable_type" value="{{ get_class($model) }}"/>
          <input type="hidden" name="id" value="{{ $model->id }}"/>
          <button class="button"><i class="octicon octicon-heart" aria-hidden="true"></i>@lang('')</button>
      </form>
  @endcan
  
  @can('unlike', $model)
      <form class="form-inline" action="{{ route('unlike') }}" method="POST">
          @csrf
          @method('DELETE')
          <input type="hidden" name="likeable_type" value="{{ get_class($model) }}"/>
          <input type="hidden" name="id" value="{{ $model->id }}"/>
          <button class="button"><i class="octicon octicon-heart" style="color:#f91880; font-size:18px;" aria-hidden="true"></i>@lang('')</button>
      </form>
  @endcan
  {{ trans_choice('{0} |{1} :count |[2,*] :count ', count($model->likes), ['count' => count($model->likes)]) }}
</body>
</html>
