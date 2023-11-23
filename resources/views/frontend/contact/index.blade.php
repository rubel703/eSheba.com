@extends('frontend.master')
@section('title', 'Contact')
@section('content')
    <div class="page-banner overlay-dark bg-image"
        style="background-image: url({{ asset('/') }}/assets/frontend/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal text-white ">Contact</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Get in Touch</h1>
            @if (Session::get('notification'))
                <div class="alert alert-success alert-dismissible fade show col-8 " style="margin-left: 10%" role="alert">
                    {{ Session::get('notification') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="{{ route('storeContact') }}" class="contact-form mt-5">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-6 py-2 wow fadeInLeft">
                        <label for="fullName">Name</label>
                        <input type="text" name="name" id="fullName" class="form-control" placeholder="Full name..">
                    </div>
                    <div class="col-sm-6 py-2 wow fadeInRight">
                        <label for="emailAddress">Email</label>
                        <input type="email" name="email" id="emailAddress" class="form-control"
                            placeholder="Email address..">
                    </div>
                    <div class="col-sm-6 py-2 wow fadeInUp">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control"
                            placeholder="Enter subject..">
                    </div>
                    <div class="col-sm-6 py-2 wow fadeInUp">
                        <label for="subject">Phone</label>
                        <input type="number" name="phone" id="subject" class="form-control"
                            placeholder="Enter phone number..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
            </form>
        </div>
    </div>

    <div class="maps-container wow fadeInUp">
        <div id="google-maps"></div>
    </div>
@endsection
