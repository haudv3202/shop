<!-- ======================= Top Breadcrubms ======================== -->
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Support</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Product Detail ======================== -->
<section class="middle">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="text-center d-block mb-5">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-12 col-lg-7 col-md-12">
                <form action="" method="post">
                    <h5 class="mb-4 ft-medium">Billing Details</h5>
                    <div class="row mb-2">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Full name *</label>
                                <input type="text" class="form-control" name="name" placeholder="First Name" />
                            </div>
                            <?php if(!empty($errors['name'])){
                                foreach ($errors['name'] as $error){
                                    ?>
                                    <div class=" alert alert-danger mt-10 " role="alert">
                                        <div class="alert-content">
                                            <p><?php echo $error;?></p>
                                        </div>
                                    </div>
                                <?php }}?>
                        </div>



                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Email *</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" />
                            </div>
                            <?php if(!empty($errors['email'])){
                                foreach ($errors['email'] as $error){
                                    ?>
                                    <div class=" alert alert-danger mt-10 " role="alert">
                                        <div class="alert-content">
                                            <p><?php echo $error;?></p>
                                        </div>
                                    </div>
                                <?php }}?>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Address 1 *</label>
                                <input type="text" class="form-control" name="address" placeholder="Address 1" />
                            </div>
                            <?php if(!empty($errors['address'])){
                                foreach ($errors['address'] as $error){
                                    ?>
                                    <div class=" alert alert-danger mt-10 " role="alert">
                                        <div class="alert-content">
                                            <p><?php echo $error;?></p>
                                        </div>
                                    </div>
                                <?php }}?>
                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Mobile Number *</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" />
                            </div>
                            <?php if(!empty($errors['mobile'])){
                                foreach ($errors['mobile'] as $error){
                                    ?>
                                    <div class=" alert alert-danger mt-10 " role="alert">
                                        <div class="alert-content">
                                            <p><?php echo $error;?></p>
                                        </div>
                                    </div>
                                <?php }}?>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Additional Information</label>
                                <textarea class="form-control ht-50" name="des"></textarea>
                            </div>
                        </div>

                    </div>

                    <h5 class="mb-4 ft-medium">Payments</h5>
                    <div class="row mb-4">
                        <div class="col-12 col-lg-12 col-xl-12 col-md-12">
                            <div class="panel-group pay_opy980" id="payaccordion">

                                <!-- Pay By Paypal -->
                                <div class="panel panel-default border">
                                    <div class="panel-heading" id="pay">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" role="button" data-parent="#payaccordion" href="#payPal" aria-expanded="true"  aria-controls="payPal" class="">PayPal<img src="./public/frontend/assets/img/paypal.html" class="img-fluid" alt=""></a>
                                        </h4>
                                    </div>
                                    <div id="payPal" class="panel-collapse collapse show" aria-labelledby="pay" data-parent="#payaccordion">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="text-dark">PayPal Email</label>
                                                <input type="text" class="form-control simple" name="email_address" placeholder="paypal@gmail.com">
                                                <?php if(!empty($errors['email_address'])){
                                                    foreach ($errors['email_address'] as $error){
                                                        ?>
                                                        <div class=" alert alert-danger mt-10 " role="alert">
                                                            <div class="alert-content">
                                                                <p><?php echo $error;?></p>
                                                            </div>
                                                        </div>
                                                    <?php }}?>
                                            </div>
                                                <div class="form-group">
                                                    <button type="submit" name="btn_order" class="btn btn-dark btm-md full-width">Pay <?php echo number_format($_SESSION['total']+30000);?>&#8363;</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4 col-md-12">
                <div class="d-block mb-3">
                    <h5 class="mb-4">Order Items (3)</h5>
                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">
                        <?php if (isset($_SESSION['cart'])){ ?>
                        <?php foreach ($_SESSION['cart'] as $value){ ?>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <!-- Image -->
                                    <a href="product.html"><img src="./public/backend/upload/<?php echo $value['image']; ?>" alt="..." class="img-fluid"></a>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <div class="cart_single_caption pl-2">
                                        <h4 class="product_title fs-md ft-medium mb-1 lh-1"><?php echo $value['name']; ?></h4>
                                        <p class="mb-1 lh-1"><span class="text-dark">Số lượng: <?php echo $value['number']; ?></span></p>
                                        <h4 class="fs-md ft-medium mb-3 lh-1"><?php echo $value['price']; ?>&#8363;</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>

                <div class="card mb-4 gray">
                    <div class="card-body">
                        <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                            <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                <span>Tổng</span> <span class="ml-auto text-dark ft-medium"><?php echo number_format($_SESSION['total']);?>&#8363;</span>
                            </li>
                            <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                <span>Phí vận chuyển</span> <span class="ml-auto text-dark ft-medium">30.000&#8363;</span>
                            </li>
                            <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                <span>Phải trả</span> <span class="ml-auto text-dark ft-medium"><?php echo number_format($_SESSION['total']+30000);?>&#8363;</span>
                            </li>
                            <li class="list-group-item fs-sm text-center">
                                Shipping cost calculated at Checkout *
                            </li>
                        </ul>
                    </div>
                </div>

                <a class="btn btn-block btn-dark mb-3" href="checkout.html">Place Your Order</a>
            </div>

        </div>

    </div>
</section>
<!-- ======================= Product Detail End ======================== -->

<!-- ============================= Customer Features =============================== -->
<section class="px-0 py-3 br-top">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-shopping-basket theme-cl"></i>
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
                        <i class="far fa-credit-card theme-cl"></i>
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
                        <i class="fas fa-shield-alt theme-cl"></i>
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
                        <i class="fas fa-headphones-alt theme-cl"></i>
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
<!-- ======================= Customer Features ======================== -->