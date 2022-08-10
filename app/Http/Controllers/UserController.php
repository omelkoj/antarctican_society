<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function addData(Request $req)
    {
        $useroo = new User;
        $useroo->FirstName=$req->FirstName;
        $useroo->LastName=$req->LastName;
        $useroo->Organization=$req->Organization;
        $useroo->Enewsletter= $req->Enewsletter;
        $useroo->ChkAddress= $req->ChkAddress;
        $useroo->ChkBio= $req->ChkBio;
        $useroo->ChkEmail= $req->ChkEmail;
        $useroo->ChkTelephone= $req->ChkTelephone;
        $useroo->ChkPhotoID= $req->ChkPhotoID;
        $useroo->save();
        //return redirect('submit');
    }

    public function index()
    {
        $users = User::get();

        return view('user', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //User::create()
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
        //User::update()
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
