@extends('layouts.course_rep.app')



@section ('content')    
<div class="container">
    <div class="col-12 text-center">
        <h5>Messages <span class="mdi mdi-message-text"></span></h5>
    </div>
</div>

@if ( count($personal_messages) <= 0 )

<div>
    
    <div class="card px-3 py-3 mx-3" style="background-color: white">
        <div class="text-center card-body">
            <code style="color: black"><h5><span class="mdi mdi-information"></span> No personal messages here</h5></code>
            <a href="/course_rep/personal_message/create"><button class="btn btn-primary">Send one</button></a>
        </div>  
    </div>
    
    </div>

@else

@foreach ($personal_messages as $personal_message)


<div class="card my-3 mx-3 px-3 py-3">
    @include('inc.messages')
    
    <h5><code>{{ $personal_message->created_at }}</code></h5>
        
        <p style = "text-decoration: none">{{ $personal_message->message }}    
            
        
    
</div>



@endforeach
<div class="container">
<a class="btn btn-dark btn-lg" href="/course_rep/personal_message/create">Send a message</a>
</div>
@endif
@endsection