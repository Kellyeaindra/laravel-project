<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessRequest;
use App\Models\UnMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mstd=new UnMessage();
        $message=$mstd->Message();
     return view("MES.mess",["message"=>$message]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("MES.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessRequest $request)
    {
        $mstd=new UnMessage();
      $mstd->AddMess($request);
        return redirect("/mess");
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
        $mstd=new UnMessage();
      $edit=  $mstd->EditMess($id);

        return view("MES.edit",["edit"=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mstd=new UnMessage();
        $mstd->UpdateMess($request,$id);
        return redirect("/mess");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mstd=new UnMessage();
       $mstd->DeleteMess($id);
       return redirect("/mess");
    }
}
