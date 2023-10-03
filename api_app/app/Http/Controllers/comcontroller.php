<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comrequest;
use Illuminate\Http\Request;
use App\Models\commimol_;

class comcontroller extends Controller
{
    public function indexcom(){
        $post = commimol_::all();

        return $post;
    }

    public function storecom(Comrequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('logo'))
            {
                $filename = time().'_'.$request->file('logo')->getClientOriginalName();
                $request->file('logo')->storeAs('upload',$filename);
            }
        $post = new commimol_();

        $post->name = request('name');
        $post->email = request('email');
        $post->logo = request('logo');
        $post->logo = $filename;
        $post->website = request('website');
        $post->save();
        return $post;
    }
    
        

   
    public function updatecompany(Comrequest $request,$id)
    {
      if ($request->hasFile('logo'))
      {
          $filename = time().'_'.$request->file('logo')->getClientOriginalName();
          $request->file('logo')->storeAs('upload',$filename);
      }
      $validated = $request->validated();
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'logo'=>'required',
        //     'website'=>'required'
        // ]);
        $post = commimol_::find($id);
        $post->name = request('name');
        $post->email = request('email');
        $post->logo = request('logo');
        // $post->logo = $filename;
        $post->website = request('website');
        
         $post->save();
      return $post;
    }
    

    public function deletecom($id){
        $post = commimol_::find($id);
        $post->delete();
        return $post;
}

}