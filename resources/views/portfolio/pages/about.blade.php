@extends('portfolio.layouts.layout')
@section('about')
    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url({{ asset('portfolio/assets/images/bg_1.png') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Nama :</span> <span>Muhammad Imaduddin</span></li>
                                <li class="d-flex"><span>Tanggal lahir :</span> <span>25 Mei 2001</span></li>
                                <li class="d-flex"><span>Alamat :</span> <span>Kecemen, Manisrenggo, Klaten</span></li>
                                <li class="d-flex"><span>Email : </span> <span>imadtamvan@gmail.com</span></li>
                                <li class="d-flex"><span>Whatsapp : </span> <span>+62 898 6634 907</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="120">0</span>
                                <span>Project complete</span>
                            </p>
                            <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
