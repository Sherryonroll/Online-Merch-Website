@extends('layouts.app')
@section('content')
    <section class="page-wrapper">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    @livewire('contact-us')
                    <!-- ./End Contact Form -->
                    <!-- Contact Details -->
                    <div class="contact-details col-md-6 ">
                        <div class="google-map">
                            <div id="map"></div>
                        </div>
                        
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </section>


@endsection
