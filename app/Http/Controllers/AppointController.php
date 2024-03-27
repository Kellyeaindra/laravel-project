<?php

namespace App\Http\Controllers;

use App\Models\DoctorApp;
use Illuminate\Http\Request;

class AppointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $mstd=new DoctorApp();
        $doctor=$mstd->Doctor();
        return view("APPO.appoint",["doctor"=>$doctor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("APPO.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "doctor"=>"required",
            "room"=>"required",
            "time"=>"required"
        ]);

        $mstd=new DoctorApp();
        $mstd->AddDr($request);
        return redirect("/appoint");
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
        
        $mstd=new DoctorApp();
       $Dedit= $mstd->EditDr($id);
        return view("APPO.edit",["dedit"=>$Dedit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mstd=new DoctorApp();
       $mstd->UpdateDr($request,$id);
       return redirect("/appoint");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mstd=new DoctorApp();
        $mstd->DeleteDr($id);
        return redirect("/appoint");
    }
}
