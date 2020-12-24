@extends('Frontend.master')

@section('content')

  <!--=====================
    Breadcrumb Aera Start
    =========================-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li>
                                <h1><a href="index.html">Home</a></h1>
                            </li>
                            <li>{{ $categoryDetails['categoryDetails']['category_name'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================
    Breadcrumb Aera End
    =========================-->

    <!--======================
    Shop area Start
    ==========================-->
    <div class="shop-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar-widget mt-50">
                        <div class="widget_inner widget-background mt-50">
                            <div class="widget_list widget_filter">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Filter by Price</h4>
                                </div>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />
                                </form>
                            </div>
                            <div class="widget_list widget_categories mt-20">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Categories</h4>
                                </div>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Categories1 (6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Categories2(10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Categories3 (4)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_categories mt-20">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Manufacturer</h4>
                                </div>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Brake Parts(6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Accessories (10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Engine Parts (4)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">hermes(10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">louis vuitton(8)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_categories mt-20">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Select by Color</h4>
                                </div>
                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Black (6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#"> Blue (8)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Brown (10)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#"> Green (6)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">Pink (4)</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <a href="#">White (2)</a>
                                        <span class="checkmark"></span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Shop Banner Start -->
                        <div class="single-banner text-center mt-50 mb-30">
                            <a href="#"><img src="assets/images/banner/shop-banner-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <!-- Shop Banner End -->
                    </aside>
                </div>
                <div class="col-lg-9 order-first order-lg-last">
                    <!-- Shop Banner Start -->
                    <div class="single-banner mt-50 mb-50">
                        <a href="#"><img src="assets/images/banner/shop-banner-1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <!-- Shop Banner End -->
                    <!-- Shop Toolbar Start -->
                    <div class="toolbar-shop mb-50">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" class="btn-grid-3"></button>
                            <button data-role="grid_list" class="btn-list active"></button>
                        </div>
                        <div class="page-amount">
                            <p>There are 10 Products</p>
                        </div>
                        <div class="nice-select select-option">
                            <select name="select">
                                <option value="1">Short By Name</option>
                                <option value="2">Short By Number</option>
                                <option value="3">Short By Date</option>
                                <option value="4">Short By Type</option>
                                <option value="5">Short By Category</option>
                                <option value="6">Short By Image</option>
                                <option value="7">Short By Trend</option>
                                <option value="8">Short By Class</option>
                            </select>
                        </div>
                    </div>
                    <!-- Shop Toolbar End -->
                    <!-- Shop Wrapper Start -->
                    <div class="row shop-wrapper grid_list">
                        @foreach ($categoryProducts as $product)
                            <div class="col-12 mb-20">
                            <!-- Single-Product-Start -->
                            <div class="item-product pt-0">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('backend/uploads/product_main_image/'.$product['main_image']) }}" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">{{ $product['product_name'] }}</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">${{ $product['product_price'] }}</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-list-caption align-items-center">
                                    <div class="product-name">
                                        <a href="product-details.html">{{ $product['product_name'] }}</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                     <div class="product-tax mb-20">
                                        <ul>
                                            @foreach ($product['product_fetures'] as $features)
                                            <li>&diams; {{ $features['fetures'] }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="text-available">
                                        <p><strong>Availabe:</strong><span> 99 In Stock</span></p>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">৳{{ $product['product_price'] }}</span>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                    <div class="cart-list-button">
                                        <a href="shopping-cart.html" class="cart-btn">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        @endforeach
                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Shop Toolbar Start -->
                    <div class="toolbar-shop toolbar-bottom">
                        <div class="page-amount">
                            <p>Showing 1-10 of 30 results</p>
                        </div>
                        <div class="pagination">
                            <ul>
                                <li class="previous"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Shop Toolbar End -->

                    <!-- Category Description Start -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="faq-content">
                                    <div class="faq-desc">
                                        <h3 class="last-title mb-20">Below are frequently asked questions, you may find the answer for yourself</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada,eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Category Description End -->
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Shop area End
    ==========================-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/images/product/product-details/product-details-1.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/images/product/product-details/product-details-2.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/images/product/product-details/product-details-3.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/images/product/product-details/product-details-4.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/images/product/product-details/product-thumb-1.jpg" alt="" class="img-fluid"></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/images/product/product-details/product-thumb-2.jpg" alt="" class="img-fluid"></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/images/product/product-details/product-thumb-3.jpg" alt="" class="img-fluid"></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/images/product/product-details/product-thumb-4.jpg" alt="" class="img-fluid"></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!-- Product Summery Start -->
                                <div class="product-summery mt-50">
                                    <div class="product-head">
                                        <h1 class="product-title">Porro quisquam eget feugiat pretium</h1>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="product-description">
                                        <p>Porro first 4K UHD Camcorder, the GX10 has a compact and portable design that delivers outstanding video quality with remarkable detail. With a combination of incredible features and functionality, the GX10 is the ideal camcorder for aspiring filmmakers.</p>
                                    </div>
                                    <div class="product-tax mb-20">
                                        <ul>
                                            <li><span><strong>Ex Tax :</strong>£60.24</span></li>
                                            <li><span><strong>Brands :</strong>Canon</span></li>
                                            <li><span><strong>Product Code :</strong>Digital</span></li>
                                            <li><span><strong>Reward Points :</strong>200</span></li>
                                            <li><span><strong>Availability :</strong>In Stock</span></li>
                                        </ul>
                                    </div>
                                    <div class="product-buttons grid_list">
                                        <div class="action-link">
                                            <a href="#" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <button class="btn-secondary">Add To Cart</button>
                                            <a href="#" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <div class="desc-content">
                                            <div class="social_sharing d-flex">
                                                <h5>share this post:</h5>
                                                <ul>
                                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Summery End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

@endsection
