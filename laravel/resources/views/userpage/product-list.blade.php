
    <?php
 
        //định dạng giá 
    function vnd($number){
        return number_format($number, 0,',','.');
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
                    <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                <input type="email" value="Tìm kiếm">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Bộ lọc</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <option class="dropdown-item" value="Mới">Mới nhất</option>
                                                        <option class="dropdown-item" value="Nổi bật">Nổi bật</option>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Giá</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <option class="dropdown-item" value="< 200000">Dưới 2 trăm</option>
                                                    <option class="dropdown-item" value="between 200000 and 400000">Từ 2 trăm - 4 trăm</option>
                                                    <option class="dropdown-item" value="between 400000 and 700000">Từ 4 trăm - 7 trăm</option>
                                                    <option class="dropdown-item" value="between 700000 and 1000000">Từ 7 trăm - 1 triệu</option>
                                                    <option class="dropdown-item" value="> 1000000">Trên 1 triệu</option>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
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

                        <!-- Pagination Start -->
                        <div class="col-md-12 ">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Trước</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Sau</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>           
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-6 sidebar">
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
                                            <img src="/assets/img/product-10.jpg" alt="Product Image">
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
                                            <img src="/assets/img/product-9.jpg" alt="Product Image">
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
                                            <img src="/assets/img/product-8.jpg" alt="Product Image">
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
        <!-- Product List End -->  
        
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
       
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        @include ('userpage/layouts/scriptpage')
    </body>
</html>
