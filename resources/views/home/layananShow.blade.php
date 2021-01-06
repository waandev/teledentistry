@extends('novena.master')

@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Our services</span>
                    <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            <!-- <img src="{{asset('/novena/images/artikel/artikel-1.jpg')}}" alt="" class="img-fluid"> -->
                            <div class="blog-item-content">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> {{$layanans->created_at}}</span>
                                </div>
                                <h2 class="mb-4 text-md"><a href="blog-single.html">{{$layanans->judul}}</a></h2>
                                <p class="lead mb-4">{{$layanans->headline}}</p>
                                <p>{{$layanans->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget schedule-widget mb-3">
                    <h5 class="mb-4">Time Schedule</h5>

                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="#">Monday - Friday</a>
                            <span>9:00 - 17:00</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="#">Saturday</a>
                            <span>9:00 - 16:00</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="#">Sunday</a>
                            <span>Closed</span>
                        </li>
                    </ul>

                    <div class="sidebar-contatct-info mt-4">
                        <p class="mb-0">Need Urgent Help?</p>
                        <h3>+23-4565-65768</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection