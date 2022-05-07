@extends('include.fmaster')

@section('fbody')
{{ $onlinedetail->id }}
@if (Session::has('user'))
    <p>{{ Session('user.name') }}</p>
@endif

<div class="container homeindex">
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        @csrf
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="chikasonbusinesspersonal@gmail.com">
        <!-- Specify a Subscribe button. -->

        <input type="hidden" name="cmd" value="_xclick">
        <!-- Identify the subscription. -->
        <input type="hidden" name="item_name" value="{{ $onlinedetail['Video_name'] }}">
        <input type="hidden" name="item_number" value="{{ $onlinedetail['buyingcode'] }}">
        <input type="hidden" name="currency_code" value="USD"/>
        <input type="hidden" name="notify_url" value="http://127.0.0.1:8000/onlinetutorialpaymentcompelete/{{ $onlinedetail['buyingcode'] }}/id/{{ $onlinedetail['id'] }}/price/{{ $onlinedetail['Video_price']}}/">
        <input type="hidden" name="return" value="http://127.0.0.1:8000/onlinetutorialpaymentcompelete/{{ $onlinedetail['buyingcode'] }}/id/{{ $onlinedetail['id'] }}/price/{{ $onlinedetail['Video_price']}}/">
        <input type="hidden" name="no_shipping" value="0">
        <input type="hidden" name="amount" value="{{ $onlinedetail['Video_price']}}">
              <!-- Display the payment button. -->
              <input type="image" name="pay" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" alt="Subscribe"> <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>
</div>
@endsection
