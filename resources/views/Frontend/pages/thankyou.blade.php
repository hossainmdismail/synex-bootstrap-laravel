@extends('Frontend.layout.app')

@section('content')
    <section class="container py-4 py-md-5">
        <div class="row">
            <div class="col-md-6 m-auto text-center">
                {{-- Status --}}
                <img src="{{ asset('Frontend/images/thank2.png') }}" alt="Synex Digital - Thanks image" width="60%">
                <div>
                    <h1>Thank You</h1>
                    <p>We Have recieved your message. We will reach you out immidiately.</p>
                </div>
            </div>
        </div>

        {{-- <div class="row mt-4">
            This is for showing ads and marketing area
        </div> --}}
    </section>
@endsection
