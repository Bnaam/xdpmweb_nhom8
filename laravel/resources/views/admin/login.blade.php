<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.header')
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{asset('admin/assets/images/HNR.png')}}" alt="logo icon"  style="height: 50px;width: 150px">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Đăng nhập</div>
		  <?php
		  $message = Session::get('message');
		  $color = Session::get('color');
		  if ($message) {
			  echo '<span class="text-alert" style="color:'.$color.'">' . $message . '</span>';
			  Session::put('message', null);
			  Session::put('color', null);
		  }
		  ?>
		    <form action="" method="POST" id="form_login">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="txt_email" name="txt_email" class="form-control input-shadow" placeholder="Enter Email">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="txt_password" name="txt_password" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" name="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>

			</div>
			 <button type="submit" id="user_group_action" name="user_group_action" value="login" class="btn btn-light btn-block">Sign In</button>

			 
			
			  @csrf

			 
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

	
  <!-- Bootstrap core JavaScript-->
   <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{ URL::asset('assets/js/sidebar-menu.js') }}"></script>
  
  <!-- Custom scripts -->
  <script src="{{ URL::asset('assets/js/app-script.js') }}"></script>
  
</body>
</html>
