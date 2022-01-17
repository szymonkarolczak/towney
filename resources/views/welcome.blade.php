@extends('app')


@section('title', 'Strona główna')

@section('content')

<div id="pagepiling">
	    <div class="section" id="hero">
<!-- Hero Section -->

<div class="row" id="hero">
    <div class="col-md-6 text-center">
        <h1>TOWNEY</h1><br>
        <h3>Twoje miasto w zasięgu ręki</h3>
    </div>
    <div class="col-md-6">
        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_g3dkif8j.json"  background="transparent"  speed="1"  style="width: 1440; height: 500px;"  loop  autoplay></lottie-player>
    </div>
</div>
</div>
<!--/ End hero section -->	    

<!-- About section -->
        <div class="section" id="about">
            <div class="row">
                <div class="col-md-6">Test</div>
                <div class="col-md 6">Test 2</div>
            </div>	    
            <p id="about-bg">O NAS.</p>

        </div>
<!--/ End about section -->

<!-- Features section -->        
        <div class="section" id="features">
            <div class="row">
                <div class="col-md-6">Test</div>
                <div class="col-md-6 text-center">
                    <img class="img-fluid" src="/images/phone-lg.jpg" alt="Towney">
                </div>
            </div>
            <p id="features-bg">FUNKCJE.</p>

        </div>
<!--/ End features section -->       

<!-- Contact Section -->
        <div class="section" id="contact">
            <div class="col-md-6">
                <ul>
                    <li class="m-2"><a href="/policy">polityka prywatności</a></li>
                    <li class="m-2"><a href="/terms">Regulamin</a></li>
                    <li class="m-2"><a href="/careers">Praca</a></li>
                    <li class="m-2"><a href="/rodo">rodo</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <p id="contact-bg">KONTAKT.</p>

            </div>
            <div class="text-center" id="copyright">Created with love by kdrsky</div>
	    </div>
        </div>
<!--/ End contact section -->
@endsection
