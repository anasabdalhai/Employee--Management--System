   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
         @auth
          <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>  
        @endauth
      </div>
 <form action="{{route('logout')}}"method="Post">
            @csrf
             <button type="submit" class="btn btn-danger">logout</button> 
           
            </form>
                <br>
      <!-- SidebarSearch Form -->
      <div class="form-inline ">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
         
        </div>
      </div>

      <!-- Sidebar Menu -->
      <x-nav />
      <!-- /.sidebar-menu -->
    </div>