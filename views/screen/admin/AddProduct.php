<?php
if (isset($_SESSION['success_add'])) {
    $alert = $_SESSION['success_add'];
    echo "<script>Swal.fire(
                  'Thành công!',
                  '$alert',
                  'success'
                );
              (function(){
                                window.setTimeout(function(){
                                        window.location.href = 'products';
                                },1000)
                        })()
                </script>";
    unset($_SESSION['success_add']);
}
?>
<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div
                    class="d-flex align-items-center user-member__title mb-30 mt-30"
                >
                    <h4 class="text-capitalize">Add Categories</h4>
                </div>
            </div>
        </div>
        <div class="card mb-50">
            <div class="row justify-content-center">
                <div class="col-md-5 col-10">
                    <div class="mt-40 mb-50">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="account-profile d-flex align-items-center mb-4">
                            <div class="ap-img pro_img_wrapper">
                                <input
                                        id="file-upload"
                                        type="file"
                                        name="fileUpload"
                                        class="d-none"
                                />

                                <label for="file-upload">
                                    <img
                                            class="ap-img__main rounded-circle wh-120 bg-lighter d-flex"
                                            src="../public/backend/upload/product_default.jpg"
                                            alt="profile"
                                            id="showImg"
                                    />
                                    <span class="cross" id="remove_pro_pic">
                          <img
                                  src="../public/backend/assets/img/svg/camera.svg"
                                  alt="camera"
                                  class="svg"
                          />
                        </span>
                                </label>
                            </div>
                            <div class="account-profile__title">
                                <h6 class="fs-15 ms-20 fw-500 text-capitalize">
                                    profile photo
                                </h6>
                            </div>
                        </div>
                            <?php if(isset($error[0]['fileUpload'])){ ?>
                                <?php foreach ($error[0]['fileUpload'] as $value):?>
                                    <div class=" alert alert-danger mt-10" role="alert">
                                        <div class="alert-content">
                                            <p><?= $value ?></p>
                                        </div>
                                    </div>
                                <?php endforeach;}?>
                            <div class="edit-profile__body">
                                <div class="form-group mb-25">
                                    <label for="name1">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name1"
                                        placeholder="Example Name"
                                        name="Name_product"
                                        value=""
                                    />
                                    <?php if(isset($error[0]['Name_product'])){ ?>
                                        <?php foreach ($error[0]['Name_product'] as $value):?>
                                            <div class=" alert alert-danger mt-10" role="alert">
                                                <div class="alert-content">
                                                    <p><?= $value ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach;}?>
                                </div>
                                <div class="form-group mb-25">
                                <div class="countryOption">
                                    <label for="countryOption"> Categories </label>
                                    <select
                                            class="js-example-basic-single js-states form-control"
                                            id="countryOption"
                                            name="cate_id"
                                    >
                                        <?php foreach ($allCate as $value):?>
                                        <option value="<?= $value->id;?>"><?= $value->cate_name;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                                <div class="form-group mb-25">
                                    <label for="phoneNumber5">Price</label>
                                    <input
                                        type="tel"
                                        class="form-control"
                                        id="phoneNumber5"
                                        placeholder=""
                                        name="Price"
                                        value=""
                                    />
                                    <?php if(isset($error[0]['Price'])){ ?>
                                        <?php foreach ($error[0]['Price'] as $value):?>
                                            <div class=" alert alert-danger mt-10" role="alert">
                                                <div class="alert-content">
                                                    <p><?= $value ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach;}?>
                                </div>
                                <div class="form-group mb-25">
                                    <label for="name1">Short Des</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="name1"
                                            placeholder=""
                                            name="Short_Des"
                                            value=""
                                    />
                                    <?php if(isset($error[0]['Short_Des'])){ ?>
                                        <?php foreach ($error[0]['Short_Des'] as $value):?>
                                            <div class=" alert alert-danger mt-10" role="alert">
                                                <div class="alert-content">
                                                    <p><?= $value ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach;}?>
                                </div>
                                <div class="form-group mb-25">
                                    <label for="name2">Detail</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="name2"
                                            placeholder=""
                                            name="Detail"
                                            value=""
                                    />
                                    <?php if(isset($error[0]['Detail'])){ ?>
                                        <?php foreach ($error[0]['Detail'] as $value):?>
                                            <div class=" alert alert-danger mt-10" role="alert">
                                                <div class="alert-content">
                                                    <p><?= $value ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach;}?>
                                </div>
                                <div class="form-group mb-25">
                                    <label for="Sale">Sale</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="Sale"
                                            placeholder=""
                                            name="sale"
                                            value=""
                                    />
                                    <?php if(isset($error[0]['sale'])){ ?>
                                        <?php foreach ($error[0]['sale'] as $value):?>
                                            <div class=" alert alert-danger mt-10" role="alert">
                                                <div class="alert-content">
                                                    <p><?= $value ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach;}?>
                                </div>
                                <div
                                    class="button-group d-flex pt-25 justify-content-md-end justify-content-start"
                                >
                                    <button type="submit"
                                            name="btnProducts"
                                            class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm"
                                    >
                                        Submit
                                    </button>
                                </div>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // file-upload showImg
    $(document).ready(function(){
        $('#file-upload').change(function(e){
            var render = new FileReader();
            render.onload = function (e){
                $('#showImg').attr('src',e.target.result);
            }
            render.readAsDataURL(e.target.files['0']);
        })
    })
</script>