<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Twitterclone</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css" rel="stylesheet">
  <style>
    body {
    background-color: #e6ecf0;
    padding-top: 5px;
    }

    a {
      color: #1DA1F2;
    }

    .tweet-list {
      list-style: none;
      margin: 8px 4px 0;
      padding: 0;
    }
    .tweet-card {
      background-color: #fff;
      border-bottom: 1px solid #e6ecf0;
      min-height: 52px;
      padding: 9px 12px;
    }

    .tweet-content {
      margin-left: 58px;
      font-size: 14px;
      line-height: 20px;
      font-weight: normal;
    }
    .tweet-card-avatar {
      border-radius: 50%;
      height: 48px;
      width: 48px;
      float: left;
      margin-top: 3px;
      margin-left: -58px;
    }

    .tweet-footer-btn {
      margin-right: 30px;
    }
    .tweet-footer-btn i, .tweet-footer-btn span {
      color: #657786;
      font-size: 16px;
    }
    .tweet-footer-btn span {
      margin-left: 8px;
    }
    .navbar {
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.15);
    }
    .navbar-nav > li a {
    color: #66757f;
    font-size: 14px;
    font-weight: bold;
    }
    .navbar-search-icon {
    color: #66757f;
    }

    .navbar-form {
    margin-right: 15px;
    }

    .navbar-user-dropdown {
    margin-right: 15px;
    }
    </style>
</head>
<body>
  <h1 class="col-6" style="margin:auto">Posts de usuario</h1>
  <div class="col-6" style="margin:auto">
    <ol class="tweet-list">
    @if ($posts)
      @foreach ($posts as $post)
        @include('posts.tweet')
      @endforeach
    @endif
    </ol>
  </div>
  {{-- @endsection --}}
</body>
</html>
