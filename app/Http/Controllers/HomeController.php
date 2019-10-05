<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view("home/welcome");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("home.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->name);


        $rules = array(
            "userName" =>'required|unique:users|max:255|min:3',
            "email" => "required|email|unique:users|max:255|min:3",
            "password" => "required|max:255|min:5"
        );
    
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) 
        {
  



            // return Redirect::back()->withErrors(['Something went wrong', 'The Message']);

            return Redirect::back()
            ->withErrors($validator)
            ->withInput();



        } else {
            //  var_dump("ok");
            $user = new User();
            $user->userName = $request->userName;
            $user->email = $request->email;
            $user->password = $request->password;
    
            $user->save();
        }

        return redirect()->action(
            'HomeController@show', $user
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // var_dump(User::find($id));
        return view("home.home")->withUser(User::find($id));
        // var_dump(User::find($id));


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

    
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function errors()
    {
        return view("home/errors");
    }
}
