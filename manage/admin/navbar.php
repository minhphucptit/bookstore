<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">QUẢN LÝ CỬA HÀNG</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Info</a></li>
                <li class="divider"></li>
                <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a></li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php"><i class="fa fa-home fa-fw"></i> Trang chủ</a>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-briefcase"></i> Quản lý<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span> Người dùng <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="customer.php"> <i class="fa fa-smile-o"></i> Khách hàng</a>
                                </li>
                                <li>
                                    <a href="supplier.php"> <i class="fa fa-truck"></i> Nhà xuất bản</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="product.php"> <i class="fa fa-shopping-cart"></i> Sản Phẩm</a>

                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Thống kê<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="revenue_statistic.php"><span class="fa fa-bar-chart"></span> Thống kê doanh thu theo khách hàng</a>
                            
                        </li>
                        <li><a href="product_statistic.php"> <i class="fa fa-bar-chart"></i> Thống kê sản phẩm bán chạy</a>

                        </li>
                        <li><a href="product_category_statistic.php"> <i class="fa fa-pie-chart"></i> Thống kê thể loại</a>

                        </li>
                    </ul>
                </li>

                <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</nav>