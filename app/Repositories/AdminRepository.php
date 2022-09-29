<?php
namespace App\Repositories;

use App\Interfaces\AdminRepositoryInterface;
use App\Models\Doctor;

class AdminRepository implements AdminRepositoryInterface {

    public function doclist(){
        return Doctor::all();
    }

}