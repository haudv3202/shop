<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">sellers</h4>
                        <div
                            class="breadcrumb-action justify-content-center flex-wrap"
                        >
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#"><i class="uil uil-estate"></i>Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        sellers
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
                <div
                    class="userDatatable orderDatatable sellerDatatable global-shadow mb-30 py-30 px-sm-30 px-20 radius-xl w-100"
                >
                    <div
                        class="project-top-wrapper d-flex justify-content-between flex-wrap mb-25 mt-n10"
                    >
                        <div
                            class="d-flex align-items-center flex-wrap justify-content-center"
                        >
                            <div
                                class="project-search order-search global-shadow mt-10"
                            >
                                <form
                                    action="https://demo.dashboardmarket.com/"
                                    class="order-search__form"
                                >
                                    <img
                                        src="../public/backend/assets/img/svg/search.svg"
                                        alt="search"
                                        class="svg"
                                    />
                                    <input
                                        class="form-control me-sm-2 border-0 box-shadow-none"
                                        type="search"
                                        placeholder="Filter by keyword"
                                        aria-label="Search"
                                    />
                                </form>
                            </div>
                        </div>
                        <div class="content-center">
                            <div
                                class="button-group m-0 mt-sm-0 mt-10 order-button-group"
                            >
                                <button
                                    type="button"
                                    class="order-bg-opacity-secondary text-secondary btn radius-md"
                                >
                                    Export
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless border-0">
                            <thead>
                            <tr class="userDatatable-header">
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <div class="bd-example-indeterminate">
                                            <div
                                                class="checkbox-theme-default custom-checkbox check-all"
                                            >
                                                <input
                                                    class="checkbox"
                                                    type="checkbox"
                                                    id="check-23"
                                                />
                                                <label for="check-23">
                                                    <span class="checkbox-text"> sellers </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <span class="userDatatable-title">Phone number</span>
                                </th>
                                <th scope="col">
                                    <span class="userDatatable-title">Email</span>
                                </th>
                                <th scope="col">
                          <span class="userDatatable-title"
                          >Total</span
                          >
                                </th>
                                <th scope="col">
                          <span class="userDatatable-title float-end"
                          >Create Date</span
                          >
                                </th>
                                <th scope="col" class="text-end">
                                    <span class="userDatatable-title">Actions</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allInvoices as $value):?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex me-3">
                                                    <div
                                                        class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex"
                                                    >
                                                        <input
                                                            class="checkbox"
                                                            type="checkbox"
                                                            id="check-grp-ellie11"
                                                        />
                                                        <label for="check-grp-ellie11"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a
                                                href="#"
                                                class="profile-image rounded-circle d-block m-0 wh-32"
                                                style="
                                  background-image: url('../public/backend/assets/img/tm1.png');
                                  background-size: cover;
                                "
                                            ></a>
                                        </div>
                                        <div class="orderDatatable-title">
                                            <p class="d-block mb-0"><?= $value->customer_name;?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="orderDatatable-title"><?= $value->customer_phone_number	;?></div>
                                </td>
                                <td>
                                    <div class="orderDatatable-title"><?= $value->customer_email;?></div>
                                </td>
                                <td>
                                    <div class="orderDatatable-title"><?= $value->total;?></div>
                                </td>
                                <td>
                                    <div class="orderDatatable-title float-end">
                                        <?= date('d/m/Y', strtotime($value->create_date));?>
                                    </div>
                                </td>
                                <td>
                                    <ul
                                        class="orderDatatable_actions mb-0 d-flex flex-wrap float-end"
                                    >
                                        <li>
                                            <a href="detailBill?id=<?= $value->id ?>" class="edit">
                                                <i class='bx bxs-error-circle'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="remove" onclick="deleteItem(<?= $value->id ?>)">
                                                <i class='bx bxs-trash'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mt-15 pt-25 border-top">
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

<script>
    function deleteItem(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "Bạn có chắc chắn muốn xóa hóa đơn này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `InvoicedDelete?id=${id}`;
            }
        })
    }
</script>