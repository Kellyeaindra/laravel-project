<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DoctorApp extends Model
{
    use HasFactory;
    public function Doctor(){
        return DB::table("doctor_apps")->get();
    }

    public function AddDr($request){
        DB::table("doctor_apps")->insert([
            "doctor"=>$request->doctor,
            "room"=>$request->room,
            "time"=>$request->time,
        ]);
    }

    public function EditDr($id){
        return DB::table("doctor_apps")->where("id",$id)->first();
    }

    public function UpdateDr($request,$id){
        DB::table("doctor_apps")->where("id",$id)->update([
            "doctor"=>$request->doctor,
            "room"=>$request->room,
            "time"=>$request->time, 
        ]);
    }

    public function DeleteDr($id){
        DB::table("doctor_apps")->where("id",$id)->delete();
    }

}
