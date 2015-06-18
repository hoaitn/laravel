@extends("layout.master")

@section("content")
<div class="container">
    <div class="content">
        <div class="title">
            <h1>
                Backend - User
            </h1>
        </div>
        <div>
            @foreach ($users as $key=>$user)
            <p>{{$user->name}}</p>
            @endforeach
        </div> 
        <div class="quote">{{ Inspiring::quote() }}</div>
    </div>
</div>
@stop
