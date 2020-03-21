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
                                            <h4>Send Message to Class</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div>
                                Welcome, {{ Auth::user()->name }}, You have sent  {{ count($all_messages) }} message so far.
                            </div>    
                            <form style = "box-sizing: border-box" action={{ route('send_message') }} method="POST">
                                {{ csrf_field() }}
                                @include('inc.messages')
                                <div>
                                <textarea id="textarea" name = "message" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars.">{{ old('message') }}</textarea>
                                </div>
                                <input type="submit" class="form-group btn btn-primary" value="Send Message">
                            </form>

                            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                <!-- content -->
@endsection