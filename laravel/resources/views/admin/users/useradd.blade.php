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
                   <a href="{{route('users.index')}}" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>

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
                                        
                      <li><a href="{{route('users.index')}}">Người dùng &nbsp;</a></li>
                      <li class="active">/ &nbsp; Thêm mới người dùng</li>
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
           <div class="card-title">Thông tin người dùng</div>
           <hr>
       
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email" name="email"  class="form-control" value="{{old('email')}}"></div>
                                      @error('email')
                                          <span style="color: red">{{$message}}</span>
                                      @enderror
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="txt_password" name="txt_password"  class="form-control" value="{{old('txt_password')}}"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_ten" name="txt_ten" class="form-control" value="{{old('txt_ten')}}">
                                    </div>
                                    @error('txt_ten')
                                          <span style="color: red;float: right">{{$message}}</span>
                                      @enderror
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">SĐT</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_sdt" name="txt_sdt" class="form-control" value="{{old('txt_sdt')}}"></div>
                                    @error('txt_sdt')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Địa chỉ</label></div>
                                        <div class="col-12 col-md-9"><textarea name="txt_diachi" id="txt_diachi" rows="3" class="form-control" value="{{old('txt_diachi')}}">{{old('txt_diachi')}}</textarea></div>
                                    </div>
                                   
                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Role</label></div>
                                        <div class="col-12 col-md-9" >
                                            <select name="cbx_role" id="cbx_role" class="form-control" >
                                              <option value="" hidden>Chọn vai trò</option>
                                              <option value="User">User</option>
                                              <option value="Admin">Admin</option>

                                            </select>
                                        </div>
                                    </div>
                                    
                             
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
                            <div class="card-footer">
                                <button type="submit" id="btn" name="user_group_action" value="create" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Thêm
                                </button>
                                <button type="reset" name="user_group_action" value="user_reset" class="btn btn-danger btn-sm">
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
