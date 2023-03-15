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
                        <div class="edit-profile__body">
                            <form action="" method="post">
                                <div class="form-group mb-25">
                                    <label for="name1">Name Categories</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name1"
                                        placeholder="Shirt"
                                        name="name_Cate"
                                        value="<?php echo isset($data_old[0]) ? $data_old[0] : ''; ?>"
                                    />
                                    <?php if(isset($error[0]['name_Cate'])){ ?>
                                    <?php foreach ($error[0]['name_Cate'] as $value):?>
                                    <div class=" alert alert-danger mt-10" role="alert">
                                        <div class="alert-content">
                                            <p><?= $value ?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;}?>
                                </div>
                                <div class="form-group mb-25">
                                    <label for="name2">Slug</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name2"
                                        placeholder=""
                                        name="Slug"
                                        value="<?php echo isset($data_old[1]) ? $data_old[1] : ''; ?>"
                                    />
                                    <?php if(isset($error[0]['Slug'])){ ?>
                                        <?php foreach ($error[0]['Slug'] as $value):?>
                                            <div class=" alert alert-danger mt-10" role="alert">
                                                <div class="alert-content">
                                                    <p><?= $value ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach;}?>
                                </div>
                                <div class="form-group mb-25">
                                    <label for="phoneNumber5">Desc</label>
                                    <input
                                        type="tel"
                                        class="form-control"
                                        id="phoneNumber5"
                                        placeholder=""
                                        name="Desc"
                                        value="<?php echo isset($data_old[2]) ? $data_old[2] : ''; ?>"
                                    />
                                    <?php if(isset($error[0]['Desc'])){ ?>
                                        <?php foreach ($error[0]['Desc'] as $value):?>
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
                                            name="btnsubcate"
                                        class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
