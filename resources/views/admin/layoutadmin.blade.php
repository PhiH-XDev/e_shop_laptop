<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="/Assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- file bootstrap -->
  <!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="Assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/main.css"> -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"> -->

  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
  <!-- <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script> -->


</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">

        {{-- @if( Auth::guard('admin')->check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Chào {{Auth::guard('admin')->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Đổi pass</a></li>
            <li><a class="dropdown-item" href="{{url('admin/thoat')}}">Thoát</a></li>
          </ul>
        </li>
        @endif --}}

      <!-- User Menu-->
      <li><a class="app-nav__item" href="{{url('admin/thoat')}}"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
        src="https://i.pinimg.com/564x/df/ce/a7/dfcea7989195d3273c2bcb367fca0a83.jpg" width="50px" height="70px"
        alt="User Image">
      <div>
        @if (Auth::guard('admin')->check())
        <p class="app-sidebar__user-name"><b>{{ Auth::guard('admin')->user()->name }}</b></p>
        @endif
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        <p class="app-sidebar__user-designation">
          Bạn đang:
          <i id="trangthai-icon" class="bx"></i>
          <span id="trangthai"></span>
        </p>

      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item " href="index.php?page=home"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="/admin/transaction"><i class='app-menu__icon bx bx-receipt'></i><span
            class="app-menu__label">Danh sách giao dịch</span></a></li>
      <!-- <li><a class="app-menu__item" href="index.php?page=user"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý khách hàng</span></a></li> -->
      <li><a class="app-menu__item" href="/admin/sanphamde"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản
            phẩm</span></a>
      </li>
      <!-- <li><a class="app-menu__item" href="index.php?page=bangsp"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý danh mục</span></a>
      </li> -->
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>
  @yield('adminconten')
  <script>
    const trangthai = document.getElementById('trangthai');
    const trangthaiIcon = document.getElementById('trangthai-icon');

    function updateStatus(online) {
      trangthai.textContent = online ? 'Online' : 'Offline';
      trangthaiIcon.className = online ? 'bx bx-wifi' : 'bx bx-wifi-off';
    }

    updateStatus(navigator.onLine);

    window.addEventListener('offline', () => {
      updateStatus(false);
    });

    window.addEventListener('online', () => {
      updateStatus(true);
    });


  </script>





  <script src="/Assets/js/js/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="/Assets/js/js/popper.min.js"></script>
  <!-- <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script> -->
  <!--===============================================================================================-->
  <script src="/Assets/js/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="/Assets/js/js/main.js"></script>
  <!--===============================================================================================-->
  <script src="/Assets/js/js/plugins/pace.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="/Assets/js/js/plugins/chart.js"></script>


</body>
</html>

