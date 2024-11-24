@extends('frontend.layout.app')

@section('content')
    <section class="container py-5">
        <div class="row py-5">
            <div class="col-md-6 m-auto text-center pt-5">

                {{-- Thank you Icon --}}
                <svg width="100px" height="100px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.0303 10.0303C16.3232 9.73744 16.3232 9.26256 16.0303 8.96967C15.7374 8.67678 15.2626 8.67678 14.9697 8.96967L10.5 13.4393L9.03033 11.9697C8.73744 11.6768 8.26256 11.6768 7.96967 11.9697C7.67678 12.2626 7.67678 12.7374 7.96967 13.0303L9.96967 15.0303C10.2626 15.3232 10.7374 15.3232 11.0303 15.0303L16.0303 10.0303Z"
                        fill="#3B82F6" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z"
                        fill="#3B82F6" />
                </svg>
                <div>
                    <p><strong>Message!</strong> Successfully Sent</p>
                    <h2>Thank You</h2>
                    <p>We Have recieved your message. We will <br> reach you out immidiately.</p>
                </div>
            </div>
        </div>

        {{-- <div class="row mt-4">
            This is for showing ads and marketing area
        </div> --}}
    </section>
@endsection
