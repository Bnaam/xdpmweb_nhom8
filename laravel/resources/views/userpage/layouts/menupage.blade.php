<?php
  //session_start();
  if(!isset($_SESSION)){
    session_start();
  }
?>
<div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="/index" class="nav-item nav-link active">Trang chủ</a>
                            <a href="/product-list" class="nav-item nav-link">Sản phẩm</a>
                            <a href="product-detail.php" class="nav-item nav-link">Chi tiết sản phẩm</a>
                            <a href="cart.php" class="nav-item nav-link">Giỏ hàng</a>
                            <a href="checkout.php" class="nav-item nav-link">Kiểm tra lại</a>
                            <a href="my-account.php" class="nav-item nav-link">Tài khoản</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Thêm trang</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.php" class="dropdown-item">Danh sách mong muốn</a>
                                    <a href="/loginuser" class="dropdown-item">Đăng nhập</a>
                                    <a href="/register" class="dropdown-item"> Đăng ký</a>
                                    <a href="contact.php" class="dropdown-item">Liên hệ</a>
                                    <?php
                                        if(!empty($_SESSION["cart_item"])){
                                        echo'<span>'.count($_SESSION["cart_item"]).'</span>'; 
                                        }else{
                                            echo'<span>0</span>';
                                         }
                        
                                    ?>
                                </div>
                            </div>
                        </div>
                      
                        <?php
                      /*
                            if(isset($_SESSION["username"]))
                            {
                                echo '<li class="nav-item"><a class="nav-link" href="#" >Welcome '.$_SESSION["username"].'</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="../userpage/controller/logoutController2.php" class="dropdown-item">Đăng Xuất</a></li>';
                            }
                            else
                            {
                                echo '<li class="nav-item"><a class="nav-link" href="../userpage/login.php" >Đăng Nhập</a></li>';
                     
                            }
                            */
                    ?>
                      @if(session('userid'))
                      <li class="nav-item"><a class="nav-link" href="#" >Welcome {{session('email')}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="/logoutuser" class="dropdown-item">Đăng Xuất</a></li>
                      @else
                     <li class="nav-item"><a class="nav-link" href="/loginuser" >Đăng Nhập</a></li>

                      @endif
                    </div>
                </nav>
            </div>
        </div>