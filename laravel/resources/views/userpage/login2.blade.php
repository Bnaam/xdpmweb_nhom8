
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
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Đăng nhập</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-lg-6">
                        <div class="login-form">
                         <form action="/loginuser" method="POST" accept-charset="utf-8">
                         
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name="email" placeholder="Nhập Email">
                                </div>
                                <div class="col-md-6">
                                    <label>Mật khẩu</label>
                                    <input class="form-control" type="password" name="password" placeholder="Mật khẩu">
                                    <small><a href="">Quên mật khẩu?</a></small>
                                </div>
                                <div class="col-md-12">
                                </div>
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary font-weight-bold">Đăng nhập</button>
                                     <div class="col-md-12 form-group"><small>Bạn chưa có tài khoản ?<a href="register"> Đăng ký</a></small></div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
        
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
