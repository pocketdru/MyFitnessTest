@extends("layout")

@section("title")
Create a meal
@stop

@section("content")
<form action="/meals" method="post">
<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input name="name" class="form-control" id="exampleInputName" placeholder="Name">
</div>


  <button class="btn btn-primary">Submit</button>

  {{ csrf_field() }}
</form>

@stop