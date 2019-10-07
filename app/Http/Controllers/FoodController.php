<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = array(
        //     "protein" =>"required|max:255",
        //     "carbs" => "required|max:255",
        //     "fat" => "required|max:255"
        // );
    
        // $validator = Validator::make(Input::all(), $rules);

        // if ($validator->fails()) 
        // {
        //     return Redirect::back()
        //     ->withErrors($validator)
        //     ->withInput();
        // } else {
            //  var_dump("ok");
            $food = new Food();
            $food->foodName = $request->foodName;
            $food->protein = $request->protein;
            $food->carbs = $request->carbs;
            $food->fat = $request->fat;
    
            $food->save();
        // }

        // return redirect()->action(
        //     'HomeController@show', $food
        // );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
