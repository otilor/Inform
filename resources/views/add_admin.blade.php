@extends('layouts.app')


@section('content')

@if (count($all_students) == 0)
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
    Weldone son
</div>

@endif
@endsection