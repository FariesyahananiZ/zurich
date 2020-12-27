<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\userDetails;
use App\User;


class userDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
   // {
     //   $userDetails = userDetails::all();
       // return view('userDetails.index', compact('userDetails'));
    //}

    function index()
    {   $id = Auth::user()->id;
        $data= userDetails::where("user_id",$id)->first();
         return view("userDetails.viewDetails",compact("data"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {      $id = Auth::user()->id;
       $request->validate([
           'name'=>'required',
           'phoneNum'=>'required',
           'email'=>'required'
       ]);
       $userDetails = new userDetails([
           'name'=> $request->get('name'),
           'phoneNum'=> $request->get('phoneNum'),
           'email'=> $request->get('email'),
           'birthdate'=> $request->get('birthdate'),
           'age' => $request->get('age'),
           'occupation' => $request->get('occupation'),
           'gender' => $request->get('gender'),
           'address'=> $request->get('address'),
           'postcode' => $request->get('postcode'),
           'city' => $request->get('city'),
           'state' => $request->get('state'),
           'user_id' => $id,
       ]);
       $userDetails->save();
       return redirect()->route('view.detail')->with('Success', 'Details saved!');

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
        $userDetail = UserDetails::find($id);
        return view("userDetails.edit",compact("userDetail"));

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
         $userDetail = UserDetails::find($id);
        $userDetail->name = $request->name;
        $userDetail->email = $request->email;
        $userDetail->birthdate = $request->birthdate;
        $userDetail->age = $request->age;
        $userDetail->occupation = $request->occupation;
        $userDetail->address = $request->address;
        $userDetail->postcode = $request->postcode;
        $userDetail->city = $request->city;
        $userDetail->state = $request->state;

        $userDetail->save();
        return redirect()->route('view.detail')->with('Success', 'Details saved!');

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
    public function adminIndex(){
         $data= User::where("role","user")->with("userDetails")->get();
        return view("admin.index",compact("data"));
    }
}
