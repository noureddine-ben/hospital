<?php

namespace App\Http\Handler;
use App\Models\Doctor;

class SaveFileHandler {
    
    public $doctor;
    public $file;
    public $image;
    public $name;
    public $phone;
    public $Speciality;


    public function __construct ( $file,$image,$name,$phone,$Speciality) {
        $this->file = $file;
        $this->image =$image ;
        $this->name =$name ;
        $this->phone = $phone ;
        $this->Speciality =$Speciality ;

    }
    public function savefile()
    {
        $this->doctor = new Doctor;
            $file=$this->file ;
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Images'), $filename);
            $this->doctor['image']= $filename;
            $this->doctor['name']=$this->name;
            $this->doctor['phone']=$this->phone;
            $this->doctor['Speciality']=$this->Speciality;
            $this->doctor->save();
        
    }
}