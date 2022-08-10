<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Create;

class CreateController extends Controller
{

    public function index()
    {
        //can do orderby and other stuff
        // return Post::where('title', 'Post Two')->get();
        // $posts = Post::orderBy('title', 'desc')->take(1)->get();
        // $posts = Post::orderBy('title', 'desc')->paginate(10);
        //SQL
        //$posts = DB::select('SELECT * FROM posts');
        $createData = Create::get();
        return view('create', ['createData'=>$createData]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //Create post
        //$post = new Post;
        //$post->title = $request->input('body');
        //$post->save();
        //return redirect('/posts')->with('success', 'Post Created');

    }

    public function show($id) {
        $createData = Create::find($id);
        return view('show', ['createData'=>$createData]);

    }

    function save(Request $req)
    {
        //print_r($req->input());
        $create = new Create;
        $create->FirstName= $req->FirstName;
        $create->Lastname= $req->LastName;
        $create->Organization= $req->Organization;
        $create->Enewsletter= $req->Enewsletter;
        $create->ChkAddress= $req->ChkAddress;
        $create->ChkBio= $req->ChkBio;
        $create->ChkEmail= $req->ChkEmail;
        $create->ChkTelephone= $req->ChkTelephone;
        $create->ChkPhotoID= $req->ChkPhotoID;
        $create->save();
        
        //return redirect('user');
    }
}
