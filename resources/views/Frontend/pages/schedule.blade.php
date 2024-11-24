@extends('Frontend.layout.app')
@section('style')
    <style>
        .calend {
            margin-top: 8rem;
            /* Default for laptop or larger screens */
        }

        @media screen and (max-width: 768px) {

            /* Adjust for phone or smaller devices */
            .calend {
                margin-top: 11rem;
            }
        }
    </style>
@endsection
@section('content')
    <div class="calend">
        <div class="w-full text-center">
            <h4>Let's make something great</h4>
        </div>
        <div class="calendly-inline-widget" data-url="https://calendly.com/synexdigital" style="min-width:320px;height:700px;">
        </div>
    </div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
@endsection
