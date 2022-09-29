<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\patient;
use App\Models\Doctor;
use App\Models\invois;
use Illuminate\Support\Facades\Auth;
use App\Models\appointment;
use App\Http\Handler\SaveFileHandler;
use App\Interfaces\AdminRepositoryInterface;


class AdminController extends Controller
{
    private $adminRepository ;
   
    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

public function uplead(Request $request){
    $file= $request->file('image');
    $image = $request->file('image');
    $name=$request->input('name');;
    $phone=$request->input('phone');;
    $Speciality=$request->input('Speciality');;


    $request ->validate([
        'name' => ['required', 'string', 'max:255'],
        'image' => ['required'],
        'Speciality' => ['required'],
        'phone' => 'required|numeric|digits:10'



    ]);
 $data = new SaveFileHandler($file,$image,$name,$phone,$Speciality);
 $data->savefile();    
        return view('admin.add_d');
       
        
}
public function updaetdoc(Request $request,$id){
    $dat= Doctor::find($id);
    $data= Doctor::all();

    $file= $request->file('image');
         if($file){
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Images'), $filename);
            $dat['image']= $filename;
         }

            $dat['name']=$request->input('name');;
            $dat['phone']=$request->input('phone');;
            $dat['Speciality']=$request->input('Speciality');;
            $dat->update();
      
        return redirect()->back()->with('message','Information Updated Successfully');

}
public function appointmentcon(Request $request,$id){
    $dat= appointment::find($id);
    $data= Doctor::all();
     
            $dat['statu']="Approved";;
            $dat->update();
      
        return redirect()->back();

}

public function doclist(Request $request){
    $data= $this->adminRepository->doclist();

    return view('admin.doc_list',compact('data'));
}
public function appointmentlist(Request $request){
    $data= appointment::all();

    return view('admin.appointment',compact('data'));
}
public function Patientslist(){
    $patient= User::all();

    return view('admin.patientslist',compact('patient'));
}
public function appointmentday(Request $request){
    $dat =date('Y-m-d');
    $data= appointment::where('date', $dat)->get();

    return view('admin.todappointment',compact('data'));
}
public function delet($id){
    $data= Doctor::all();
    $DEL=Doctor::find($id);
    $DEL->delete();

    return redirect()->back();
}
public function appointmentdel($id){
    $data= appointment::all();
    $DEL=appointment::find($id);
    $DEL->delete();

    return redirect()->back();
}
public function appointment(Request $request){
    $data= new appointment();
    $data['name']=$request->input('name1');
    $data['phone']=$request->input('phone');;
    $data['date']=$request->input('dat');;
    $data['message']=$request->input('message');;
    $data['dname']=$request->input('doctorname');;
    $data->save();

    return redirect()->back();
  }     
  public function apdeatdoc($id){
    $upd=Doctor::find($id); 

    return view('admin.uap_doc',compact('upd','id'));
  }
  public function billing(){
    $data= invois::all();

    return view('admin.billing',compact('data'));
  }

}
