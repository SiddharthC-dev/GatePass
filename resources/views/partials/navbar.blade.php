 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <div class="container">
             {{-- <a class="navbar-brand" href="{{ url('/') }}">
                GatePass
             </a> --}}
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="{{ __('Toggle navigation') }}">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <li class="nav-item">
                 <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                         class="fas fa-bars"></i></a>
             </li>
             <li class="nav-item d-none d-sm-inline-block">
                 <a href="#" class="nav-link">Home</a>
             </li>
             <li class="nav-item d-none d-sm-inline-block">
                 <a href="#" class="nav-link">Contact</a>
             </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <li class="nav-item">
             <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                 <i class="fas fa-search"></i>
             </a>
             <div class="navbar-search-block">
                 <form class="form-inline">
                     <div class="input-group input-group-sm">
                         <input class="form-control form-control-navbar" type="search" placeholder="Search"
                             aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-navbar" type="submit">
                                 <i class="fas fa-search"></i>
                             </button>
                             <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </li>

         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="far fa-comments"></i>
                 <span class="badge badge-danger navbar-badge">3</span>
             </a>

             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <a href="{{ route('userrequest.index') }}" class="dropdown-item">

                      @role('user')





                     <!-- Message Start -->
                     <div class="media">
                         <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 {{-- {{$item->visitor_id}} --}}
                                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                             </h3>
                             <p class="text-sm">Call me whenever you can...</p>
                             <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                         </div>
                     </div>
                     <!-- Message End -->





                     @endrole
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                         <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 John Pierce
                                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                             </h3>
                             <p class="text-sm">I got your message bro</p>
                             <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                         <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 Nora Silvester
                                 <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                             </h3>
                             <p class="text-sm">The subject goes here</p>
                             <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
             </div>
         </li>
         <!-- Notifications Dropdown Menu -->


         {{-- logout --}}
         @include('partials.logout')
         {{-- end logout --}}

     </ul>
 </nav>
 </div>


 <!-- /.navbar -->
