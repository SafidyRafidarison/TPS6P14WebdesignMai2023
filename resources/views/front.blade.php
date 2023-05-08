<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/lexa/layouts/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2023 07:53:51 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Actualités</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico"> 
        
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="18">
                                </span>
                            </a>
                        </div>

                      
                    </div>

                    
                </div>
            </header>
            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Principale</li>

                            <li>
                                <a href="{{url('/back')}}" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span class="badge rounded-pill bg-primary float-end">1</span>
                                    <span>Back-Office</span>
                                </a>
                            </li>

                            <li>
                                <a href="." class="waves-effect ">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span class="badge rounded-pill bg-primary float-end">3</span>
                                    <span>Front-Office</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4>Cards</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lexa</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                            <li class="breadcrumb-item active">Cards</li>
                                        </ol>
                                </div>
                            </div>
                           
                        </div>
                        <!-- end page title -->

                        <div class="row">
                        @foreach($infs as $row)
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <!-- Simple card -->
                                <div class="card">
                                <img class="card-img-top img-fluid" src="data:image/jpg;base64,{{$row->couverture}}" alt="Base64 encoded image">             
                                    <div class="card-body">
                                        <h4 class="card-title">{{$row->titre }}</h4>
                                        <p class="card-text">Publié le : {{$row->date_publication }}</p>
                                        <p class="card-text">
                                            <?php echo($row->resume)?>
                                        </p>
                                        <a href="{{ url('/info/'.urlPrint($row->titre).'/'.$row->idinformation) }}" class="btn btn-primary waves-effect waves-light">Voir plus</a>
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->
                     @endforeach

                            
                        </div>
                        <!-- end row -->

                      

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        

      
        
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>


<!-- Mirrored from themesbrand.com/lexa/layouts/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2023 07:53:56 GMT -->
</html>