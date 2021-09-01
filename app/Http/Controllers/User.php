<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
class User extends Controller
{

    function list(Request $r){
        return view('list')->with("i",signup::all());
    }
    //Here is signup function
    function signup(Request $r){
        if($r->isMethod('post'))
        {
         $new=new signup;
         $new->username=$r->input('username');
         $new->email=$r->input('email');
         $new->password=$r->input('password');
         $new->save();
        // $r->validate([
		//'uname'=>'required|min:3|max:10',
		//'psw'=>'required|min:3|max:10',
//
//
	    //]);
//
         $r->session()->flash("success","Your are successfully registered");
         return redirect('login');
        }
        else{
            return view('signup');
        }
    }
    //here is login function
    function login(Request $r){
        $email=$r->input('email');
        $password=$r->input('password');
       
        $match=signup::where('email', $email)->where('password',$password)->first();


        if($match===null)
        {
            $r->session()->flash("error","Email Or Password Is Wrong");

            return view('login');
        }
        else{
            return redirect('home');
        }
    }
    function delete(Request $r,$id){
        $all=signup::find($id)->delete();
        return redirect('list');
        
    }
    function update(Request $r,$id)
    {
        $i=signup::find($id);
        if($r->isMethod('post'))
        {
            return view('updateform')->with('i',$i);

        }
        else{
            return view('updateform')->with('i',$i);
        }
    }
}
