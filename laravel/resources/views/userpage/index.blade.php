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
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Sản phẩm bán chạy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Người mới</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Thời trang & Làm đẹp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-child"></i>Trẻ em</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Nam & nữ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Tiện ích & Phụ kiện</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="assets/img/slider-1.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Chi tiết sản phẩm</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua sắm ngay</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="assets/img/slider-2.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Chi tiết sản phẩm</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua sắm ngay</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="assets/img/slider-3.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Chi tiết sản phẩm</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua sắm ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="assets/img/category-1.jpg" />
                                <a class="img-text" href="">
                                    <p>Chi tiết sản phẩm</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="assets/img/category-2.jpg" />
                                <a class="img-text" href="">
                                    <p>Chi tiết sản phẩm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
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
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Thanh toán an toàn</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Giao hàng toàn quốc</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>90 ngày trở lại</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>Hỗ trợ 24/7</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="assets/img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Chi tiết sản phẩm</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="assets/img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Chi tiết sản phẩm</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="assets/img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Chi tiết sản phẩm</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="assets/img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Chi tiết sản phẩm</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="assets/img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Chi tiết sản phẩm</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="assets/img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Chi tiết sản phẩm</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Gọi cho chúng tôi</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0707374705">0707374705</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Sản phẩm nổi bật</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                <?php
 
 //định dạng giá 
function vnd($number){
 return number_format($number, 0,',','.');
}
?>
                <?php
             
             foreach($product as $key => $data){
             echo'

                 <div class="col-md-3">
                     <div class="product-item">
                         <div class="product-title">
                             <a href="detail.php?masp='.$data->masp.'">'.$data->tensp.'</a>
                             <div class="ratting">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                         </div>
                         <div class="product-image">
                             <a href="product-detail.php">';
                                ?>
                                 <img src="{{route('fileproduct', ['filename'=>$data->hinh])}}" alt="">
                            <?php echo'</a>
                             <div class="product-action">
                             <a class="btn btn-outline-dark btn-square" href="controller/themhangcontroller.php?masp='.$data->masp.'&action=add"><i class="fa fa-shopping-cart"></i></a>
                             <a href="#"><i class="fa fa-heart"></i></a>
                                 <a href="#"><i class="fa fa-search"></i></a>
                             </div>
                         </div>
                         <div class="product-price">
                             <h3>'.vnd($data->giamoi).' <sup>đ</sup></h3>
                             <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua ngay</a>
                         </div>
                     </div>
                 </div>';
                
              }
        
         ?>
               

                </div>
            </div>
        </div>
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Đăng kí bản tin</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Email của bạn">
                            <button>Gởi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->        
        
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Sản phẩm gần đây</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
    
                <?php
             
             foreach($product as $key => $data){
             echo'

                 <div class="col-md-3">
                     <div class="product-item">
                         <div class="product-title">
                             <a href="detail.php?masp='.$data->masp.'">'.$data->tensp.'</a>
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
                                 <img src="../assets/img/'.$data->hinh.'" alt="">
                             </a>
                             <div class="product-action">
                             <a class="btn btn-outline-dark btn-square" href="controller/themhangcontroller.php?masp='.$data->masp.'&action=add"><i class="fa fa-shopping-cart"></i></a>
                             <a href="#"><i class="fa fa-heart"></i></a>
                                 <a href="#"><i class="fa fa-search"></i></a>
                             </div>
                         </div>
                         <div class="product-price">
                             <h3>'.vnd($data->giamoi).' <sup>đ</sup></h3>
                             <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua ngay</a>
                         </div>
                     </div>
                 </div>';
                
              }
        
         ?>
               

                </div>
            </div>
        </div>
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Đăng kí bản tin</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Email của bạn">
                            <button>Gởi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               
                         
               
                </div>
            </div>
        </div>
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="assets/img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Jessica</h2>
                                <h3>Nghề nghiệp</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Giáo Viên Mầm non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="assets/img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Join Nguyễn</h2>
                                <h3>Nghề nghiệp</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
Freelancer                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="assets/img/review-3.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Cardibi</h2>
                                <h3>Nghề nghiệp</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
Nội trợ                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
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
