


@extends('layout.main')
@push('title')
Popular Medicines Unidell LifeScience
@endpush
@section('main-section')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ url('') }}/public/assets/users/img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">About {{ ucfirst($data['pdetails']->pname) }}</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Medicine Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->


    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="ltn__shop-details-inner mb-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ltn__shop-details-img-gallery">
                                    <div class="ltn__shop-details-large-img">
                                        <div class="single-large-img">
                                            <a href="{{ $data['pdetails']->p_img_url }}" data-rel="lightcase:myCollection">
                                                <img src="{{ $data['pdetails']->p_img_url }}" height="400px" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-info shop-details-info pl-0">
                                    <br/>
                                    <h3>Popular</h3>
                                    <div class="product-price">
                                        <span>{{ ucfirst($data['pdetails']->pname) }}</span>
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                
                                                <span>
                                                    <a href="#">{{ ucfirst($data['pdetails']->p_title) }}</a>
                                                    
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                   <hr>
                                    <div class="ltn__safe-checkout">
                                        <h5>{{ ucfirst($data['pdetails']->p_description) }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h4 class="title-2">Our Produts<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__related-product-slider-one-active slick-arrow-1">
                 <?php foreach ($data['catbasedoneproduct'] as $product) {  ?>
                <!-- PasteStart -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="{{ url('') }}/product547cgtd324sadz54iukln9856bvs/{{ base64_encode($product['p_id'])}}"><img src="{{ $product['p_img_url'] }}" alt="#" height="280px" width="280px"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">New</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>{{ucfirst($product['pname'])}}</span>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">{{ucfirst($product['p_title'])}}</a></h2>
                            
                        </div>
                    </div>
                </div>
                <!-- PasteEnd -->
               <?php } ?>
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->
    




@endsection