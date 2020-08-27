<?php

namespace App\Http\Controllers;

use  Illuminate\Http\Request;
use DB;

class preController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function cata(){
        return view('posts.catagori');
    }


    public function writepost(){
        return view('posts.writeposts');
    }

    public function incata(Request $request){
        $request->validate([
            'name' => 'required|min:4|max:25',
            'slug' => 'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
     
      $insert=DB::table('catagoris')->insert($data);
      if($insert){
          echo "your data is successfully inserted";
          return Redirect()->route('home');

      }else{
        echo "your data is successfully NOT inserted";
        return Redirect()->back();

      }
        
        
    }

    public function allcata(){
        $alldata=DB::table('catagoris')->get();
        return view('posts.allcatagoris',compact('alldata'));
    }
    public function vdata($id){
        $data=DB::table('catagoris')->where('id',$id)->first();
        return view('posts.viewdata')->with('sar',$data) ;
        // echo $id;
        
    }
}
