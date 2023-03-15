<!-- Start Navigation -->
<div class="header header-light dark-text">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    <img src="./public/frontend/assets/img/logo.png" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                            <a href="#" onclick="openSearch()">
                                <i class="lni lni-search-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#login">
                                <i class="lni lni-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="openWishlist()">
                                <i class="lni lni-heart"></i><span class="dn-counter">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="openCart()">
                                <i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    <li><a href="home">Home</a></li>

                    <li><a href="shop">Shop</a></li>

                    <li><a href="blog">Blog</a></li>

                    <li><a href="about">About</a></li>

                    <li><a href="contact">Contact</a></li>

                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">
                    <?php if(isset($_SESSION['auth_user'])){ ?>

                        <li>
                            <a href="profile">
                            <img id="avatar_user"  src="./public/backend/upload/<?php echo $_SESSION['auth_user'][0]->img; ?>" width="40" style="border-radius: 50%;" alt="...">
                            </a>
                        </li>
                        <li>
                            <a href="logout">
                                Thoát
                            </a>
                        </li>

                    <?php }else{ ?>
                        <li>
                            <a href="login">
                                <i class="lni lni-user"></i>
                            </a>
                        </li>
                    <?php } ?>
                    <li>
                        <?php
                        $number = 0;
                        if(isset($_SESSION['cart'])){
                            foreach ($_SESSION['cart'] as $value){
                                $number += $value['number'];
                            }
                        }

                        ?>
                        <a href="#" onclick="openCart()">
                            <i class="lni lni-shopping-basket"></i><span id="qty" class="dn-counter"><?php echo $number; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->