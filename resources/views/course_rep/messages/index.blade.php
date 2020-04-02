@extends('layouts.course_rep.app')



@section ('content')    
<div class="container">
    <div class="col-12 text-center">
        <h5>Messages <span class="mdi mdi-message-text"></span></h5>
    </div>
</div>

@if ( count($messages) <= 0 )

<div>
    <div class="card px-3 py-3 mx-3" style="background-color: white">
        <div class="text-center card-body">
            <code style="color: black"><h5><span class="mdi mdi-information"></span> No messages here</h5></code>
            <a href="/course_rep/send"><button class="btn btn-primary">Send one</button></a>
        </div>  
    </div>
    
    </div>

@else

@foreach ($messages as $message)


<div class="card my-3 mx-3 px-3 py-3">
    
    
    <h5><code>{{ $message->created_at }}</code></h5>
        
        <p style = "text-decoration: none">{{ $message->message }}    
            @if ($message->message_status == 1)
            <span class="badge badge-success">Delivered</span></p>
            @else
            <span class="badge badge-danger">Failed</span>
            @endif
        
    
</div>


@endforeach
@endif
@endsection