@extends("layout")

@section("title")
 Registration
@stop

@section("content")
@if($errors->any())
<div class="row justify-content-center">
    <div class="col-4">
        <h4 class="errorMessage">{{$errors->first()}}</h4>
    </div>
</div>
@endif
<div class="row justify-content-center register">
    <div class="col-5 register-col p-2">
        <form action="/users" method="post">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input name="userName" class="form-control" id="exampleInputName" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputName">E-Mail Adress</label>
                <input name="email" class="form-control" id="exampleInputName" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Password</label>
                <input name="password" class="form-control" id="exampleInputName" placeholder="">
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputName">Confirm Password</label>
                <input name="confirmPassword" class="form-control" id="exampleInputName" placeholder="">
            </div> -->


        <button class="btn btn-primary">Submit</button>

        {{ csrf_field() }}
        </form>
    </div>    
</div>

@stop