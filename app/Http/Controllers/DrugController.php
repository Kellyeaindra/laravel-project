<?php

namespace App\Http\Controllers;

use App\Models\DrugS;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $mstd=new DrugS();
        $drug=$mstd->DrugS();
       return view("DRUG.dstore",["drug"=>$drug]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("DRUG.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $request->validate([
        "drug"=>"required",
        "gram"=>"required",
        "total"=>"required|max:3",
        "price"=>"required"
     ]);

        $mstd=new DrugS();
        $mstd->Adddrug($request);
        return redirect("/drug");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $mstd=new DrugS();
      $edit=  $mstd->Editdrug($id);
        return view("DRUG.edit",["edit"=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $mstd=new DrugS();
       $mstd->Updatedrug($request,$id);
       return redirect("/drug");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mstd=new DrugS();
        $mstd->Deletedrug($id);
        return redirect("/drug");
    }
}
