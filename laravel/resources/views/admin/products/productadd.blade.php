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
                   <a href="{{route('products.index')}}" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>

                </div>
                
              </div>
             </div>
           </div>
          </div>

          
    
    <div class="col-lg-6" style="float: left;">
             <div class="card" >
               <div class="card-body">
               <div class="card-title">
                 <ol class="breadcrumb text-right">
                                        
                      <li><a href="{{route('products.index')}}">Sản phẩm &nbsp;</a></li>
                      <li class="active">/ &nbsp; Thêm mới Sản phẩm</li>
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
           <div class="card-title">Thông tin Sản phẩm</div>
           <hr>
       
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="txt_tensp" name="txt_tensp" class="form-control" value="{{old('txt_tensp')}}">
                </div>
                @error('txt_tensp')
                     <span style="color: red;float: right">{{$message}}</span>
                @enderror
                </div>
               
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Số lượng</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="txt_soluongsp" name="txt_soluongsp" class="form-control" min="0" required></div>
                @error('txt_soluongsp')
                    <span style="color: red;float: right">{{$message}}</span>
                @enderror
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Giá bán</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="txt_Giamoi" name="txt_Giamoi" class="form-control" required></div>
                @error('txt_Giamoi')
                    <span style="color: red;float: right">{{$message}}</span>
                @enderror
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Màu sắc</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="txt_mau" name="txt_mau" class="form-control" required></div>
                @error('txt_mau')
                    <span style="color: red;float: right">{{$message}}</span>
                @enderror
                </div>
                

                 <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                    <div class="col-12 col-md-9"><textarea name="txt_mota" id="txt_mota" rows="9" class="form-control" required></textarea></div>
                </div>
               
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Danh mục</label></div>
                    <div class="col-12 col-md-9" >
                        <select name="cbx_danhmuc" id="cbx_danhmuc" class="form-control" required>
                          <option value="" hidden>Chọn danh mục</option>
                 
                          @foreach ($productCatalogList as $key => $data) {

                            <option value="{{$data->madm}}">{{$data->tendm}}</option>
                         @endforeach
                        </select>
                    </div>
                @error('cbx_danhmuc')
                    <span style="color: red;float: right">{{$message}}</span>
                @enderror  
                </div>
               

               <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" classa=" form-control-label">Hình ảnh</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file_avatar" name="file_avatar" class="form-control-file"></div>
                    @error('file_avatar')
                    <span style="color: red;float: right">{{$message}}</span>
                @enderror 
                </div>
                
                
             <div class="card-footer">
            <button type="submit" name="product_group_action" value="create" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Thêm
            </button>
            <button type="reset" name="btn_reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>

                            @csrf
                                </form>

                            
         </div>
      </div>

      
    </div><!--End Row-->


      
	  
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
	
	<!--start color switcher-->
  @include('layout.theme')<!--End wrapper-->


  <!-- Bootstrap core JavaScript-->

  @include('layout.script')

</body>
</html>
