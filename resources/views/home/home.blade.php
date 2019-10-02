@extends("layout")


@section("title")
My Fitness buddy
@stop

@section("content")
    <h1 style="font-weight: bold;">
        Welcome, Stranger!
    </h1>
    <div class="row justify-content-center">
        <div class="col-3 welcome">
            <h6 class="m-5">
                <a href="login">Login </a> or <a href="/register">register</a> to get started
            </h6>  
        </div>
    </div> 
@stop