@extends('app')
@extends('header')
@extends('footer')

@section('title', 'Strona główna')

@section('content')
<!-- Hero Section -->

<div class="row">
    <div class="col-md-6 d-flex align-items-center">
        <h1>TOWNEY</h1><br>
        <h3>Twoje miasto w zasięgu ręki</h3>
    </div>
    <div class="col-md-6">
        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_g3dkif8j.json"  background="transparent"  speed="1"  style="width: 1440; height: 500px;"  loop  autoplay></lottie-player>
    </div>
</div>

<!--/ End hero section -->

<!-- About Section -->

<div class="row">
    <div class="col">
        <h1>Test</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut fuga inventore modi,
            unde fugit nihil praesentium corporis quasi, consectetur adipisci ab quisquam, eligendi reiciendis minima ipsa. Aliquid voluptas earum amet.</p>
    </div>
</div>

<!--/ End About Section -->

<!-- Features Section -->
<div class="row pb-3" id="features">
    <div class="col-md-8">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul>
    </div>
    <div class="col-md-4 text-center" id="features-col">
        <img class="img-fluid" src="/images/phone-lg.jpg" alt="Features Towney" height="500" width="300">
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
<h1 class="text-center p-3">KONTAKT</h1>
<div class="row" id="contact">
    <div class="col-md-6" id="contact-col">
        Lorem ipsum
    </div>
    <div class="col-md-6 p-3">
    <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
<!--/ End Contact Section -->
@endsection
