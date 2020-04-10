
@extends ('layouts.lecturer.app')

@section ('content')
<!--
<h1>You are welcome, Mr{{ Auth::user()->gender == "Male" ? " ". Auth::user()->name : "s. ". Auth::user()->name}} </h1>
-->
<div class="card">
    <code class="card-body text-center"><q>{{ $quote }}</q></code>
</div>

<div class="card my-3 py-3">
    <div class="card-body">
        
            <h5>Welcome, <mark><code>{{ Auth::user()->name }}! </code></mark><span class="mdi mdi-face-profile"></span></h5>
            <p>I don't really know what to put here!</p>
    </div>
</div>
@endsection