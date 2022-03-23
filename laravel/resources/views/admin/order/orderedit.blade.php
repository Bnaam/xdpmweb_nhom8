<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.header')
  
</head>


 
<!-- Start wrapper-->
<body class="bg-theme bg-theme1">
   @include('layout.menu')

      

   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
   @include('layout.menutop')
      
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
         <div class="col-lg-12">
             <div class="card">
               <div class="card-body">
               <div class="card-title">
                <div class="col-sm-8" style="float: left;">
                  <a href="{{route('orders.index')}}" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>
                </div>
              </div>
             </div>
           </div>
          </div>

          
    
    <div class="col-lg-7" style="float: left;">
             <div class="card" >
               <div class="card-body">
               <div class="card-title">
                 <ol class="breadcrumb text-right">                    
                      <li><a href="{{route('orders.index')}}">Đơn hàng &nbsp;</a></li>
                      <li class="active">/ &nbsp;Chỉnh sửa thông tin đơn hàng</li>
                 </ol>
                   
               </div>
             </div>
           </div>
          </div>
             
    <div class="container-fluid" style="float: left;">
      
       <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Thông tin đơn hàng</div>
           <hr>
           <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
              <div class="col-12 col-md-9"><input type="text" id="txt_ten" name="txt_ten" readonly class="form-control" value="{{old('txt_ten') ?? $detail->madh}}">
          </div>
          @error('txt_ten')
                <span style="color: red">{{$message}}</span>
            @enderror
          </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Ngày đặt hàng</label></div>
                <div class="col-12 col-md-9"><input type="date" id="txt_dathang" name="txt_dathang" readonly  class="form-control" value="{{old('txt_dathang') ?? $detail->ngaydathang}}"></div>
              @error('email')
                  <span style="color: red">{{$message}}</span>
              @enderror
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Ngày giao hàng</label></div>
                <div class="col-12 col-md-9"><input type="date" id="txt_giaohang" name="txt_giaohang"  class="form-control" value="{{old('txt_giaohang') ?? $detail->ngaygiaohang}}"></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">Tình trạng</label></div>
              <div class="col-12 col-md-9" >
                  <select name="cbx_trangthai" id="cbx_trangthai" class="form-control" required>
                    <option value="{{$detail->tinhtrang}}}" hidden>{{$detail->tinhtrang}}</option>
                    <option value="Đã xác nhận">Đã xác nhận</option>
                    <option value="Đang giao">Đang giao</option>
                    <option value="Đã giao">Đã giao</option> 
                    <option value="Đã hủy đơn">Đã hủy đơn</option>'

                  </select>
              </div>
          </div>
           
           
                <div class="card-footer">
                    <button type="submit" id="btn" name="user_group_action" value="create" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Cập nhật
                    </button>
                    <button type="reset" name="user_group_action" value="user_reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>

    @csrf
        </form>

                            </div>
                            <div class="card">
                                <div class="card-body">
                            <div class="card-title">Chi tiết đơn hàng</div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                             
                                   <tbody>
                                    
                                    <div class="table-responsive">
                                        <table class="table">
                                           <thead>
                                             <tr>
                                               <th scope="col">STT</th>
                                               <th scope="col">Mã đơn hàng</th>
                                               <th scope="col">Mã sản phẩm</th>
                                               <th scope="col">Số lượng</th>

                                             </tr>
                                           </thead>
                                           <tbody>
                                            @include('layout/orderitem')
                                             <?php
                                             $tongtien = 0;
                                             $tongsl = 0;?>
                                            
                                            @foreach($OrderDetailList  as $key => $data)
                                            <?php
                                        echo'<tr>';
                                        echo'<th scope="row">'.($key+1).'</th>';
                                        echo'<td>'.$data->madh.'</td>';
                                        echo'<td>'.$data->masp.'</td>';
                                        
                                        echo'<td>'.$data->soluong.'</td>';
                                        echo'<td>'.gia($data->giatien).'</td>';
                               
                                        $tongtien += $data->giatien;
                                        $tongsl +=$data->soluong;
                                        
                                        ?>
                                       @endforeach
                                        </tr>
                                        <tr>
                                          <th scope="col" colspan="3">Tổng :</th>
                                          
                                          <?php
                                          echo'<th scope="col">'.$tongsl.'</th>';
                                          echo'<th scope="col">'.gia($tongtien).'</th>';
                                          
                                          ?>
                                        </tr>
                                           
                                    
                                    
                                           </tbody>
                                            
                                         </table>
                                     </div>
                            
                                   </tbody>
                                    
                                 </table>
                             </div>

         </div>


         
      </div>
<!--End Row-->

      
	  
	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->

	<footer class="footer">
    @include('layout.footer')
    </footer>
	<!--End footer-->

  <!-- Bootstrap core JavaScript-->
  @include('layout.theme')

  @include('layout.script')

	
</body>
</html>

