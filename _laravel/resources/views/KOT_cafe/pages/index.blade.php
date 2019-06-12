@extends('KOT_cafe.layouts.KOT_cafe')

@section('name')
Welcome
@endsection

@section('css-file')
main.css
@endsection

@section('content')
    <main>

        <div id="showcase-top">
            <p>Passionate K-Pop dance cover team located in Riga</p>
            <h1> K.O.T Cafe - more than just dance</h1>
        </div>

        <div class="betweener"></div>

        <div class="container-fluid">
            <div class="row about-us">
                <div class="col about-text">
                    <h2 class="mt-2 mb-0 pl-2">About us</h2>
                    <p class="mt-0 mb-0 pl-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi iure odio
                        architecto nihil nobis!
                        Debitis minus labore sint nam dolores, laborum sapiente perferendis repellat magnam.</p>
                    <a href="about">Explore more</a>
                </div>
                <div class="col">
                    <img src="/img/KOT_cafe/rokas.jpg" class="my-5 mx-2 py-4">
                </div>
            </div>
        </div>

        <div class="betweener"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 m-0 p-0 stats-col">
                    <a href="instructors">
                        <img src="/img/KOT_cafe/stats1.jpg">
                        <p class="stats-text">5 instructors</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 m-0 p-0 stats-col">
                    <a href="dancers">
                        <img src="/img/KOT_cafe/stats2.jpg">
                        <p class="stats-text">30 dancers</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 m-0 p-0 stats-col">
                    <a href="blog">
                        <img src="/img/KOT_cafe/stats3.jpg">
                        <p class="stats-text"> 5 Unicons & Wintercons</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="betweener"></div>

        <div class="blog">
            <p>What have we been up to?</p>
        </div>

        <div class="container blog-cont">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="/img/KOT_cafe/blog1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title blog-title">Getting ready for UniCon 2019</h5>
                    </div>
                    <div class="card-footer">
                        <a href="#">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/KOT_cafe/blog2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title blog-title">Newest addition to our team!</h5>
                    </div>
                    <div class="card-footer">
                        <a href="#">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/KOT_cafe/blog3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title blog-title">Top 3 performance list</h5>
                    </div>
                    <div class="card-footer">
                        <a href="#">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/KOT_cafe/blog4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title blog-title">What you need to know before your first lesson</h5>
                    </div>
                    <div class="card-footer">
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container blog-cont">
            <a href="blog"> More stories here </a>
        </div>

@endsection