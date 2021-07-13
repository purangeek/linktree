@extends('new.header')
@section('content-new')


    <div class="body-wp">

        <!-- 404 Start -->
        <section class="main-404">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="error-404">
                            <img src="{{ asset('assets/images/error-img.gif') }}" alt="error-img">
                            <div class="error-content">
                                <p class="lead">The page you’re looking for doesn’t exist.</p>
                                <a href="/admin" class="sec-btn blue">Back To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404 End -->

    </div>

@endsection