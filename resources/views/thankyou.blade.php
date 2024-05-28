@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thank You!</div>

                    <div class="card-body">
                        <p class="lead">Your payment was successful.</p>
                        <p>We appreciate your business and hope you enjoy your purchase!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    // Redirect to the products listing page after 1 minute (60000 milliseconds)
    setTimeout(function() {
        window.location.href = '{{ url('/') }}';
    }, 1000);
</script>