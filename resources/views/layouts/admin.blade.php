<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> @yield('title', 'Enursing admin panel') </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('css/adminlte.min.css')}}">
  <link href="{{url('img/icon.png')}}" rel="icon">

</head>
<body class="sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->



      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
       <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
      <img src="{{url('AdminLTELogo.png')}}" alt="A" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">eNURSING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>
		  </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{url('quiz/create')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Create Quiz

                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('question')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                  <p>
                    Add Questions

                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('quiz')}}" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                  <p>
                    All Quiz

                  </p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('result')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                  <p>
                    Results

                  </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="/page/create" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Featured

                  </p>
                </a>
              </li>


        <!--    <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                E-paper
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('epaper/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Publish epaper</p>
                </a>
              </li>

         <li class="nav-item">
                <a href="{{url('pdf-upload')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload pdf</p>
                </a>
              </li>

            </ul>
          </li> -->

         <!--   <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li> -->

  <!--    <li class="nav-header">MORE</li>
          <li class="nav-item">
            <a href="/page/create" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Create page

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="page/create" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                All question

              </p>
            </a>
          </li> -->

      <!--    <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>
            </ul>
          </li> -->





        </ul>













      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>

    <!-- Main content -->

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">

    </div>
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<!--<script src="plugins/jquery-ui/jquery-ui.min.js"></script>-->


<!-- Bootstrap 4 -->
<script src="{{url('js/bootstrap.bundle.min.js')}}"></script>



<!-- AdminLTE App -->
<script src="{{url('js/adminlte.js')}}"></script>



</html>
