<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{ config('app.name','Laravel') }} by Gabriel Akinyosoye</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">



        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
        <!-- jvectormap -->

        
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <link href="assets/plugins/fullcalendar/vanillaCalendar.css" rel="stylesheet" type="text/css"  />
        
        <link href="assets/plugins/morris/morris.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('inc.sidebar')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    @include('inc.nav')
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">{{ config('app.name', 'Laravel') }}</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Students to the Class</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div>
                                Welcome, {{ Auth::user()->name }}, you can add students to the class
                            </div>    

                            <!--Add students form-->
                            <div class="px-3 pb-3">
                            <form class="form-horizontal m-t-20" action="{{ route('add_student_phone_number') }}" method="POST">
                                    {{ csrf_field() }}
                                    @include('inc.messages')
                                                                        <!--Phone number with prefix-->
                                    <div class="form-group mb-0">
                                        <h6 class="sub-title my-3">Kindly fill in an appropriate phone number </h6>
                                    <div class="input-group"><span class="input-group-addon bootstrap-touchspin-prefix">+234(0)</span><input type="text" maxlength= 10 placeholder = "example: 7012345678" value="{{ old('phone_number') }}" name="phone_number" class="form-control" style="display: block;" required = ""></div>
                                    </div>
 
            
                                    <div class="form-group text-center row m-t-20">
                                        <div class="col-12">
                                            <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Submit</button>
                                        </div>
                                    </div>
            
                                    
                                </form>
                            </div>
                            <div>
                                @if (count($all_students) == 0)
                                <p>There are no students. Start off by adding students</p>
                                @else
                                
                                


                            

                            <table id="datatable" class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Appointment Date</th>
                                    <th>Personal Message</th>
                                    
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach ($all_students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{  $student->phone_number }}</td>
                                    
                                    
                                    
                                </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                            @endif
                        </div>
            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
                

                <footer class="footer">
                    © 2019 Inform by <a href="https://github.com/GabielFemi" target="_blank">Gabriel Akinyosoye.</a>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        
        <script src="assets/plugins/skycons/skycons.min.js"></script>
        <script src="assets/plugins/fullcalendar/vanillaCalendar.js"></script>
        
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script> 
         
        <script src="assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>





        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
 
        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script> 


    </body>
</html>