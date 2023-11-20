<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title>Beauty Salon</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/admin/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/admin/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/admin/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/admin/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/admin/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/admin/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/admin/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/admin/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/admin/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/admin/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/admin/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/admin/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/admin/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/admin/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="assets/admin/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="assets/admin/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="assets/admin/css/examples.css" rel="stylesheet">
    <link href="assets/admin/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">

    <link href="assets/sweetalert/sweetalert2.min.css" rel="stylesheet">
    <script src="assets/sweetalert/sweetalert2.min.js"></script>

    <!-- JAVASCRIPT-->  
    <script type="text/javascript">
      function showSuccessAlert() {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Reserva ejecutada!",
            showConfirmButton: false,
            timer: 1500
        });
      }

      function showErrorAlert() {
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "Algo salió mal!",
            showConfirmButton: false,
            timer: 2000
        });
      }
    </script> 
  </head>
  <body>
    <?php if(isset($showSuccessSubmit) && $showSuccessSubmit){ ?> 
      <script type="text/javascript">showSuccessAlert();</script> 
    <?php } ?>
    <?php if(isset($showSuccessSubmit) && !$showSuccessSubmit){ ?> 
      <script type="text/javascript">showErrorAlert();</script> 
    <?php } ?>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <h2>Beauty Salon</h2>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg class="nav-icon">
              <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
            </svg> Reservas
          </a>
        </li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
          <h2>Beauty Salon</h2></a>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
              <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md">
                  <img class="avatar-img" src="assets/admin/img/avatars/4.jpg" alt="user@email.com">
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <a class="dropdown-item" href="?controller=login&action=signOut">
                  <svg class="icon me-2">
                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg>Cerrar sesión</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <span>Inicio</span>
              </li>
              <li class="breadcrumb-item active"><span>Reservas</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
                <div class="card-header">Clientes con reserva</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table border mb-0">
                      <thead class="table-light fw-semibold">
                        <tr class="align-middle">
                          <th>Cliente</th>
                          <th>Servicio</th>
                          <th>Cantidad</th>
                          <th>Fecha</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($bookings as $index => $booking) {?>
                          <tr class="align-middle">
                            <td>
                              <div><?php echo $booking->name; ?></div>
                              <div class="small text-medium-emphasis"><span>Telefono</span> | <?php echo $booking->celphone; ?></div>
                            </td>  
                            <td>
                              <div><?php echo $booking->service->name; ?></div>
                              <div class="small text-medium-emphasis"><?php echo $booking->comment; ?></div>
                            </td>   
                            <td>
                              <div><?php echo $booking->quantity; ?></div>
                            </td>                 
                            <td>
                              <div class="small text-medium-emphasis"><?php echo $booking->date; ?></div>
                              <div class="fw-semibold"><?php echo $booking->hour; ?></div>
                            </td>
                            <td class="text-right">
                              <div class="dropdown">
                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                  </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item text-success" href="?controller=admin&action=bookingSubmit&id=<?php echo $booking->id; ?>">Realizado</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        <?php } ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="assets/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="assets/admin/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="assets/admin/vendors/chart.js/js/chart.min.js"></script>
    <script src="assets/admin/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="assets/admin/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="assets/admin/js/main.js"></script>
    <script>
    </script>

  </body>
</html>