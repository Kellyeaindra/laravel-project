<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UnMessage extends Model
{
    use HasFactory;
    public function Message(){
        return DB::table("un_messages")->paginate(5);
    }

    public function AddMess($request){
        DB::table("un_messages")->insert([
            "message"=>$request->message,
            "time"=>$request->time
        ]);
    }

    public function EditMess($id){
            return DB::table("un_messages")->where("id",$id)->first();
    }

    public function UpdateMess($request,$id){
        DB::table("un_messages")->where("id",$id)->update([
            "message"=>$request->message,
            "time"=>$request->time
        ]);
    }

    public function DeleteMess($id){
        DB::table("un_messages")->where("id",$id)->delete();
    }
}
