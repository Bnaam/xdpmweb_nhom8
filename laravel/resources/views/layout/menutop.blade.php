<nav class="navbar navbar-expand fixed-top" style="background-color: #8c8c80;">
    <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
                <i class="icon-menu menu-icon"></i>
            </a>
        </li>
    </ul>



  @if(session('admin_id'))
  
    <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"></h6>
            <p class="user-subtitle">{{session('admin_name')}}</p>
            </div>
           </div>
          </a>
        </li>
        

  
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="/logout"><i class="icon-power mr-2"></i><span> Đăng xuất</span></a></li>
      </ul>
    </li>
  </ul> 
  @else
     <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a href="{{route('login')}}" class="btn btn-outline-secondary " style="color: rgb(255 255 255 / 85%)">Đăng nhập</a>
    </li>
  </ul>
  @endif



</nav>