<?php
require_once ('utils/dbhelper.php');
if (isset($_GET['masp'])) {
$masp = $_GET['masp'];
$sql = 'select * from sanpham where masp = "' . $masp . '"';
$sanpham = executeSingleResult($sql);
if ($sanpham != null) {
$masp = $sanpham['masp'];
$tensp = $sanpham['tensp'];
$hinhanhsp = $sanpham['hinhanhsp'];
$gia = $sanpham['gia'];
$xuatxu = $sanpham['xuatxu'];
$trangthai = $sanpham['trangthai'];
$tinhtrang = $sanpham['tinhtrang'];
$loai = $sanpham['loai'];
$info = $sanpham['thongtin'];
}
}
function vnd($number) {
    return number_format($number, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    @include ('userpage/layouts/headerpage')

    </head>

    <body>
       
         <!-- Nav Bar Start -->
         @include ('userpage/layouts/menupage')
        <!-- Nav Bar End -->      
          
        
        <!-- Bottom Bar Start -->
        @include ('userpage/layouts/menubottompage')
        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="product-detail-top">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        <img src="img/product-1.jpg" alt="Product Image">
                                        <img src="img/product-3.jpg" alt="Product Image">
                                        <img src="img/product-5.jpg" alt="Product Image">
                                        <img src="img/product-7.jpg" alt="Product Image">
                                        <img src="img/product-9.jpg" alt="Product Image">
                                        <img src="img/product-10.jpg" alt="Product Image">
                                    </div>
                                    <div class="product-slider-single-nav normal-slider">
                                        <div class="slider-nav-img"><img src="img/product-1.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-3.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-5.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-7.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-9.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-10.jpg" alt="Product Image"></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <div class="title"><h2>Áo sơ mi</h2></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <h4>Giá:</h4>
                                            <p>120.000<sup>đ</sup> <span>150.000<sup>đ</sup</span></p>
                                        </div>
                                        <div class="quantity">
                                            <h4>Số lượng:</h4>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="p-size">
                                            <h4>Size:</h4>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn">S</button>
                                                <button type="button" class="btn">M</button>
                                                <button type="button" class="btn">L</button>
                                                <button type="button" class="btn">XL</button>
                                            </div> 
                                        </div>
                                        <div class="p-color">
                                            <h4>Màu:</h4>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn">Trắng</button>
                                                <button type="button" class="btn">Đen</button>
                                                <button type="button" class="btn">Xanh</button>
                                            </div> 
                                        </div>
                                        <div class="action">
                                            <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            <a class="btn" href="#"><i class="fa fa-shopping-bag"></i>Mua ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Mô tả</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#specification">Quy cách</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Đánh giá (1)</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="container tab-pane active">
                                        <h4>Mô tả SP</h4>
                                        <p>
                                        
                                        Chiếc áo mỏng này thật tuyệt vời cho một ngày trên bãi biển mùa hè. Nó lý tưởng hơn việc mặc đồ bơi và cũng dễ dàng biến tấu.
                                        Nó sẽ trở thành sự lựa chọn tuyệt vời cho những buổi tiệc đêm. 
                                        Với chất liệu nhẹ nhàng và tôn dáng bạn chắc chắn sẽ muốn mặc nó cho kỳ nghỉ hè này!” 
                                        </p>
                                    </div>
                                    <div id="specification" class="container tab-pane fade">
                                        <h4>Đặt điểm SP</h4>
                                        <ul>
                                            <li>Hàng được sản xuất theo tiêu chuẩn quốc tế</li>
                                            <li>Độ bền ổn định</li>
                                            <li>Phù hợp với nhiều lứa tuổi</li>
                                            <li>Giá cả hợp lí</li>
                                            <li>Được đổi trả sản phẩm trong vòng 7 ngày kể từ ngày mua</li>
                                        </ul>
                                    </div>
                                    <div id="reviews" class="container tab-pane fade">
                                        <div class="reviews-submitted">
                                            <div class="reviewer">Trần Văn Danh - <span>01 Jan 2020</span></div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>
                                                Sản phẩm tốt chất lượng tuyệt vời
                                            </p>
                                            <div class="reviewer">Nguyễn Bảo - <span>01 Jan 2020</span></div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>
                                                Sản phẩm tốt sử dụng bền
                                            </p>
                                        </div>
                                        <div class="reviews-submit">
                                            <h4>Đánh giá:</h4>
                                            <div class="ratting">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="row form">
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Tên">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="email" placeholder="Email">
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea placeholder="Review"></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button>Gửi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-widget category">
                            <h2 class="title">Loại</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-female"></i>Thời trang & Làm đẹp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-child"></i>Trẻ em</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Nam & Nữ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Tiện ích & Phụ kiện</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Áo Đầm</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.php">
                                            <img src="img/product-10.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3>120.000<sup>đ</sup></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua ngay</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Áo Hoodie Nữ</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-9.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a class="btn btn-outline-dark btn-square" onclick="return themgiohang()" href="controller/themhangcontroller.php?masp='.$item['masp'].'&action=add"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3>700.000<sup>đ</sup></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua ngay</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Áo Ren Cổ Lưới</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-8.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3>350.000<sup>đ</sup></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
        
         <!-- Footer Start -->
         @include ('userpage/layouts/footerpage')
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        @include ('userpage/layouts/footerbottompage')
        <!-- Footer Bottom End -->     
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        @include ('userpage/layouts/scriptpage')
    </body>
</html>
