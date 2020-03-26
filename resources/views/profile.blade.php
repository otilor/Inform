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
                                            <li style= "text-transform: capitalize" class="breadcrumb-item active">{{ Request::path() }}</li>
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
                                        <form name = "update_profile_form" action="{{ route('update_profile') }}" method="POST">
                                            <!--Form-->
                                            @include('inc.messages')
                                            @csrf
                                            @if ($profile->gender == 'Male')
                                            <img class="img rounded-circle mr-3" height = "64" src="{{ asset('assets/images/users/male.webp') }}" class="text-center rounded-circle img-thumbnail" alt="thumbnail">
                                            @else
                                            <img class="img rounded-circle mr-3" height = "64" src="{{ asset('assets/images/users/new_female.png') }}" class="text-center rounded-circle img-thumbnail" alt="thumbnail">
                                            @endif
                                            <code style = "color:black">
                                                <strong><h6>{{ $profile->name }}</h6></strong>
                                                <hr>
                                                <h6><span class="mdi mdi-email"></span> {{ $profile->email }}</h6>
                                                <select name = "gender" id = "gender_select" class="custom-select">
                                                    @if ($profile->gender == 'Male')
                                                    <option>{{ $profile->gender }}</option>
                                                    <option>Female</option>
                                                    @elseif ($profile->gender == 'Female')
                                                    <option>{{ $profile->gender }}</option>
                                                    <option>Male</option>
                                                    @endif
                                                </select>

                                                <input id = "update_profile_button" class = "btn btn-primary my-2" value = "Update" type="submit">
                                            </code>
                                        </form>
                                        
                                        
                                        
                                    </div>
                                </div>

                                
                                    
                                        
                                        
                                        
                                    
                                


                            </div>
                            </div>
                </div><!-- container -->

        </div> <!-- Page content Wrapper -->

                <!-- content -->

        
@endsection

<script>
    
    
</script>