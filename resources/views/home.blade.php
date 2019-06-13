@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="flex-center position-ref full-height">

                        <div class="content">
                            <div class="title m-b-md">
                                Laravel test
                            </div>

                            <div class="links">
                                <a href="https://laravel.com/docs">Docs</a>
                                <a href="https://laracasts.com">Laracasts</a>
                                <a href="https://laravel-news.com">News</a>
                                <a href="https://blog.laravel.com">Blog</a>
                                <a href="https://nova.laravel.com">Nova</a>
                                <a href="https://forge.laravel.com">Forge</a>
                                <a href="https://github.com/laravel/laravel">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
