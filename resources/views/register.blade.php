@extends('layouts.default')

@section('content')
    <form id="register">
        <div class="form-group">
            <label for="email">Enter your Email Address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-success">START YOUR FREE TRIAL!</button>
    </form>
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
            alert('done')
        });
    </script>
@endsection