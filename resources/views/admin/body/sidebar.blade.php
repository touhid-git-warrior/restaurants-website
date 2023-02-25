<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.view')}}" class="brand-link">
      
      <span class="brand-text font-weight-light">Admin Pannel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="{{route('admin.view')}}" class="d-block">Total Site Control Admin Pannel</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Order Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.order')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Orders</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('order.message')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Message</p>
                </a>
              </li>
            
              
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Site Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

     


             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.logo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo Manage</p>
                </a>
              </li>

            </ul>



            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.navbar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar Manage</p>
                </a>
              </li>

            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('adminnavbar.booking')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar Booking</p>
                </a>
              </li>

            </ul>


             <ul class="nav nav-treeview">
              <hr>
              <li class="nav-item">
                <a href="{{route('slider.manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Manage</p>
                </a>
              </li>

            </ul>


            

         

               <ul class="nav nav-treeview">
                <hr>
              <li class="nav-item">
                <a href="{{route('admin.about')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Manage</p>
                </a>
              </li>

            </ul>

            
            

             <ul class="nav nav-treeview">
              <hr>
              <li class="nav-item">
                <a href="{{route('adabout.image')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Image Manage</p>
                </a>
              </li>

            </ul>


            <ul class="nav nav-treeview">
               
              <li class="nav-item">
                <a href="{{route('aboutdesc.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Description Manage</p>
                </a>
              </li>

            </ul>

           


            <ul class="nav nav-treeview">
              <hr>
              <li class="nav-item">
                <a href="{{route('admin.menu')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Manage</p>
                </a>
              </li>

            </ul>


             <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{route('menu.title')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Title</p>
                </a>
              </li>

            </ul>

              <ul class="nav nav-treeview">

                <hr>
              
              <li class="nav-item">
                <a href="{{route('order.setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking Setting</p>
                </a>
              </li>




              <!-- admin.chef -->

            </ul>



             <ul class="nav nav-treeview">

                <hr>
              
              <li class="nav-item">
                <a href="{{route('chef.title')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chef Title</p>
                </a>
              </li>


               <li class="nav-item">
                <a href="{{route('admin.chef')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chef Manage</p>
                </a>
              </li>

              



            </ul>

             <ul class="nav nav-treeview">

                <hr>
              
              <li class="nav-item">
                <a href="{{route('footer.settings')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer Manage</p>
                </a>
              </li>


            </ul>

          </li>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Seo Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

     
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('seo.manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seo Manage</p>
                </a>
              </li>

            </ul>
          </li>


          




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>