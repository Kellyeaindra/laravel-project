<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DrugS extends Model
{
    use HasFactory;
    public function DrugS(){
        return DB::table("drug_s")->get();
    }

    public function Adddrug($request){
       DB::table("drug_s")->insert([
        "drug"=>$request->drug,
        "gram"=>$request->gram,
        "total"=>$request->total,
        "price"=>$request->price
       ]);
    }

    public function Editdrug($id){
        return DB::table("drug_s")->where("id",$id)->first();
    }

    public function Updatedrug($request,$id){
        DB::table("drug_s")->where("id",$id)->update([
            "drug"=>$request->drug,
        "gram"=>$request->gram,
        "total"=>$request->total,
        "price"=>$request->price
        ]);
    }

    public function Deletedrug($id){
        DB::table("drug_s")->where("id",$id)->delete();
    }
}
