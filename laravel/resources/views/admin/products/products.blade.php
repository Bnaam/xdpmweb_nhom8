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
           <a href="{{route('products.addform')}}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp; Thêm mới</a>

         </div>

         <div class="col-sm-4 " style="float: left;">
            <form action="{{route('products.search')}}" method="POST">
             <input type="text" class="form-control" name="txtkey" id="txtkey" placeholder="Tìm kiếm" style="width: 200px">
             @csrf
             <button type="submit" hidden name="user_group_action" value="sreach" class="btn btn-primary btn-sm">
             </form>
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
                   @if(!empty($alertMessage))
                       
                  
                  <?php alert("{{$alertMessage}}")?> 
                  @endif   
                      <li><a href="{{route('products.index')}}">Sản phẩm &nbsp;</a></li>
                      <li class="active">/ &nbsp; Danh sách Sản phẩm</li>
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

              <h5 class="card-title">Danh sách Sản phẩm</h5>
              
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Tình trạng</th>
   
                        <th scope="col">Màu sắc</th>
                      
                      
                       <th scope="col" colspan="2" style="text-align: center;">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
    
                    @include('layout.orderitem')

                    
                    @foreach($productList as $key => $data)
                    <tr>
                    <th scope="row">{{($key+1)}}</th>
                    <td>{{$data->tensp}}</td>                  
                    
                    <td><img class="" src="{{route('fileproduct', ['filename'=>$data->hinh])}}" alt="" width="50" height="60"></td>
                    <?php echo'<td>'.gia($data->giamoi).'</td>';?>
                    <?php echo'<td><span class="'.tinhtrangsp($data->soluong).'">'.tinhtrangsp2($data->soluong).'</span></td>';?>
       
                    <td>{{$data->mausac}}</td>
                    
                    <td>
                    <a href="{{route('products.editform', ['id'=>$data->masp])}}" class="btn btn-outline-warning btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-edit (alias)"></i>&nbsp; Sửa</a>
                   
                     <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{route('products.delete', ['id'=>$data->masp])}}" type="button" class="btn btn-outline-danger btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-trash-o"></i>&nbsp; Xóa</a>
                  
                    
                    </td>
                    </tr>
                    @endforeach
               
                  </tbody>
                   
                </table>
  
            </div>
            </div>
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
