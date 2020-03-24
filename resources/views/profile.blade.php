@extends('layouts.app')
@section('content')
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">{{ config('app.name', 'Laravel') }}</a></li>
                                                <li class="breadcrumb-item active">Message</li>
                                            </ol>
                                        </div>
                                        <div class="send_message">
                                            <h5>Profile</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="col-12 text-center">
                            <div class="card px-3 text-center col-12">
                                <div class="card-title text-center">
                                    <strong><code style="color: black; text-decoration:underline">You can see all your settings</code></strong>
                                </div>
                                <div class="col-12">
                                    <div class="card-body py-3 px-12">
                                        
                                        
                                        <input class = "form-group" type="text" placeholder="Your email" value="{{ $profile->email }}">
                                        <form action="{{ action('AdminController@update')}}" method="POST">
                                                {{ csrf_field() }}
                                            <input name = "password" class = "form-group" type="text" placeholder="New Password" value="{{ $profile->password }}">
                                            <br>
                                            <input class="btn btn-primary" type= "submit" value="Update">
                                        </form>
                                        
                                        
                                        
                                    </div>
                                </div>

                                
                                    
                                        
                                        
                                        
                                    
                                


                            </div>
                            </div>
                </div><!-- container -->

        </div> <!-- Page content Wrapper -->

                <!-- content -->
@endsection