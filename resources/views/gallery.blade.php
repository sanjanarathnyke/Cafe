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
                                <h1 class="page-title">Gallery</h1>
                                <ul class="breadcrumb-link">
                                    <li><a href="{{ route('welcome') }}">Home</a></li>
                                    <li class="active">Gallery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Page Section ======-->
        <!--====== Start Gallery Section ======-->
        <section class="gallery-section pt-120 pb-100">
            <div class="container">
                <div class="isotope-masonry-grid row">
                    <div class="col-lg-7 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-1.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-1.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-2.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-2.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-3.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-3.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-4.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-4.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-5.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-5.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-6.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-6.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-7.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-7.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-8.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-8.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-9.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-9.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 isotope-filter-item">
                        <div class="gallery-item style-one mb-30 wow fadeInDown">
                            <div class="gallery-img">
                                <img src="assets/images/gallery/gallery-10.jpg" alt="gallery image">
                                <div class="hover-content">
                                    <a href="assets/images/gallery/gallery-10.jpg" class="insta-icon img-popup"><i class="far fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Gallery Section ======-->

@endsection