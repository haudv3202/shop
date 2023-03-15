<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title mt-30">
                    <span>Chức năng</span>
                </li>
                <li>
                    <a href="/asm_php2/admin/" class="">
                        <span class="nav-icon uil uil-calendar-alt"><i class='bx bxs-dashboard'></i></span>
                        <span class="menu-text">Trang Chủ</span>
                    </a>
                </li>
                <li>
                    <a href="categories" class="">
                        <span class="nav-icon uil uil-calendar-alt"><i class='bx bx-list-ul'></i></span>
                        <span class="menu-text">Quản lí danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="products" class="">
                        <span class="nav-icon uil uil-calendar-alt"><i class='bx bxl-product-hunt' ></i></span>
                        <span class="menu-text">Quản lí sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="invoices" class="">
                        <span class="nav-icon uil uil-calendar-alt"><i class='bx bxs-box'></i></span>
                        <span class="menu-text">Quản lí hóa đơn</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="" onclick="alertdismenu()">
                        <span class="nav-icon uil uil-calendar-alt"><i class='bx bxs-message-square-dots'></i></span>
                        <span class="menu-text">Quản lí bình luận</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>

<script>
        function alertdismenu(){
            Swal.fire({
                icon: 'warning',
                title: 'Xin lỗi bạn....',
                text: 'Chức năng đang được phát triển',
                footer: '<a href="https://www.facebook.com/haudn02">Tôi muốn đóng góp ý kiến!</a>'
            })
        }
</script>