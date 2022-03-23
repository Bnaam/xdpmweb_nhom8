


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
                    <li class="breadcrumb-item active"> Đăng ký</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="register-form">
                        <form action="" method="POST" accept-charset="utf-8">  
                            <div class="row">
                            <div class="col-md-6">
                                    <label>Tên</label>
                                    <input class="form-control" type="text" name ="txt_ten" placeholder="Nhập Tên">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name ="email" placeholder="Nhập email">
                                </div>
                               
                                <div class="col-md-6">
                                    <label>Địa chỉ</label>
                                    <input class="form-control" type="text" name ="txt_diachi" placeholder="Nhập ĐC">
                                </div>
                                <div class="col-md-6">
                                    <label>SĐT</label>
                                    <input class="form-control" type="text" name ="txt_sdt" placeholder="Nhập SĐT">
                                </div>
                                <div class="col-md-6">
                                    <label>Mật khẩu</label>
                                    <input class="form-control" type="password" name ="txt_pass" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="col-md-6">
                                    <label>Nhập lại mật khẩu</label>
                                    <input class="form-control" type="password" name ="txt_repass" placeholder="nhập lại mật khẩu">
                                </div>
                                <div class="col-md-12">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Giới tính</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="rad_nam" name="rad_gt" value="Nam" class="form-check-input">Nam
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="rad_nu" name="rad_gt" value="Nữ" class="form-check-input">Nữ
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-primary font-weight-bold" type="submit">Đăng ký</button>
                                </div>
                                
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
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
