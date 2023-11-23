@extends('frontend.master')
@section('title', 'Home')
@section('content')
   
    @foreach ($banners as $banner)
    {{-- <div class="page-hero bg-image overlay-dark" style="background-image: url({{ asset('/') }}/assets/frontend/img/bg_image_1.jpg);"> --}}
    <div class="page-hero bg-image overlay-dark" style="background-image: url({{ asset($banner->image) }}">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">{{$banner->title_one}}</span>
                <h1 class="display-4 text-white ">{{$banner->title_two}}</h1>
                <a href="#" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>
    @endforeach


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with a doctors</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>One</span>-Health Protection</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>One</span>-Health Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Welcome to Your Health <br> Center</h1>
                        <p class="text-grey mb-4 text-justify">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam
                            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                            vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius,
                            inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi
                            accusantium! Placeat voluptates esse ut optio facilis!</p>
                        <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="{{ asset('/') }}/assets/frontend/img/bg-doctor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Our Dedicated Doctors</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                @foreach ($doctors as $doctor)
                <div class="item">
                        <div class="card-doctor">
                            <div class="header">
                                <img src="{{ $doctor->image }}" alt="" height="300px" width="100%">
                                <div class="meta">
                                    <a href="#"><span class="mai-call"></span></a>
                                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                </div>
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0">{{ $doctor->name }}</p>
                                <span class="text-sm text-grey">{{ $doctor->designition }}</span>
                            </div>
                            <button class="btn btn-success ml-4" style="border-radius: 30px;"><a href="#">Details</a></button>
                        </div>
                    </div>
                        @endforeach
            </div>
        </div>
    </div>

    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest News</h1>
            <div class="row mt-5">
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="{{ asset('/') }}/assets/frontend/img/blog/blog_1.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus
                                    case</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="{{ asset('/') }}/assets/frontend/img/person/person_1.jpg"
                                            alt="">
                                    </div>
                                    <span>Roger Adams</span>
                                </div>
                                <span class="mai-time"></span> 1 week ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="{{ asset('/') }}/assets/frontend/img/blog/blog_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the
                                    pandemic</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="{{ asset('/') }}/assets/frontend/img/person/person_1.jpg"
                                            alt="">
                                    </div>
                                    <span>Roger Adams</span>
                                </div>
                                <span class="mai-time"></span> 4 weeks ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="{{ asset('/') }}/assets/frontend/img/blog/blog_3.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much
                                    sugar?</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="{{ asset('/') }}/assets/frontend/img/person/person_2.jpg"
                                            alt="">
                                    </div>
                                    <span>Diego Simmons</span>
                                </div>
                                <span class="mai-time"></span> 2 months ago
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="blog.html" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>
    </div> <!-- .page-section -->


    <div class="col-md-12 col-md-10">
        <div class="appoinment-wrap mt-5 mt-lg-0 page-section">
            <h2 class="mb-2 mt-2 text-center  title-color wow fadeInUp">Book Appoinment</h2>
            <p class="mb-4"><br />.</p>
            @if (Session::get('notification'))
                <div class="alert alert-success alert-dismissible fade show col-6" style="margin-left: 25%"
                    role="alert">
                    {{ Session::get('notification') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form id="#" class="appoinment-form main-form" method="POST"
                action="{{ route('storeappoinment') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="dept_name">
                                <option disabled selected>Choose Department</option>
                                @foreach ($departments as $department)
                                    <option name="dept_name">{{ $department->dept_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect2" name="doctor_name">
                                <option disabled selected>Select Doctors</option>
                                @foreach ($doctors as $doctor)
                                    <option name="doctor_name">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input name="date" id="date" type="date" class="form-control"
                                placeholder="dd/mm/yyyy">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input name="time" id="time" type="text" class="form-control"
                                placeholder="Time">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input name="name" id="name" type="text" class="form-control"
                                placeholder="Full Name">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input name="phone" id="phone" type="Number" class="form-control"
                                placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="form-group-2 mb-4">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                </div>
                <button type="submit"class="btn btn-info">Make Appoinment<i
                        class="icofont-simple-right ml-2"></i></button>
            </form>
        </div>
    </div>

    <!-- .banner-home -->
@endsection
