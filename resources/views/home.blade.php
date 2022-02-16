@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! You will be redirected in 5 seconds...') }}
                </div>
                @if (session()->has('logged in'))
                <script>
                setTimeout(function() {
                    window.location.href = "/posts"
                     }, 5000); // 5 seconds
                </script>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
