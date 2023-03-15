<!-- ======================= Shop Style 1 ======================== -->
<section class="gray">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3 text-center">
                <h1 class="ft-medium mb-3">Shop Categories</h1>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-3">
                        <div class="cats_side_wrap text-center m-auto">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 bg-white"><a href="javascript:void(0);" class="d-block"><img src="./public/frontend/assets/img/fashion.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Wear</a></h6></div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-3">
                        <div class="cats_side_wrap text-center m-auto">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 bg-white"><a href="javascript:void(0);" class="d-block"><img src="./public/frontend/assets/img/tshirt.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Kid's Wear</a></h6></div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-3">
                        <div class="cats_side_wrap text-center m-auto">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 bg-white"><a href="javascript:void(0);" class="d-block"><img src="./public/frontend/assets/img/accessories.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-3">
                        <div class="cats_side_wrap text-center m-auto">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 bg-white"><a href="javascript:void(0);" class="d-block"><img src="./public/frontend/assets/img/sneakers.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Shoes</a></h6></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Shop Style 1 ======================== -->


<!-- ======================= Filter Wrap Style 1 ======================== -->
<section class="py-2 br-bottom br-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Women's</li>
                    </ol>
                </nav>
            </div>

            <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
                    <div class="single_fitres elspo_filter mr-2 br-right">
                        <a href="#filterBox" class="simple-button px-2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="filterBox"><i class="lni lni-text-align-right mr-2"></i><span class="hide_mob">Filters</span></a>
                    </div>
                    <div class="single_fitres mr-2 br-right">
                        <select class="custom-select simple">
                            <option value="1" selected="">Default Sorting</option>
                            <option value="2">Sort by price: Low price</option>
                            <option value="3">Sort by price: Hight price</option>
                            <option value="4">Sort by rating</option>
                            <option value="5">Sort by trending</option>
                        </select>
                    </div>
                    <div class="single_fitres">
                        <a href="shop-style-4.html" class="simple-button mr-1"><i class="ti-layout-grid3"></i></a>
                        <a href="shop-grid-3.html" class="simple-button mr-1"><i class="ti-layout-grid2"></i></a>
                        <a href="shop-list-view.html" class="simple-button active"><i class="ti-view-list"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="collapse" id="filterBox">
                    <div class="card py-3 b-0">
                        <div class="row">

                            <!-- Choose Category -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single_filter_title mb-2"><h6 class="mb-0 fs-sm ft-medium text-muted">Choose Categories</h6></div>
                                <div class="single_filter_card mb-2">
                                    <h5><a href="#mens" data-toggle="collapse" class="collapsed" aria-expanded="false" role="button">Men's<i class="accordion-indicator ti-angle-down"></i></a></h5>
                                    <div class="collapse" id="mens" data-parent="#mens-categories">
                                        <div class="card-body">
                                            <div class="inner_widget_link">
                                                <ul class="m-0 p-0">
                                                    <li><a href="#">Pumps & high Heals<span>112</span></a></li>
                                                    <li><a href="#">Sandels<span>82</span></a></li>
                                                    <li><a href="#">Sneakers<span>56</span></a></li>
                                                    <li><a href="#">Boots<span>101</span></a></li>
                                                    <li><a href="#">Casual Shoes<span>212</span></a></li>
                                                    <li><a href="#">Flats Sandel<span>92</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_filter_card">
                                    <h5><a href="#womens" data-toggle="collapse" class="collapsed" aria-expanded="false" role="button">Women's<i class="accordion-indicator ti-angle-down"></i></a></h5>
                                    <div class="collapse" id="womens" data-parent="#womens-categories">
                                        <div class="card-body">
                                            <div class="inner_widget_link">
                                                <ul class="p-0 m-0">
                                                    <li><a href="#">Pumps & high Heals<span>112</span></a></li>
                                                    <li><a href="#">Sandels<span>82</span></a></li>
                                                    <li><a href="#">Sneakers<span>56</span></a></li>
                                                    <li><a href="#">Boots<span>101</span></a></li>
                                                    <li><a href="#">Casual Shoes<span>212</span></a></li>
                                                    <li><a href="#">Flats Sandel<span>92</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Choose Category -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single_filter_title mb-2"><h6 class="mb-0 fs-sm ft-medium text-muted">Choose Size</h6></div>
                                <div class="text-left pb-0 pt-2">
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size" id="a26">
                                        <label class="form-option-label" for="a26">26</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size" id="a28">
                                        <label class="form-option-label" for="a28">28</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="sizes" id="a30" checked>
                                        <label class="form-option-label" for="a30">30</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="sizes" id="a32">
                                        <label class="form-option-label" for="a32">32</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="sizes" id="a34">
                                        <label class="form-option-label" for="a34">34</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="sizes" id="a36">
                                        <label class="form-option-label" for="a36">36</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="sizes" id="a38">
                                        <label class="form-option-label" for="a38">38</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="sizes" id="a40">
                                        <label class="form-option-label" for="a40">40</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="sizes" id="a42">
                                        <label class="form-option-label" for="a42">42</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Choose Category -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single_filter_title mb-2"><h6 class="mb-0 fs-sm ft-medium text-muted">Choose Colors</h6></div>
                                <div class="text-left">
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="whitea8">
                                        <label class="form-option-label rounded-circle" for="whitea8"><span class="form-option-color rounded-circle blc7"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="bluea8">
                                        <label class="form-option-label rounded-circle" for="bluea8"><span class="form-option-color rounded-circle blc2"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="yellowa8">
                                        <label class="form-option-label rounded-circle" for="yellowa8"><span class="form-option-color rounded-circle blc5"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="pinka8">
                                        <label class="form-option-label rounded-circle" for="pink8"><span class="form-option-color rounded-circle blc3"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="ared">
                                        <label class="form-option-label rounded-circle" for="ared"><span class="form-option-color rounded-circle blc4"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="agreen">
                                        <label class="form-option-label rounded-circle" for="agreen"><span class="form-option-color rounded-circle blc6"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="askypet">
                                        <label class="form-option-label rounded-circle" for="askypet"><span class="form-option-color rounded-circle blc9"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="aphilips">
                                        <label class="form-option-label rounded-circle" for="aphilips"><span class="form-option-color rounded-circle blc8"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-1">
                                        <input class="form-check-input" type="radio" name="colora8" id="aelio">
                                        <label class="form-option-label rounded-circle" for="aelio"><span class="form-option-color rounded-circle blc1"></span></label>
                                    </div>
                                </div>
                            </div>

                            <!-- Choose Category -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single_filter_title mb-2"><h6 class="mb-0 fs-sm ft-medium text-muted">Filter By Price</h6></div>
                                <div class="side-list mb-2">
                                    <div class="rg-slider">
                                        <input type="text" class="js-range-slider" name="my_range" value="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ============================= Filter Wrap ============================== -->


