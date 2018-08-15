@extends('layouts.default')

@section('content')
        <p class="center-text">Get <strong>3 free downloads</strong> when you start your free trial today.</p>
        <ul id="entice-list">
            <li>Get access to our full Pro catalog</li>
            <li>Cancel anytime, risk free</li>
            <li>7 days free</li>        
        </ul>
        <form id="register">
            <div class="form-group">
                <input type="email" class="form-control" id="email" aria-describedby="entice-notice" placeholder="Enter your Email Address">
            </div>
            <button type="submit" id="trial-button" class="btn">START YOUR FREE TRIAL</button>
        </form>
        <span id="entice-notice">The free trial is for new members only. All assets downloaded during the free trial period are covered by a basic license.</span>
@endsection

@section('extra-js')
    <script>
        $('#register').submit(function() {
            var email = $('input#email').val();
            $.ajax({
                type: "POST",
                url: "{{ url('/validate') }}",
                data: { 'email' : email },
                success: function(msg) {
                    console.log(msg)
                    alert(msg);
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection