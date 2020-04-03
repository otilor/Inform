@extends('layouts.course_rep.app')
@section ('content')
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
                            <form class="form-horizontal m-t-20" action="" method="POST">
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
                                    <th>Student id</th>
                                    <th>Phone number</th>
                                    
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


        


@endsection