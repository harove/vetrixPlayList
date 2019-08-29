<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Director Cloud - Cloud TV Playout</title>
        <meta content="Admin Dashboard" name="description" />
		  <meta content="Themesbrand" name="author" />
		  <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                                <img src="assets/images/logo-light.png" alt="" height="60">
                            </span>
                        <i>
                                <img src="assets/images/logo-sm.png" alt="" height="32">
                            </i>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0">
                        
                        <!-- language-->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt=""/> English <span class="mdi mdi-chevron-down"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right language-switch">
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                            </div>
                        </li>

                        <!-- full screen -->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-fullscreen noti-icon"></i>
                            </a>
                        </li>

                        <!-- notification -->
                        <li class="dropdown notification-list list-inline-item">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                        Notificaciones (258)
                                    </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                   
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                        Ver Todos <i class="fi-arrow-right"></i>
                                    </a>
                            </div>
                        </li>
                        <li class="dropdown notification-list list-inline-item">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-light" href="#" role="button"  aria-expanded="false">
                                        Subir Vídeo
                                    </a>
                            </div>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="ti-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ti-desktop"></i><span> Canales </span></a>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ti-cloud-up "></i><span> Subir Vídeos </span></a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout-tab"></i><span> Biblioteca <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="email-inbox.html">Vídeos</a></li>
                                    <li><a href="email-read.html">Categorias</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ti-calendar"></i><span> Programación </span></a>
                            </li>


                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ti-pie-chart"></i><span> Estadísticas </span></a>
                            </li>

                            <li>
                                    <a href="calendar.html" class="waves-effect"><i class="ti-split-v-alt"></i><span> Integración</span></a>
                            </li>
                            
                            <li>
                                    <a href="calendar.html" class="waves-effect"><i class="ti-list"></i><span> Listas de Reproducción </span></a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

             <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container-fluid">
                              <div class="page-title-box">
                                    <div class="row align-items-center">
                                       
                                       <div class="col-sm-6">
                                          <h4 class="page-title">Crear Programación</h4>
                                          <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                                <li class="breadcrumb-item active">Responsive Table</li>
                                          </ol>
      
                                       </div>
                                       
                                    </div>
                              </div>
                            
                            {{--dd($heroes->toArray())--}}  

                            <!-- end row -->

                            <div class="row">
                              <div class="col-lg-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="btn-group" role="group">
                                          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle elegir" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             Categorias
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                             <a class="dropdown-item" href="#">Dropdown link</a>
                                             <a class="dropdown-item" href="#">Dropdown link</a>
                                          </div>        
                                       </div>
                                       <div class="table-responsive">
                                          <div class="col-xs-6">
                                             <table id= "table1" class="table mb-0">
                                                <thead>
                                                   <tr>
                                                
                                                      <th>name</th>
                                                      <th>length</th>
                                                      <th>Add to playlist</th>
                                                   </tr>
                                                </thead>
                                                <tbody id="lista1">
                                                   @foreach( $heroes as $heroe )
                                                   <tr>
                                                  
                                                      <td>{{ $heroe->name }}</td>
                                                      <td>{{ $heroe->length }}</td>
                                                      <td>
                                                            <button id="video_{{ $heroe->id }}" class="addrow">New row</button>
                                                      </td>
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>         
                                    </div>                                                        
                                 </div> 
                              </div> 
                               
                                    <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                   <form class="" action="/persistPlaylist" method="POST">
                                                      @csrf
                                                      <div class="form-group row ">
                                                         <label for="example-text-input" class="col-sm-2 col-form-label">Nombre</label>
                                                         <div class="col-sm-10">
                                                               <input class="form-control" type="text" name="name" value="" placeholder="Nombre Lista de Reproducción" id="example-text-input">
                                                         </div>
                                                      </div>

                                                      <div class="form-group row">
                                                         <label for="example-text-input" class="col-sm-2 col-form-label">Canal</label>
                                                         <div class="col-sm-10">
                                                            <select class="form-control">
                                                                     <option>Seleccionar Canal</option>
                                                                     <option>Large select</option>
                                                                     <option>Small select</option>
                                                            </select>
                                                         </div>
                                                      </div>

                                                      <div class="form-group row">
                                                         <label for="example-time-input" class="col-sm-2 col-form-label">Hora Inicio</label>
                                                         <div class="col-sm-10">
                                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                                         </div>
                                                      </div>

                                                      <div class="form-group row">
                                                         <label for="example-date-input" class="col-sm-2 col-form-label">Emisión</label>
                                                         <div class="col-sm-10">
                                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                                         </div>
                                                      </div>
                                                                
                                                      <div class="form-group row col-sm-12">
                                                         <label for="example-time-input" class=" col-form-label">Loop</label>
                                                         
                                                         <input type="checkbox" id="switch7" switch="info" checked/>
                                                         <label class="loop" for="switch7" data-on-label="Si" data-off-label="No">
                                                         </label>

                                                         <label for="example-time-input" class=" col-form-label">AutoStart</label>
                                                
                                                         <input type="checkbox" id="switch8" switch="info" checked/>
                                                         <label class="loop" for="switch8" data-on-label="Si"
                                                                  data-off-label="No">
                                                         </label>
                                                         <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                            Crear
                                                         </button>
                                                      </div> 
                                                </form>

                                                            <table id="tableplay" class="table table-sm m-10 ">
                                                               <thead>
                                                                  <tr>
                                                                     <th>name</th>
                                                                     <th>length</th>
                                                                     <th>action</th>
                                                                  </tr>
                                                               </thead>
                                                               <tbody id="lista2" class="text-dark">
                                                                  @foreach( $playlists as $playlist )
                                                                    <tr id="{{ $playlist->id }}" class="table-primary">
                                                                        <th scope="row">{{ $playlist->name}}</th>
                                                                        <td>{{ $playlist->length }}</td>
                                                                        <td class="">
                                                                        <a href="" class="btn btn-primary deleteRow">Borrar</a>
                                                                        </td>
                                                                     </tr>
                                                                  @endforeach
                                                               </tbody>
                                                            </table>

                                                               <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                                        Guardar Lista
                                                               </button>   
                                                               <button id="saveplaylist" type="submit" class="btn btn-dark waves-effect waves-light mr-1">
                                                                        <i class="ti-control-play"></i> Preview
                                                               </button>      
                                                
                                                </div>

                                      
                                            </div>
                                    </div>
                            </div>
                        <!-- row -->
                        </div>   
                        <!-- fluid-->
                    </div>
                    <!-- content -->
            </div>
            
                <footer class="footer">
                    © 2019 Director Cloud+ <span class="d-none d-sm-inline-block"> / Producto creado por <i class="mdi mdi-heart text-danger"></i> GrupoZ</span>.
                </footer>

            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

 <!-- jQuery  -->
 <script src="assets/js/jquery.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/metisMenu.min.js"></script>
 <script src="assets/js/jquery.slimscroll.js"></script>
 <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous">
  </script>
 <script src="assets/js/waves.min.js"></script>
 <script src="assets/js/custom1.js"> </script>
 <script src="assets/js/jquery.tabletojson.js"> </script>

 <!-- App js -->
 <script src="assets/js/app.js"></script>





    </body>

</html>