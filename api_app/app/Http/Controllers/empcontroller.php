<?php

namespace App\Http\Controllers;

use App\Http\Requests\Emprequest;
use Illuminate\Http\Request;
use App\Models\empmimol;

class empcontroller extends Controller
{
    public function indexemp(){
        $post = empmimol::all();

        return $post;
    }

    public function storeemp(Emprequest $request){

        $validated = $request->validated();

        $post = new empmimol();

        $post->fullname = request('fullname');
        $post->companyid = request('companyid');
        $post->email = request('email');
        $post->phone = request('phone');
        $post->save();
        return $post;
    }
    public function updateemp(Emprequest $request,$id){
        $validated = $request->validated();

        $post = empmimol::find($id);

        $post->fullname =  request()->fullname;
        $post->companyid =  request()->companyid;
        $post->email =  request()->email;
        $post->phone =  request()->phone;
        $post->save();
        return $post;
    }

    public function deleteemp($id){
        $post = empmimol::find($id);

        $post->delete();
        return $post;
}
}
