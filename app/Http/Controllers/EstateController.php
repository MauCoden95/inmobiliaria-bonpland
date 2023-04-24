<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use Illuminate\Http\Request;


class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    

     public function index()
    {
        return Estate::paginate();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Estate $estate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estate $estate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estate $estate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estate $estate)
    {
        //
    }


    public function detail($id)
    {
        $estate = Estate::find($id);

        return view('detail', compact('estate'));
    }

    public function code($refer){
        
        return view('consultation', compact('refer'));
    }
}
