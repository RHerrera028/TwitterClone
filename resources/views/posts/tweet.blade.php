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
</head>
<body>
          <li class="tweet-card">
            <div class="tweet-content">
              <div class="tweet-header">
                <span class="fullname">
                  <strong>
                    {{ $post->user->name }}
				  </strong>
                </span>
                <span class="username"> 
                  {{ $post->user->email }}
{{-- 
				@foreach($users as $user)
                    @if ($user->id==$post->user_id)
                    {{$user->email}}
                    @else
                    
                    @endif
                @endforeach --}}
				</span>
                <span class="tweet-time">{{ $post->created_at->format('M d') }}
				</span>
              </div>
              <a>
                <img class="tweet-card-avatar" src="/images/blank.jpg" alt="">
              </a>
              <div class="tweet-text">
                <p class="" data-aria-label-part="0">                
			          	{{ $post->contenido }}
                </p>
              </div>
              <div class="tweet-footer">
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-comment" aria-hidden="true"></i><span>18</span>
                </a>
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-sync" aria-hidden="true"></i><span>64</span>
                </a>
               {{--  <a class="tweet-footer-btn">
                  <i class="octicon octicon-heart" aria-hidden="true"></i>
                  <span></span>
                </a> --}}
                <a class="tweet-footer-btn">
                    @include('posts.like', ['model' => $post])
                </a>
              </div>
            </div>
          </li>
</body>
</html>