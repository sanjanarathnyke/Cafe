@extends('layouts.context')
@section('content')

        <!--====== Start Page Section ======-->
        <section class="page-banner">
            <div class="page-bg-wrapper p-r z-1 bg_cover pt-100 pb-110" style="background-image: url(assets/images/bg/page-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--=== Page Banner Content ===-->
                            <div class="page-banner-content text-center">
                                <h1 class="page-title">Menu Restaurant</h1>
                                <ul class="breadcrumb-link">
                                    <li><a href="{{ route('welcome') }}">Home</a></li>
                                    <li class="active">Menu Restaurant</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Page Section ======-->
        <!--====== Start Menu Page Section ======-->
        <section class="menu-grid-section gray-bg pt-110 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-55">
                            <h2>CHOOSE MENU</h2>
                            <p>Indulge in an array of meticulously crafted sushi rolls, artfully blending <br> fresh ingredients for a delightful taste experience.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="foodix-tabs style-two mb-70">
                            <ul class="nav nav-tabs wow fadeInDown">
                      
                                <li>
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#cat2" >Grilled</button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat3">Sizzling</button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat4">Steak Bliss</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content">
                       
                            {{--grilled context--}}
                            @include('grilled')

                            {{--sizzlings context--}}
                            @include('sizzlings')

                            {{--steakbliss context--}}
                            @include('steakbliss')

                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Menu Page Section ======-->

@endsection