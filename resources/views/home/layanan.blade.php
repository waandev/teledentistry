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
<section class="section service-2">
    <div class="container">
        <div class="row">
            @foreach($layanans as $key => $layanan)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5">
                    <!-- <img src="{{asset('/novena/images/service/service-1.jpg')}}" alt="" class="img-fluid"> -->
                    <div class="content">
                        <h4 class="mb-2 title-color">{{$layanan -> judul}}</h4>
                        <p class="mb-4">{{$layanan -> headline}}</p>
                        <a href="{{route('layanan.show',['layanan'=>$layanan->id])}}" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section cta-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="cta-content">
                    <div class="divider mb-4"></div>
                    <h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
                    <a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection