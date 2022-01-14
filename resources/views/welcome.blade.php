@extends('app')


@section('title', 'Strona główna')

@section('content')

<div id="pagepiling">
	    <div class="section" id="section1">
	    	<h1>One</h1>
	    </div>
        <div class="section" id="section2">
	    	<h1>Two</h1>
	    </div>
        <div class="section" id="section3">
	    	<h1>Three</h1>
	    </div>
        <div class="section" id="section4">
	    	<h1>Four</h1>
	    </div>
	    
	</div>

    
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

<!--/ End hero section -->

<!-- About Section -->

<div class="row" id="about">
    <div class="col-md-6 text-center">
        <img class="img-fluid" src="/images/about.jpg" alt="Towney o nas" id="about-img">
    </div>
    <div class="col-md-6">
        <h1>Test</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut fuga inventore modi,
            unde fugit nihil praesentium corporis quasi, consectetur adipisci ab quisquam, eligendi reiciendis minima ipsa. Aliquid voluptas earum amet.</p>
    </div>
</div>

<!--/ End About Section -->

<!-- Features Section -->
<div class="row pb-3 mt-3" id="features">
    <div class="col-md-4 text-center align-self-center"> 
        <h2>NEWSY I WYDARZENIA</h2>
        <h6>Test</h6>
        <hr>
        <h2>KATALOG FIRM</h2>
        <h6>test</h6>
    </div>
    <div class="col-md-4 text-center" id="features-col">
        <img class="img-fluid" src="/images/phone-lg.jpg" alt="Features Towney" height="500" width="300">
    </div>
    <div class="col-md-4 text-center align-self-center">
        <h2 class="font-weight-bold">PLANOWANE WYŁĄCZENIA</h2>
        <p class="text-muted">test</p>
        <hr>
        <h2>RESTAURACJE I TRANSPORT</h2>
        <h6>test</h6>
    </div>
</div>

<!--/ End Features Section -->

<!-- Cities Section -->

<div class="row">
    <div class="col-md-6">
        <img class="img-fluid" src="/images/map.png" alt="Mapa Towney">
    </div>
    <div class="col-md-6">
        Pobierz etc
    </div>
</div>

<!--/ End Cities Section -->

<!-- Contact Section -->
<div class="row" id="contact">
    <div class="col-md-6">
    <h1 class="text-center p-3">KONTAKT</h1>
    </div>
    <div class="col-md-6 p-4"  id="contact-col">
    <form>
  <div class="form-group">
    <input type="email" class="form-control m-3" id="exampleFormControlInput1" placeholder="Twój adres e-mail...">
  </div>
  <div class="form-group">
    <input type="text" class="form-control m-3" id="exampleInputPassword1" placeholder="Imię">
  </div>
  <div class="form-group">
    <textarea class="form-control m-3" id="exampleFormControlTextarea1" rows="3" placeholder="Tu wpisz swoją wiadomość..."></textarea>
  </div>
  <button type="submit" class="primary-button m-3">Wyślij</button>
</form>
    </div>
</div>
<!--/ End Contact Section -->
@endsection
