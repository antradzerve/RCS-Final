@extends('KOT_cafe.layouts.KOT_cafe')

@section('name')
Blog
@endsection

@section('css-file')
post.css
@endsection

@section('content')
        
<div class="meet"> <h1 id="title">{{ $posts->title }}</h1></div>

<div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ $posts->img_url }}" id="mainpost-img" class="w-100" />
                </div>
            </div>
        </div>

        <div class="container text-justify">
            <div class="row">
                <div class="col">
                    <p id="post-text">
                        {{ $posts->body }}
                    </p>
                </div>
            </div>
        </div>

        <div class="betweener"></div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Other related and not so related posts</h2>
                </div>
            </div>
            <div class="container blog-post-small">
                <div class="row my-3">
    
            @foreach ($threeLatest as $postItem)
                @include('KOT_cafe.partials.blog-post')
            @endforeach
    
                </div>
            </div>
        </div>
        
@endsection