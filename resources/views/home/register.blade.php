@extends("layout")

@section("title")
 Registration
@stop

@section("content")
<div class="row justify-content-center register">
    <div class="col-5 register-col p-2">
        <form action="/register" method="post">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input name="name" class="form-control" id="exampleInputName" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputName">E-Mail Adress</label>
                <input name="email" class="form-control" id="exampleInputName" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Password</label>
                <input name="password" class="form-control" id="exampleInputName" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Confirm Password</label>
                <input name="password" class="form-control" id="exampleInputName" placeholder="">
            </div>


        <button class="btn btn-primary">Submit</button>

        {{ csrf_field() }}
        </form>
    </div>    
</div>

@stop