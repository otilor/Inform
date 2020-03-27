@extends('layouts.app')


@section('content')

@if ($user->role_id != 0 && $user->role_id != 1)
<div>
<div class="card px-3 py-3 mx-3" style="background-color: white">
    <div class="text-center card-body">
        <code style="color: red"><h5><span class="mdi mdi-information"></span> You currently do not have the permissions to perform this action</h5></code>
        <a href="/"><button class="btn btn-primary">Go home</button></a>
    </div>  
</div>

</div>
@else

    <!--Card Title-->
    
    <!--Card Body-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header text-center">Register Admin <i class="mdi mdi-face-profile"></i></h5>
    
                    <div class="card-body">
                                    
                                   
                        
                        
                        <form method="POST" action="{{ route('admin_register') }}">
                            @csrf
                            
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block text-center">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif 
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Account type') }}</label>
    
                                <div class="col-md-6">
                                    @if ($user->role_id == 0)
                                    <select class="custom-select" name="admin_privilege">
                                        <option>Select Admin Privilege</option>
                                        <option value=0>Root</option>
                                        <option value=1>Head of Department</option>
                                        <option value=2>Course Representative</option>
                                    </select>
                                    @elseif ($user->role_id == 1)
                                    <select class="custom-select" name="admin_privilege">
                                        <option value=2>Course Representative</option>
                                    </select>
                                    @endif

                                    <select class = "my-3 custom-select" name="gender">
                                        <option>Select gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>

                                </div>
                            </div>
                            
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>

@endif
@endsection