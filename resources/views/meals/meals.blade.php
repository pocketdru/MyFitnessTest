@extends("layout")

@section("title")
 Add meal details
@stop



@section("content")
<div class="row meal-name pb-3">
    <div class="col-12">
        <h2> {{ $meal->name }} </h2>
    </div>
</div>
<div class="row">
    <div class="col-12 foods meal-name">
        <h5>Foods</h5>
    </div> 
</div>
<div class="row justify-content-center meal-details">
    <div class="col-8 register-col p-2">
        <form action="/food" method="post">
            <div class="form-group">
                <label for="exampleInputName">Food Name</label>
                <input name="foodName" class="form-control" id="exampleInputName" placeholder="">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Protein</label>
                <input name="protein" class="form-control" id="exampleInputName" placeholder="Protein/g">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Carbohydrates</label>
                <input name="carbs" class="form-control" id="exampleInputName" placeholder="Carbohydrates/g">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Fat</label>
                <input name="fat" class="form-control" id="exampleInputName" placeholder="Fat/g">
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