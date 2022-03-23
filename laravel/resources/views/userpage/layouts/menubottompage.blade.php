<?php
//kiểm tra giá trị trong cart
$cart=(isset($_SESSION['cart']))?$_SESSION['cart']:[];
//tổng item trong giỏ, 
function total_item($cart){
    $total=0;
    foreach ($cart as $key => $value) {
        $total += $value['quantity'];
    }
    return $total;
}
 ?>
<div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Tìm kiếm">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span><?php echo total_item($cart) ?> </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>