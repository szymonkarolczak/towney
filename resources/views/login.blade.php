@extends('app')

@section('title', 'Logowanie')

@section('content')
<style>
    #foo-image{
        display: none;
    }
</style>
<div class="row">
    <div class="col-6 d-flex justify-content-center align-items-center text-center">
        <form class="form w-75">
        <img class="mb-4" src="/images/logo.png" alt="Towney Logo" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">TOWNEY</h1>
        <label for="inputEmail" class="sr-only m-2">Adres e-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Wpisz swój adres e-mail" required autofocus>
        <label for="inputPassword" class="sr-only m-2">Hasło</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Wpisz hasło" required>
        <button class="secondary-button m-3 w-50" type="submit">Zaloguj</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </div>
    <div class="col-6 d-flex justify-content-center align-items-center" id="login-right">
        <a href="/" class="primary-button">Strona główna</a>
    </div>
</div>
@endsection