<!-- ======================= All Product List ======================== -->
<section class="middle">
    <div class="container">

        <!-- row -->
        <div class="row align-items-center rows-products">

            <?php foreach ($data as $value){?>
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="product_detail?id=<?php echo $value->id; ?>"><img class="card-img-top" src="./public/frontend/assets/img/product/1.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="text-left">
                                <div class="form-check form-option form-check-inline mb-1">
                                    <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                    <label class="form-option-label small rounded-circle" for="white"><span class="form-option-color rounded-circle blc1"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-1">
                                    <input class="form-check-input" type="radio" name="color1" id="blue">
                                    <label class="form-option-label small rounded-circle" for="blue"><span class="form-option-color rounded-circle blc2"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-1">
                                    <input class="form-check-input" type="radio" name="color1" id="yellow">
                                    <label class="form-option-label small rounded-circle" for="yellow"><span class="form-option-color rounded-circle blc3"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-1">
                                    <input class="form-check-input" type="radio" name="color1" id="pink">
                                    <label class="form-option-label small rounded-circle" for="pink"><span class="form-option-color rounded-circle blc4"></span></label>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="text-left">
                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half Running Set</a></h5>
                            <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>


        </div>
        <!-- row -->

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                <a href="#" class="btn stretched-link borders m-auto"><i class="lni lni-reload mr-2"></i>Load More</a>
            </div>
        </div>

    </div>
</section>
<!-- ======================= All Product List ======================== -->

<!-- ======================= Customer Features ======================== -->
<section class="px-0 py-3 br-top">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">Free Shipping</h5>
                        <span class="text-muted">Capped at $10 per order</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="far fa-credit-card"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">Secure Payments</h5>
                        <span class="text-muted">Up to 6 months installments</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">15-Days Returns</h5>
                        <span class="text-muted">Shop with fully confidence</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-headphones-alt"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">24x7 Fully Support</h5>
                        <span class="text-muted">Get friendly support</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>