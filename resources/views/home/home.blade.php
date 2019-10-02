@extends("layout")


@section("title")
My Fitness buddy
@stop

@section("content")
    Welcome, Stranger!
    <div class="row">
        <div class=col-12>
            <h6>
                <a href="login">Login </a> or <a href="/register">register</a> to get started
            </h6>  
        </div>
    </div> 
@stop