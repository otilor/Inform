@extends('layouts.course_rep.app')
@section('content')
                    <div class="page-content-wrapper ">   

                        <div class="container">

                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="send_message text-center">
                                            <h5>Profile <span class = "mdi mdi-face-profile"></span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        
                            <!-- end page title end breadcrumb -->
                            <div>
                            
                            <div class="card py-4 px-3 text-center col-12">
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

                                                <!--displays the user status: root, hod, course rep-->
                                                @if ($profile->role_id == 0)
                                                <strong><h6>{{ $profile->name }}</h6><span class="badge badge-success">Root</span></strong>
                                                @elseif ($profile->role_id == 1)
                                                <strong><h6>{{ $profile->name }}</h6><span class="badge badge-info">Head of Department</span></strong>
                                                @else
                                                <strong><h6>{{ $profile->name }}</h6><span class="badge badge-primary">Course Representative</span></strong>
                                                @endif



                                                <hr>
                                                <h6><span class="mdi mdi-email"></span> {{ $profile->email }} <span class="badge badge-danger">Unverified!</span></h6>
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
                            </div>
                            </div>
                </div><!-- container -->

        </div> <!-- Page content Wrapper -->

                <!-- content -->

        


<script>
    
    
</script>

@endsection