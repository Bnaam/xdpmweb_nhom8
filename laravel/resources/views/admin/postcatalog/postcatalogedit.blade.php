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
                   <a href="{{route('postcatalog.index')}}" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>

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
                                        
                      <li><a href="{{route('postcatalog.index')}}">Danh mục bài viết &nbsp;</a></li>
                      <li class="active">/ &nbsp; Sửa thông tin danh mục</li>
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
           <div class="card-title">Thông tin danh mục</div>
           <hr>
       
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">

              
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input"
                            class=" form-control-label">Tên danh mục</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="tendm"
                            name="tendm" class="form-control" value="{{old('tendm') ?? $detail->tendm}}">
                    </div>
                    @error('tendm')
                        <span style="color: red;float: right">{{$message}}</span>
                    @enderror
                </div>

                

                
                <div class="card-footer">
                    <button type="submit" name="post_group_action" value="create"
                        class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Save
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
