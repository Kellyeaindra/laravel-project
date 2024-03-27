<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\RoomNum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info("Soeone is trying to read!");
        $mstd=new RoomNum();
        $room=$mstd->Room();
        return view("HOS.room",["room"=>$room]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("HOS.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request)
    {
        $mstd=new RoomNum();
        $mstd->Add($request);
        return redirect("/room");
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

        $mstd=new RoomNum();
      $edit=  $mstd->Edit($id);
       return view("HOS.edit",["edit"=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mstd=new RoomNum();
       $mstd->UpdateData($request,$id);
       return redirect("/room");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        log::channel("seriouserror")->emergency("Someone id trying to delete!$id");
        $mstd=new RoomNum();
       $mstd->DeleteData($id);
       return redirect("/room");
    }
}
