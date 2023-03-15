<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-breadcrumb">
                    <div
                        class="breadcrumb-main add-contact justify-content-sm-between"
                    >
                        <div
                            class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper"
                        >
                            <div
                                class="d-flex align-items-center add-contact__title justify-content-center me-sm-25"
                            >
                                <h4 class="text-capitalize fw-500 breadcrumb-title">
                                    Products
                                </h4>
                                <span class="sub-title ms-sm-25 ps-sm-25"></span>
                            </div>
                            <div class="action-btn mt-sm-0 mt-15">
                                <a
                                    href="AddProducts"
                                    class="btn px-20 btn-primary"
                                >
                                    <i class="las la-plus fs-16"></i>Add New
                                </a>
                            </div>
                        </div>
                        <div class="breadcrumb-main__wrapper">
                            <form
                                action="https://demo.dashboardmarket.com/"
                                class="d-flex align-items-center add-contact__form my-sm-0 my-2"
                            >
                                <img src="../public/backend/assets/img/svg/search.svg" alt="search" class="svg" />
                                <input
                                    class="form-control me-sm-2 border-0 box-shadow-none"
                                    type="search"
                                    placeholder="Search by Name"
                                    aria-label="Search"
                                />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header color-dark fw-500">Products</div>
                    <div class="card-body">
                        <div class="userDatatable global-shadow border-light-0 w-100">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <div class="d-flex align-items-center">
                                                <div class="custom-checkbox check-all">
                                                    <input
                                                        class="checkbox"
                                                        type="checkbox"
                                                        id="check-45"
                                                    />
                                                    <label for="check-45">
                                    <span
                                        class="checkbox-text userDatatable-title"
                                    >Tên Sản phẩm</span
                                    >
                                                    </label>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Image</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Categories</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">price</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">short desbi</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">view</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Create date</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Update date</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Sale</span>
                                        </th>
                                        <th>
                              <span class="userDatatable-title float-end"
                              >action</span
                              >
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($allProducts as $value){?>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div
                                                        class="userDatatable__imgWrapper d-flex align-items-center"
                                                    >
                                                        <div class="checkbox-group-wrapper">
                                                            <div class="checkbox-group d-flex">
                                                                <div
                                                                    class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex"
                                                                >
                                                                    <input
                                                                        class="checkbox"
                                                                        type="checkbox"
                                                                        id="check-grp-12"
                                                                    />
                                                                    <label for="check-grp-12"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6><?= $value->name; ?></h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <img src="<?php echo !empty($value->img) ? '../public/backend/upload/'.$value->img : '../public/backend/upload/product_default.jpg'; ?>" width="50" class="profile-image rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <?= $this->cate->view($value->cate_id)->cate_name;  ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <?= $value->price;  ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <?= $value->short_des; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <?= $value->views; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <?=  date('d/m/Y', strtotime($value->create_date)); ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <?= date('d/m/Y', strtotime($value->update_date)); ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content d-inline-block">
                                <span
                                    class="bg-opacity-success color-success rounded-pill userDatatable-content-status active"
                                ><?= $value->sale; ?>%</span
                                >
                                                </div>
                                            </td>
                                            <td>
                                                <ul
                                                    class="orderDatatable_actions mb-0 d-flex flex-wrap"
                                                >
                                                    <li>
                                                        <a href="#" class="view">
                                                            <i class='bx bxs-error-circle'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="EditProducts?id=<?= $value->id ?>" class="edit">
                                                            <i class='bx bx-edit-alt'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="remove" onclick="deleteItem(<?= $value->id?>)">
                                                            <i class='bx bxs-trash'></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-sm-end justify-content-start pt-25"
                        >
                            <nav class="dm-page">
                                <ul class="dm-pagination d-flex">
                                    <li class="dm-pagination__item">
                                        <a
                                            href="#"
                                            class="dm-pagination__link pagination-control"
                                        ><span class="la la-angle-left"></span
                                            ></a>
                                        <a href="#" class="dm-pagination__link"
                                        ><span class="page-number">1</span></a
                                        >
                                        <a href="#" class="dm-pagination__link active"
                                        ><span class="page-number">2</span></a
                                        >
                                        <a href="#" class="dm-pagination__link"
                                        ><span class="page-number">3</span></a
                                        >
                                        <a
                                            href="#"
                                            class="dm-pagination__link pagination-control"
                                        ><span class="page-number">...</span></a
                                        >
                                        <a href="#" class="dm-pagination__link"
                                        ><span class="page-number">12</span></a
                                        >
                                        <a
                                            href="#"
                                            class="dm-pagination__link pagination-control"
                                        ><span class="la la-angle-right"></span
                                            ></a>
                                        <a href="#" class="dm-pagination__option"> </a>
                                    </li>
                                    <li class="dm-pagination__item">
                                        <div class="paging-option">
                                            <select name="page-number" class="page-selection">
                                                <option value="20">20/page</option>
                                                <option value="40">40/page</option>
                                                <option value="60">60/page</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteItem(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "Bạn có chắc chắn muốn xóa sản phẩm này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `Productdelete?id=${id}`;
            }
        })
    }
</script>
