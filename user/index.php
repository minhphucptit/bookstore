<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiệm Sách Quốc Dân</title>
    <link rel="icon" href="./img/title-icon.png" type="image/x-icon">

    <!-- Js -->
    <script src="./theme/lib/bootstrap-4.2.1-dist/js/jquery-3.3.1.js"></script>
    <script src="./theme/lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

    <script src="./theme/lib/fancybox-master/dist/jquery.fancybox.min.js"></script>

    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=463757824153509&autoLogAppEvents=1"></script>
    <script src="./theme/script.js"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="./theme/style.css">

</head>
<?php include('conn.php'); ?>

<body data-spy="scroll" data-target=".navbar" data-offset="150">
    <!-- NAVBAR fixed-top when scrolled -->
    <nav class="navbar navbar-expand-lg navbar-light bg-none fixed-top">
        <a class="navbar-brand" href="file:///F:/PTIT/Web/B%C3%A0i%201/app/index.html"><img class="w-100 h-100"
                src="./img/logo.png" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li id="toTrending" class="nav-item">
                    <a class="nav-link text-uppercase" href="#trending">Trang chủ</a>
                </li>
                <li id="toJustReleased" class="nav-item">
                    <a class="nav-link text-uppercase" href="#justReleased">Mới nhất</a>
                </li>
                <li id="toCategory" class="nav-item">
                    <a class="nav-link text-uppercase" href="#category">Thể loại</a>
                </li>
                <li id="toPopularWriter" class="nav-item">
                    <a class="nav-link text-uppercase" href="#popularWriter">Tác giả</a>
                </li>
                <li id="toFooter" class="nav-item">
                    <a class="nav-link text-uppercase" href="#footer">Liên hệ</a>
                </li>
            </ul>
            <div class="form-group search w-50 mb-0 d-flex justify-content-end">
                <span class="fas fa-search form-control-feedback"></span>
                <input id="input-search" type="text" class="input-rounded form-control w-75"
                    placeholder="Tìm kiếm sản phẩm...">
            </div>
        </div>
    </nav>
    <!-- end-nav -->

    <!-- TRENDING block - slider to display best seller or trending -->
    <section id="trending" class="align-items-center justify-content-center d-flex">
        <div class="row align-items-center">
            <div class="col-md-6 d-none d-md-block">
                <img id="trendingBookImg" class="left-hidden" src="./img/slider-book-2.png" alt="trending-book">
            </div>
            <div class="col-md-6 hidden pl-5 pr-5" id="trendingBookContent">
                <h6 class="text-uppercase text-white-50 mb-5">
                    TRENDING NOW
                </h6>
                <h1 class="text-white text-capitalize">
                    Tác phẩm mới nhất của người đã tạo ra "Tôi Thấy Hoa Vàng Trên Cỏ Xanh"
                </h1>
                <h4 class="font-italic text-white mt-5 mb-5 blockquote">
                    Gờ chắn màu đỏ in bóng tựa viền cánh chim lởm chởm. Mặt trăng đã khuất bóng...
                </h4>
                <a name="" class="pt-3 pb-3 pl-5 pr-5 btn-rounded btn my-btn shadow-sm text-uppercase" href="#"
                    role="button">Xem
                    Ngay</a>
            </div>
        </div>
    </section>
    <!-- end trending -->

    <!-- JUST RELEASED block -->
    <section id="justReleased" class="row justify-content-center">
        <div id="justReleasedTitle" class="hidden col-12 text-center header-box">
            <h2 class="text-capitalize title-section">Vừa Ra Mắt</h3>
                <h6 class="text-muted">Những cuốn sách đỉnh nhất cho năm 2021</h6>
        </div>

        <div class="row container">
        <?php
			$pq=mysqli_query($conn,"select * from product 
            left join category on category.categoryid=product.categoryid 
            left join supplier on supplier.userid=product.supplierid
            order by product.product_qty DESC");
				while($pqrow=mysqli_fetch_array($pq)){
					$pid=$pqrow['productid'];
		?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="just-released-card left-hidden card shadow p-0">
                    <div class="card-body p-0 product">
                        <a href="http://google.com.vn">
                            <img class="w-100 h-100" src=<?php echo "'"; echo $pqrow['photo']; echo "'"; ?> alt="3" srcset="">
                        </a>
                        <button type="button" class="add-to-cart btn"><i class="fas fa-lg fa-cart-plus mr-2"></i> Thêm
                            vào giỏ</button>
                    </div>
                </div>
            </div>
        <?php
			    }
		?>
        </div>

        <div class="col-12 text-center footer-box">
            <a name="" class="shadow-sm pt-2 pb-2 pl-4 pr-4 btn-rounded btn my-btn btn-secondary text-uppercase"
                href="#" role="button">Xem thêm những ấn bản mới nhất</a>
        </div>
    </section>
    <!-- end just-released -->

    <!-- CATEGORY block -->
    <section id="category" class="container-fluid bg-light">
        <div class="row">
            <div class="col-12 text-center header-box">
                <h2 class="text-capitalize title-section">Thể loại</h3>
                    <h6 class="text-muted">Thỏa sức lựa chọn với đầy đủ thể loại</h6>
            </div>
        </div>

        <div class="container">
            <div class="slider-outer row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow p-0">
                        <div class="card-body p-0 product">
                            <a href="http://google.com.vn">
                                <img class="w-100 h-100" src="./img/book-1.jpg" alt="3" srcset="">
                            </a>
                            <button type="button" class="add-to-cart btn"><i class="fas fa-lg fa-cart-plus mr-2"></i>
                                Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow p-0">
                        <div class="card-body p-0 product">
                            <a href="http://google.com.vn">
                                <img class="w-100 h-100" src="./img/released-3.jpg" alt="3" srcset="">
                            </a>
                            <button type="button" class="add-to-cart btn"><i class="fas fa-lg fa-cart-plus mr-2"></i>
                                Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow p-0">
                        <div class="card-body p-0 product">
                            <a href="http://google.com.vn">
                                <img class="w-100 h-100" src="./img/released-3.jpg" alt="3" srcset="">
                            </a>
                            <button type="button" class="add-to-cart btn"><i class="fas fa-lg fa-cart-plus mr-2"></i>
                                Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow p-0">
                        <div class="card-body p-0 product">
                            <a href="http://google.com.vn">
                                <img class="w-100 h-100" src="./img/released-3.jpg" alt="3" srcset="">
                            </a>
                            <button type="button" class="add-to-cart btn"><i class="fas fa-lg fa-cart-plus mr-2"></i>
                                Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center footer-box">
            <a name="" class="shadow-sm pt-2 pb-2 pl-4 pr-4 btn-rounded btn my-btn btn-secondary text-uppercase"
                href="#" role="button">Khám phá thêm nhiều thể loại khác</a>
        </div>
    </section>
    <!-- end category -->

    <!-- POPULAR WRITER block -->
    <section id="popularWriter" class="container-fluid">
        <div class="row">
            <div class="col-12 text-center header-box hidden" id="popularWriterTitle">
                <h2 class="text-capitalize title-section">Cây viết nổi bật</h3>
                    <h6 class="text-muted">Những tác giả được yêu thích nhất gần đây</h6>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow p-0 author text-center left-hidden">
                        <a class="author-image w-100" target="_blank" href="http://google.com.vn">
                            <img class="img-responsive w-100 " src="./img/author-1.jpg" alt="1.jpg" srcset="">
                        </a>
                        <h5 class="title">Nguyễn Nhật Ánh</h5>
                        <div class="social mb-3">
                            <a href="facebook.com" title="Twitter" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-twitter"></a>
                            <a href="facebook.com" title="Instagram" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-instagram"></a>
                            <a href="facebook.com" title="Facebook" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-facebook"></a>
                            <a href="facebook.com" title="Youtube" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-youtube"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow p-0 author text-center left-hidden">
                        <a class="author-image w-100" target="_blank" href="http://google.com.vn">
                            <img class="img-responsive w-100 " src="./img/author-2.jpg" alt="2.jpg" srcset="">
                        </a>
                        <h5 class="title">Harold Stevens</h5>
                        <div class="social mb-3">
                            <a href="facebook.com" title="Twitter" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-twitter"></a>
                            <a href="facebook.com" title="Instagram" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-instagram"></a>
                            <a href="facebook.com" title="Facebook" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-facebook"></a>
                            <a href="facebook.com" title="Youtube" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-youtube"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow p-0 author text-center right-hidden">
                        <a class="author-image w-100" target="_blank" href="http://google.com.vn">
                            <img class="img-responsive w-100 " src="./img/author-3.jpg" alt="3.jpg" srcset="">
                        </a>
                        <h5 class="title">Simon Landor</h5>
                        <div class="social mb-3">
                            <a href="facebook.com" title="Twitter" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-twitter"></a>
                            <a href="facebook.com" title="Instagram" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-instagram"></a>
                            <a href="facebook.com" title="Facebook" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-facebook"></a>
                            <a href="facebook.com" title="Youtube" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-youtube"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow p-0 author text-center right-hidden">
                        <a class="author-image w-100" target="_blank" href="http://google.com.vn">
                            <img class="img-responsive w-100 " src="./img/author-4.jpg" alt="4.jpg" srcset="">
                        </a>
                        <h5 class="title">J.K Rowling</h5>
                        <div class="social mb-3">
                            <a href="facebook.com" title="Twitter" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-twitter"></a>
                            <a href="facebook.com" title="Instagram" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-instagram"></a>
                            <a href="facebook.com" title="Facebook" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-facebook"></a>
                            <a href="facebook.com" title="Youtube" target="_blank"
                                class="icon-link fa-lg mr-2 fab fa-youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end popular-writer -->

    <!-- FOOTER block -->
    <div class="container-fluid bg-light p-3 shadow">
        <section id="footer" class="container-fluid shadow bottom-hidden pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-4 col-lg-4 text-center">
                        <h5 class="text-capitalize title">Nhận thông báo mới hàng tuần</h5>
                        <div class="subscribe mb-5">
                            <input type="email" placeholder="Email của bạn...*" name=""
                                class="shadow-sm input-rounded input-lg form-control form-control-lg" value=""
                                required="required" title="">
                            <button type="button" class="shadow-sm btn-rounded btn my-btn btn-lg w-100 mt-3">Đăng
                                ký</button>
                        </div>
                        <h5 class="text-capitalize title">Theo dõi chúng tôi</h5>
                        <div class="social text-center">
                            <a title="Theo dõi chúng tôi trên Facebook" href="https://facebook.com" target="_blank"
                                class="fab fa-facebook-square fa-2x mr-3"></a>
                            <a title="Theo dõi chúng tôi trên Twitter" href="https://twitter.com" target="_blank"
                                class="fab fa-twitter-square fa-2x mr-3"></a>
                            <a title="Theo dõi chúng tôi trên Instagram" href="https://instagram.com" target="_blank"
                                class="fab fa-instagram fa-2x mr-3"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3 text-center">
                            <a href="file:///F:/PTIT/Web/B%C3%A0i%201/app/index.html">
                                <img class="w-25 h-50" src="./img/logo.png" alt="logo.png" srcset="">
                            </a>
                        </div>
                        <div>
                            <p>
                                <a class="text-muted" title="Ghé thăm chúng tôi"
                                    href="https://goo.gl/maps/X2EMxCNNreQrC2JS7">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    Học viện Công nghệ Bưu chính Viễn thông, Km10 Nguyễn
                                    Trãi, Việt Nam
                                </a>
                            </p>
                            <p>
                                <a class="text-muted" title="Gọi cho chúng tôi" href="tel:+840123456789">
                                    <i class="fas fa-phone mr-2"></i> (+84) 01 234 567 89
                                </a>
                            </p>
                            <p>
                                <a class="text-muted" title="Gửi thư cho chúng tôi"
                                    href="mailto:nptran9810@gmail.com"><i class="fas fa-envelope mr-2"></i>
                                    nminhphuc99@gmail.com</a>
                            </p>
                            <!-- Facbook fanpage -->
                            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs=""
                                data-width="500" data-height="70" data-small-header="true"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end footer -->

    <section id="address" class="container-fluid bg-dark p-0">
        <!-- <div class="row">
            <div class="col-12 text-center header-box mb-4">
                <h2 class="text-capitalize title-section" style="color: white">Ghé thăm chúng tôi</h3>
                    <h6 class="text-muted">Nơi chúng tôi đặt trụ sở và bạn có thể ghé qua bất cứ lúc nào</h6>
            </div>
        </div> -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2688308447737!2d105.7966720144066!3d20.9818582947549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc4106a8a99%3A0xda4db9c48cf21b05!2s1st+Domitory!5e0!3m2!1svi!2s!4v1558973902818!5m2!1svi!2s"
                width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
    <!-- end address with map -->

    <button type="button" id="goTopBtn" title="Lên đầu trang" class="my-btn right-hidden btn"><i
            class="fas fa-angle-double-up"></i></button>
</body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v4.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="105784994178316" theme_color="#fa3c4c"
    logged_in_greeting="Xin chào, Brazos có thể giúp gì cho bạn?"
    logged_out_greeting="Xin chào, Brazos có thể giúp gì cho bạn?">
</div>

</html>