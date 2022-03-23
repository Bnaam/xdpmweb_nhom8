<!DOCTYPE html>
<html lang="en">

<head>
    @include 'layouts/headerpage'

</head>
<body>
    
    <!-- Nav Bar Start -->
    @include 'layouts/menupage'

    <!-- Nav Bar End -->      
    
    <!-- Bottom Bar Start -->
   @include 'layouts/menubottompage'
    <!-- Bottom Bar End -->

    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Quý khách đã đặt hàng thành công!</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <ul>
                        <li>Hóa đơn mua hàng của Quý khách đã được chuyển đến Địa chỉ Email có trong phần Thông tin khách hàng của chúng tôi</li>
                        <li>Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin khách hàng của chúng tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này</li>
                        <li>Nhân viên giao hàng sẽ liên hệ với Quý khách qua số điện thoại trước khi giao hàng 24 tiếng</li>
                        <li style="list-style-type: none; font-weight: bold;">Cảm ơn Quý khách đã sử dụng sản phẩm của công ty chúng tôi!</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Contact End -->


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