@extends('frontend.layout.app')

@section('content')
    <section class="container py-4 py-md-5 page-404">
        <div class="row py-4 py-md-5">
            <div class="col-10 col-md-6 m-auto text-center py-4 py-md-5">
                <h2 style="font-size: 4rem; color: #3b82f6;">404</h2>
                <h3>Page Not Found</h3>
                <p>We’re sorry. The page you requested could no be found.
                    Please go back to the home page</p>
                <a href="{{ route('home') }}" class="btn btn-primary btn-default">Home</a>
            </div>
        </div>
    </section>
@endsection
