<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RoomNum extends Model
{
    use HasFactory;
    public function Room(){
        return DB::table("room_nums")->paginate(5);
    }


    public function Add($request){
       DB::table("room_nums")->insert([
        "name"=>$request->name,
        "active"=>$request->active,
        "total"=>$request->total,
        "price"=>$request->price
       ]);
    }

    public function Edit($id){
        return DB::table("room_nums")->where("id",$id)->first();
    }

    public function UpdateData($request,$id){
       DB::table("room_nums")->where("id",$id)->update([
        "name"=>$request->name,
        "active"=>$request->active,
        "total"=>$request->total,
        "price"=>$request->price
       ]);
    }
    public function DeleteData($id){
    DB::table("room_nums")->where("id",$id)->delete();
    }
}
