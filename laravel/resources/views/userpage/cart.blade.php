<?php

session_start();

//định dạng tiền
function vnd($number){
    return number_format($number, 0,',','.');
}
//tính tổng tiền
function total_price($cart){
    $total_price=0;
    foreach ($cart as $key => $value) {
        $total_price+=$value['gia'] * $value['quantity'];
    }
    return $total_price;
}
//phí ship
function phiship($cart){
    if($_SESSION['cart']==null)
        return 0;
    else
        return ((total_price($cart)*0.4)/2);
}
require_once('utils/dbhelper.php');

?>
<!DOCTYPE html>
<html lang="en" >
    <head>
     @include ('userpage/layouts/headerpage')
    </head>

    <body>
        
     @include ('userpage/userpage/layouts/menupage') 
        <!-- Bottom Bar Start -->
     @include ('userpage/layouts/menubottompage')
        <!-- Bottom Bar End -->
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="product-list.php">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 ">
            <div class="cart-page-inner">
               <div class="table-responsive">
                 <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng cộng</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                            <?php foreach ($cart as $key => $value){ ?>
                            <tr>
                            <td class="align-middle"><img src="../adminpage/img/<?php echo 
                                $value['hinhanhsp']?>" alt="" style="width: 50px;"><?php echo 
                                $value['tensp'] ?></td>
                            <td class="align-middle"><?php echo vnd($value['gia'])?><sup>đ</sup></td> 
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <a href="controller/themhangcontroller.php?masp=<?php echo $value['masp']?>&action=min" class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                    <input type="text" class="form-control form-control-sm " value="<?php echo $value['quantity']?>" readonly="readonly">
                                    <div class="input-group-btn">
                                        <a href="controller/themhangcontroller.php?masp=<?php echo $value['masp']?>&action=max" class="btn btn-sm btn-primary">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?php echo vnd($value['gia']*$value['quantity'])?><sup>đ</sup></td>
                            <td class="align-middle"><a href="controller/themhangcontroller.php?masp=<?php echo $value['masp'] ?>&action=delete" class="btn fa fa-trash"></a></td>
                            </form>
                        </tr>
                            <?php  } ?>
                        </tbody>
                     </table>
                     </div>
                    </div>        
                </div>

                <?php if(isset($_SESSION['cart'])){ ?>
                <div class="col-lg-4">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span>Đơn hàng</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Tổng tiền</h6>
                            <h6><?php echo vnd(total_price($cart))?> <sup>đ</sup></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phí vận chuyển</h6>
                            <h6 class="font-weight-medium"><?php echo vnd(phiship($cart))?> <sup>đ</sup></h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng cộng</h5>
                            <h5><?php echo vnd(total_price($cart)+phiship($cart))?> <sup>đ</sup></h5>
                        </div>
                        <a href="checkout.php"><button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Đặt hàng</button></a>
                    </div>
                </div>
            </div><?php } ?>
                </div>

            </div>
            </div>
        </div>
        <!-- Cart End -->
        
         @include ('userpage/layouts/footerpage')
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
         @include ('userpage/layouts/scriptpage')
    </body>
</html>
