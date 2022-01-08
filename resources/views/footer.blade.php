
@section('footer')
    <div class="row p-4" id="footer">
        <div class="col-md-4">
        <ul>
                <li class="m-2"><a href="/policy">polityka prywatności</a></li>
                <li class="m-2"><a href="/terms">Regulamin</a></li>
                <li class="m-2"><a href="/careers">Praca</a></li>
                <li class="m-2"><a href="/rodo">rodo</a></li>
            </ul>
        </div>
        <div class="col-md-4">test</div>
        <div class="col-md-4 text-center">
            <h3>NEWSLETTER</h3>
            <h6>Dołącz do naszego newslettera i otrzymuj jako pierwszy świeże informacje od Towney!</h6>
            <form class="form-inline text-start mt-3">
            <div class="form-group mb-2">
                <input type="e-mail" class="form-control" placeholder="Wpisz swój adres e-mail">
            </div>
            <button type="submit" class="primary-button mb-2">Dołącz</button>
            </form>
        </div>

        <div class="text-center" id="copyright">Created with love by kdrsky</div>
    </div>

@endsection