@extends('layouts.default')

@section('content')
        <p class="center-text">Get <strong>3 free downloads</strong> when you start your free trial today.</p>
        <ul id="entice-list">
            <li>Get access to our full Pro catalog</li>
            <li>Cancel anytime, risk free</li>
            <li>7 days free</li>        
        </ul>
        <form id="register">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" id="email" aria-describedby="entice-notice" placeholder="Enter your Email Address">
            </div>
            <button type="submit" id="trial-button" class="btn">START YOUR FREE TRIAL</button>
        </form>
        <span id="entice-notice">The free trial is for new members only. All assets downloaded during the free trial period are covered by a basic license.</span>
@endsection

@section('extra-js')
    <script>
        $('#register').submit(function(e) {
            e.preventDefault();
            var email = $('input#email').val();
            $.ajax({
                type: "POST",
                url: "{{ url('/api/validate') }}",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                data: { email : email },
                success: function(data, textStatus, xhr) {
                    window.location.href = data;
                }
            });
        });
    </script>
@endsection