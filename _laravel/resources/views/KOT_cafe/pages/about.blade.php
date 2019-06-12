@extends('KOT_cafe.layouts.KOT_cafe')

@section('name')
About
@endsection

@section('css-file')
about.css
@endsection

@section('content')
        <div>
            <p id="title_kot">This is us.</p>
            <p id="phrase"> 50% dance, 50% k-pop, 100% great time</p>
        </div>

        <div class="container contform">
            <div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, enim facilis sapiente ipsum, possimus
                vero quasi omnis modi unde praesentium qui! Vel, dicta ducimus laborum ut inventore soluta repellendus
                libero quos autem eos itaque iusto quas repudiandae eius ipsum consequatur! Suscipit enim accusamus
                distinctio, nostrum quae sint dolorum, omnis similique provident officiis cum tenetur ab, eaque facere
                quos! Id, debitis. Necessitatibus alias quod, possimus consequatur incidunt perspiciatis aliquam est
                quam? Aliquid eos voluptates dolores maiores sequi, temporibus dolore nam perspiciatis nostrum est ipsa
                voluptatibus quisquam unde explicabo. Corrupti quod odit aperiam culpa perspiciatis repudiandae animi
                voluptates laudantium ratione ex! Iste blanditiis id nam debitis aut quibusdam a saepe ullam doloremque.
                Nemo maiores maxime nam aliquam omnis ea hic animi expedita deserunt necessitatibus sequi eos cupiditate
                quia quibusdam quo debitis voluptates accusamus eligendi laborum, excepturi amet tempora corporis
                consequatur. Nobis neque ducimus fugit iusto impedit odio doloremque sunt repudiandae repellendus
                eligendi.
            </div>
        </div>

        <div class="betweener"></div>

        <div class="container-fluid p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/KOT_cafe/Slider/5.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/KOT_cafe/Slider/8.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/KOT_cafe/Slider/9.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="betweener"></div>

        <div class="container contform">

            <div id="contact">
                Contact us
            </div>
            <form action="/about" method="post">
                {{ csrf_field() }} 
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Name</label>
                        <input name="name" type="text" class="form-control" id="inputName4" data-validation="required"
                            placeholder="Your name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">E-mail</label>
                        <input name="email" type="text" class="form-control" id="inputEmail4" data-validation="email"
                            placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group" id="form-message">
                    <label for="inputText4">Message</label>
                    <textarea name="message" type="text" class="form-control" id="inputText4" data-validation="length"
                        data-validation-length="min30" placeholder=" Your message goes here"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-3 send-button">Send</button>
            </form>
        </div>

        @if(session('message'))
        <div class='alert alert-success'>
            {{ session('message') }}
        </div>
        @endif

        <iframe width='100%' height='400px' id='mapcanvas'
            src='https://maps.google.com/maps?q=Riga,%20Latvia&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=&amp;output=embed'
            frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
            <div class="zxos8_gm"><a href="http://www.freecarcheck.co.uk/prices">UK VED Check</a></div>
            <div style='overflow:hidden;'>
                <div id='gmap_canvas' style='height:100%;width:100%;'></div>
            </div>
            <div><small>Powered by <a href="https://www.embedgooglemap.co.uk">Embed Google Map</a></small></div>
        </iframe>

@endsection