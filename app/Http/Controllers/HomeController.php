<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\appointment;




class HomeController extends Controller
{
    public function redirect(){
      $data= Doctor::all();

        if(Auth::id()){
      if(Auth::user()->usertype=='0'){
        return view('user.home',compact('data'));
      }
      else{
        return view('admin.home');
      }
        }
        else {
            return redirect()->Back();
        }
    }
    public function index(){
      $data= Doctor::all();

        return view('user.home',compact('data'));
    }
    public function appointment(Request $request){
      $data= new appointment();
      $data['name']=$request->input('name1')." ".$request->input('name2');;
      $data['phone']=$request->input('phone');;
      $data['date']=$request->input('dat');;
      $data['message']=$request->input('message');;
      $data['dname']=$request->input('doctorname');;
      $data->save();

      return redirect()->back();
    }
}
