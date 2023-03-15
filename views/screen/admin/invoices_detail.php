<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">invoice</h4>
                        <div
                            class="breadcrumb-action justify-content-center flex-wrap"
                        >
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#"><i class="uil uil-estate"></i>Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Invoice
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="payment-invoice global-shadow radius-xl w-100 mb-30">
                    <div class="payment-invoice__body">
                        <div
                            class="payment-invoice-address d-flex justify-content-sm-between"
                        >
                            <div class="payment-invoice-logo">
                                <a href="index.html">
                                    <img class="dark" src="../public/backend/assets/img/logo-dark.png" alt="logo" />
                                    <img
                                        class="light"
                                        src="../public/backend/assets/img/logo-white.png"
                                        alt="logo"
                                    />
                                </a>
                            </div>
                            <div class="payment-invoice-address__area">
                                <address>
                                    Admin Company<br />
                                    795 Folsom Ave, Suite 600<br />
                                    San Francisco, CA 94107, USA<br />
                                    Reg. number : 245000003513
                                </address>
                            </div>
                        </div>
                        <div
                            class="payment-invoice-qr d-flex justify-content-between mb-40 px-xl-50 px-30 py-sm-30 py-20"
                        >
                            <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                <div class="payment-invoice-qr__number">
                                    <div class="display-3">Invoice</div>
                                    <p>No : <span>#<?= $person->id;?></span></p>
                                    <p>Date : <span><?= date('d/m/Y', strtotime($person->create_date));?></span></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                <div
                                    class="payment-invoice-qr__code bg-white radius-xl p-20"
                                >
                                    <img src="../public/backend/assets/img/qr.png" alt="qr" />
                                    <p>8364297359912267</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="payment-invoice-qr__address">
                                    <p>Invoice To:</p>
                                    <span>Stanley Jones</span><br />
                                    <span>795 Folsom Ave, Suite 600</span><br />
                                    <span>San Francisco, CA 94107, USA</span>
                                </div>
                            </div>
                        </div>
                        <div class="payment-invoice-table">
                            <div class="table-responsive">
                                <table id="cart" class="table table-borderless">
                                    <thead>
                                    <tr class="product-cart__header">
                                        <th scope="col">#</th>
                                        <th scope="col">Sản phẩm</th>
                                        <th scope="col" class="text-end">Đơn giá</th>
                                        <th scope="col" class="text-end">Số lượng</th>
                                        <th scope="col" class="text-end">Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data as $value):?>
                                    <tr>
                                        <th>1</th>
                                        <td class="Product-cart-title">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h5 class="mt-0"><?= $this->Product->view($value->product_id)->name?></h5>
                                                    <div class="d-flex">
                                                        <p>Size:<span>large</span></p>
                                                        <p>color:<span>brown</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="unit text-end"><?= number_format($value->unit_price); ?><span>&#8363;</span></td>
                                        <td class="invoice-quantity text-end"><?= $value->quantity; ?></td>
                                        <td class="text-end order"><?= number_format($value->total) ?><span>&#8363;</span></td>
                                    </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="order-summery float-right border-0">
                                            <div class="total">
                                                <div class="subtotalTotal mb-0 text-end">
                                                    Tổng :
                                                </div>
                                                <div class="taxes mb-0 text-end">
                                                    Giảm giá :
                                                </div>
                                                <div class="shipping mb-0 text-end">
                                                    Phí vận chuyển :
                                                </div>
                                            </div>
                                            <div class="total-money mt-2 text-end">
                                                <h6>Phải trả :</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="total-order float-right text-end fs-14 fw-500"
                                            >
                                                <p><?= number_format($total) ?><span>&#8363;</span></p>
                                                <p><?= number_format($sale)?><span>&#8363;</span></p>
                                                <p>30.000<span>&#8363;</span></p>
                                                <h5 class="text-primary"><?= number_format($person->total); ?></h5>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-invoice__btn mt-xxl-50 pt-xxl-30">
                                <button
                                    type="button"
                                    class="btn border rounded-pill bg-normal text-gray px-25 print-btn"
                                >
                                    <img
                                        src="../public/backend/assets/img/svg/printer.svg"
                                        alt="printer"
                                        class="svg"
                                    />print
                                </button>
                                <button
                                    type="button"
                                    class="btn border rounded-pill bg-normal text-gray px-25"
                                >
                                    <img
                                        src="../public/backend/assets/img/svg/send.svg"
                                        alt="send"
                                        class="svg"
                                    />invoice
                                </button>
                                <button
                                    type="button"
                                    class="btn-primary btn rounded-pill px-25 text-white download"
                                >
                                    <img
                                        src="../public/backend/assets/img/svg/upload.svg"
                                        alt="upload"
                                        class="svg"
                                    />download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>