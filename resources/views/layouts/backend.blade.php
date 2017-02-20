<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Cache::get('site_name', 'Facebot') }} | @yield('placement', 'Dashboard')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <link rel="icon" href="{{asset('favicon.png')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="logo">
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">{{ Cache::get('site_name', 'Facebot') }}</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('images/profile-image.jpg') }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('images/profile-image.jpg') }}" class="img-circle" alt="User Image">
                    <p>
                      {{ Auth::user()->name }}
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ route('profile') }}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a class="btn btn-default btn-flat" href="{{ url('/logout') }}"
                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                      </a>
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('images/profile-image.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Helper::areActiveRoutes(['home']) }}">
              <a href="{{ route('home') }}">
                <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="{{ Helper::areActiveRoutes(['messages.index']) }}">
              <a href="{{ route('messages.index') }}">
                <i class="fa fa-comment-o"></i> <span>Messages</span>  <small class="label pull-right bg-green">{{ App\Message::count() }}</small>
              </a>
            </li>
            <li class="treeview {{ Helper::areActiveRoutes(['rules.index', 'rules.create', 'rules.edit']) }}">
              <a href="#">
                <i class="fa fa-check"></i> <span>Rules</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('rules.create') }}"><i class="fa fa-plus"></i> New</a></li>
                <li><a href="{{ route('rules.index') }}"><i class="fa fa-th"></i> View</a></li>
              </ul>
            </li>
            <li class="{{ Helper::areActiveRoutes(['recipients.index']) }}">
              <a href="{{ route('recipients.index') }}">
                <i class="fa fa-users"></i> <span>Users</span> <small class="label pull-right bg-red">{{ App\Recipient::count() }}</small>
              </a>
            </li>
            <li class="treeview {{ Helper::areActiveRoutes(['expressions.index', 'expressions.create', 'expressions.edit']) }}">
              <a href="pages/widgets.html">
                <i class="fa fa-exclamation"></i> <span>Expressions</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('expressions.create') }}"><i class="fa fa-plus"></i> New</a></li>
                <li><a href="{{ route('expressions.index') }}"><i class="fa fa-th"></i> View</a></li>
              </ul>
            </li>
            <li class="treeview {{ Helper::areActiveRoutes(['answers.index', 'answers.create', 'answers.edit']) }}">
              <a href="pages/widgets.html">
                <i class="fa fa-share"></i> <span>Answers</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('answers.create') }}"><i class="fa fa-plus"></i> New</a></li>
                <li><a href="{{ route('answers.index') }}"><i class="fa fa-th"></i> View</a></li>
              </ul>
            </li>
            <li class="treeview {{ Helper::areActiveRoutes(['resources.index', 'resources.create', 'resources.edit']) }}">
              <a href="pages/widgets.html">
                <i class="fa fa-link"></i> <span>Resources</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('resources.create') }}"><i class="fa fa-plus"></i> New</a></li>
                <li><a href="{{ route('resources.index') }}"><i class="fa fa-th"></i> View</a></li>
              </ul>
            </li>
            <li class="{{ Helper::areActiveRoutes(['configuration.index']) }}">
              <a href="{{ route('configuration.index') }}">
                <i class="fa fa-cog"></i> <span>Configuration</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('placement', 'Dashboard')
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">@yield('placement', 'Dashboard')</li>
          </ol>
          <br/>
          @include('flash::message')
        </section>


        <!-- Main content -->
        <section class="content">
          
          @yield('content')

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div>

    <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
  </body>
</html>
