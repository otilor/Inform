@extends('layouts.app')
    @section('content')
                   
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">{{ config('app.name', 'Laravel') }}</a></li>
                                            <li style= "text-transform: capitalize" class="breadcrumb-item active">{{ Request::path() }}</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Send message to the Class</h4>
                                        
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            @if (count($all_students) <= 0)
                            <!--
                            <strong><p class="alert alert-danger"><code style="text-transform:capitalize; text-decoration:underline; color:black">{{ Auth::user()->name }},</code> you have to add students to the class first. <a class = "btn btn-default" href="/add">Add Students</a></p></strong>
                            -->
                            <div>
                                <div class="card px-3 py-3 mx-3" style="background-color: white">
                                    <div class="text-center card-body">
                                        <code style="color: #283179"><h5>To proceed, kindly add in some students</h5></code>
                                        <a href="/add"><button class="btn btn-primary">Add</button></a>
                                    </div>
                                </div>
                                
                                </div>

                            @else
                            <div>
                                Welcome, {{ Auth::user()->name }}, send a message to the class.
                            </div>    



                            <!--Add students form-->
                            <div class="wrapper-page">

                                <div class="card col-">
                                    <div class="card-body">
                        
                                       
                                        <div class="col-xl-12 px-3 pb-3">
                                            @include('inc.messages')
                                        <form name = "send_form" class="form-horizontal m-t-20" action="{{ route('send_message') }}" method="POST" name="message_form">
                                                {{ csrf_field() }}
                                                
                                                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                    <textarea name = "message" class="form-group col-12" rows="4" placeholder="Enter your message to the class">{{ old('message') }}</textarea>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Send Message</button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            @endif
                            
            
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
        <script>
            document.send_form.message.focus()
        </script>
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

    @endsection