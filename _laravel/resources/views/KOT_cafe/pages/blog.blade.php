@extends('KOT_cafe.layouts.KOT_cafe')

@section('name')
Blog
@endsection

@section('css-file')
blog.css
@endsection

@section('content')
        <p class="meet">Newest topic we want you to know about</p>

        <div class="container">
            <div class="row">
                <div class="col m-0 p-0 stats-col">
                    <a href="/blog/{{ $lastSaved->id }}">
                        <img src="{{ $lastSaved->img_url }}">
                        <div id="bpb-textcont">
                        <p id="bpb-title">{{ $lastSaved->title }}</p>
                            <p id="bpb-text">{{ $lastSaved->excerpt }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <p class="meet">More on our adventures</p>

        <div class="container blog-post-small">
            <div class="row my-3">

        @foreach ($posts as $id=>$postItem)
            @include('KOT_cafe.partials.blog-post')
        @endforeach

            </div>
        </div>

        {{-- <div class="container blog-post-small">
            <div class="row my-3">
                <div class="col-md-4 col-sm-12 card">
                    <img class="card-img-top" src="/img/KOT_cafe/blog1.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer-link">
                        <a href="#">Read more</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div> --}}

    <a href="#" class="scrollToTop">^</a>

@endsection