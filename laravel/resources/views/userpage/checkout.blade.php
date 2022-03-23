<?php
ob_start();
session_start();
function vnd($number){
    return number_format($number, 0,',','.');
}
function total_price($cart){
    $total_price=0;
    foreach ($cart as $key => $value) {
        $total_price+=$value['gia']*$value['quantity'];
    }
    return $total_price;
}
function phiship($cart){
    if($_SESSION['cart']==null)
        return 0;
    else
        return ((total_price($cart)*0.001)/2);
}
require_once('utils/dbhelper.php');
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $sql      = 'select * from accclient where username = "'.$user.'"';
    $user = executeSingleResult($sql);
    if ($user != null) {
        $ho = $user['ho'];
        $ten = $user['ten'];
        $sdt = $user['sdt'];
    }
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
                    <li class="breadcrumb-item"><a href="product-list.html">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Thanh toán</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 

                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Địa chỉ thanh toán</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tên </label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" name="ten" placeholder="Nhập tên của bạn">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Họ</label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" name="ho" placeholder="nhập họ của bạn">
                                    </div>
                                    <div class="col-md-6">
                                        <label>SDT</label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" name="sdt" placeholder="Nhập SDT">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Địa chỉ</label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" name="diachi" placeholder="Địa chỉ">
                                    </div>
                                  
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newaccount">
                                            <label class="custom-control-label" for="newaccount">Tạo tài khoản</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto">
                                            <label class="custom-control-label" for="shipto">Vận chuyển đến các địa chỉ khác nhau</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="shipping-address">
                                <h2>Địa chỉ vận chuyển</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tên</label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" placeholder="Nhập tên của bạn">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Họ</label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" placeholder="Nhập họ của bạn">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label>SDT</label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" placeholder="Nhập SDT">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Địa chỉ</label> <sup style="color: red;">*</sup>
                                        <input class="form-control" type="text" placeholder="Nhập địa chỉ">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Tổng sản phẩm</h1>
                                <p>Tên SP<span>$99</span></p>
                                <p class="sub-total">Tổng phụ<span>$99</span></p>
                                <p class="ship-cost">Phí vận chuyển<span>$1</span></p>
                                <h2>Thành tiền<span>$100</span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Phương thức thanh toán</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Thanh Toán qua thẻ ngân hàng</label>
                                        </div>
                                        <div class="payment-content" id="payment-1-show">
                                            <p>
                                                Chúng Tôi mang lại nhiều sự lựa chọn cho quý khách. Mong Quý Khách hãy luôn ủng hộ chúng tôi.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                            Chúng Tôi mang lại nhiều sự lựa chọn cho quý khách. Mong Quý Khách hãy luôn ủng hộ chúng tôi.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <button>Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Checkout End -->
        
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
