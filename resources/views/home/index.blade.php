@extends('novena.master')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <!-- <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span> -->
                    <h1 class="mb-3 mt-3">SELAMAT DATANG DI THE CONTOH CLINIC</h1>

                    <p class="mb-4 pr-5 text-white">The contoh clinic berintegrasi dan berfokus dalam memberikan pelayanan kesehatan, pengobatan dan pencegahan penyakit. Klinik Darma Nusantara tumbuh dari kepedulian kesehatan dan kesejahteraan karyawan perusahaan serta keluarga yang diharapkan dapat membangun perusahaan, masyarakat sekitar dan juga negara. THE CONTOH CLINIC di kenal sebagai klinik eksklusif dengan di layani oleh tim dokter yang berpengalaman, THE CONTOH CLINIC juga menggunakan alat-alat modern dan canggih seturut perkembangan teknologi.</p>
                    <div class="btn-container ">
                        <!-- <a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <!-- <span>24 Hours Service</span> -->
                        <h4 class="mb-3">Konsultasi Online</h4>
                        <p class="mb-4">Sehubungan dengan Darurat Bencana Covid-19 dan kamu nggak mau keluar rumah? Klik menu konsultasi di website ini untuk melakukan live chat gratis dengan drg.Haninjuseyo</p>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <!-- <span>The Contoh</span> -->
                        <h4 class="mb-3">The Contoh Clinic</h4>
                        <p>Jl. Contoh Blok A No. 8 Makassar, Sulawesi Selatan Telp/WA. 082360120480</p>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Senin - Jumat : <span>10:00 - 19:00</span></li>
                            <li class="d-flex justify-content-between">Sabtu : <span>10:00 - 13:00</span></li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-notepad"></i>
                        </div>
                        <!-- <span>Pesan Jadwal</span> -->
                        <h4 class="mb-3">Pesan Jadwal Online</h4>
                        <p>Anda sudah dapat membuat perjanjian terlebih dahulu melalui fitur web The contoh clinic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <img src="{{asset('/novena/images/about/img-1.jpg')}}" alt="" class="img-fluid">
                    <img src="{{asset('/novena/images/about/img-2.jpg')}}" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="{{asset('/novena/images/about/img-3.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <!-- <h2 class="title-color">Personal care <br>& healthy living</h2> -->
                    <p class="mt-4 mb-5">Pasien yang tidak kami sarankan untuk datang ke klinik adalah kelompok orang yang berisiko lebih tinggi terkena Covid-19, kecuali benar-benar terpaksa, yaitu:</p>
                    <ul>
                        <li>Nyeri tak tertahankan</li>
                        <li>Gusi bengkak akibat infeksi</li>
                        <li>Pendarahan tidak terkontrol</li>
                        <li>Trauma pada gigi dan tulang akibat kecelakaan</li>
                    </ul>

                    <a href="/layanan" class="btn btn-main-2 btn-round-full btn-icon">Layanan<i class="icofont-simple-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section clients gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Promo Terbaru</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Selain pelayanan di atas, kami juga memberikan promo-promo terbatas kepada pasien-pasien kami.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-10 m-auto">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" height="450px" src="{{asset('/novena/images/about/7.jpeg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" height="450px" src="{{asset('/novena/images/about/8.jpeg')}}" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection