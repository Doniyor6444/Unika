<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        return view('home', [
            'use' => $user
        ]);
    }

    public function delete($id)
    {
        User::where('id' , $id) -> delete();
        return back();
    }

    public function edit($id) {
        $edit = User::where('id', $id)->first();
        return view('edit',
            [ 
               'edit'=>$edit
            ]);
    }
    
    public function saveedit(Request  $request , $id) {
        $edit = User::where('id' , $id) -> update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,]);
            return redirect('/table');
    }
}
