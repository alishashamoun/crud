<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;

class homecontroller extends Controller
{
   

    public function index(){
        $data['home'] = Home::get();
        return view('home/view', $data);
    }

    public function create(){
        return view('home/create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);
        
        Home::create([

            'title' => request()->input('title'),
            'description' => request()->input('description'),
        ]);
        return redirect()->to('home')->with('success', 'create  successfully');
    }

    public function edit($id){
        $data['home'] = Home::find($id);
        return view('home/edit', $data);
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);

        $home = Home::find($id);
        $home->update([
            'title' => request()->input('title'),
            'description' => request()->input('description'),
        ]);
        return redirect('/home')->with('success','update successfully');

    }

    public function delete($id){
      $home =  Home::find($id);
        $home->delete();
        return redirect()->to('/home')->with('success', 'delete successfully');
    }

}