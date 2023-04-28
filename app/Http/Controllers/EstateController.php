<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use Exception;
use Illuminate\Http\Request;
use DB;


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
    public function edit(Request $request)
    {
        // $address = $request->input('address');
        // $type = $request->input('type');
        // $country = $request->input('country');
        // $city = $request->input('city');
        // $ambients = $request->input('ambients');
        // $square_meters = $request->input('square_meters');
        // $price = $request->input('price');
        // $operation = $request->input('operation');

        // $refer = $request->input('refer');


        
        // Estate::where('refer',$refer)->update(
        //     [
        //         'address' => $address,
        //         'type' => $type,
        //         'country' => $country,
        //         'city' => $city,
        //         'ambients' => $ambients,
        //         'square_meters' => $square_meters,
        //         'price' => $price,
        //         'operation' => $operation
        //     ]
        // );

        dd($request->input());

        // if ($request->hasFile('img')) {
        //     $file = $request->file('img');
        //     $file->move(public_path() . '/img/', $file->getClientOriginalName());
        // }

        // Estate::where('refer',$request->refer)->update(
        //     [
        //         'address' => $request->get('address'),
        //         'type' => $request->get('type'),
        //         'country' => $request->get('country'),
        //         'ambients' => $request->get('ambients'),
        //         'square_meters' => $request->get('square_meters'),
        //         'price' => $request->get('price'),
        //         'operation' => $request->get('price'),
        //         'state' => $request->get('state'),
        //         'image' => $file->getClientOriginalName()
                
        //     ]
        // );


        //return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Estate $estate)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $estate = Estate::find($id);
        $image = $estate->image;
        $imagePath = public_path().'/img/';
        $file = $imagePath.$image;
        
        //dd($imagePath);

        if (file_exists($file)) {
            unlink($file);
        }
        $estate = Estate::where('id','=',$id)->delete();
      

        return back()->with('success_destroy','Inmueble eliminado con exito!!!');
    }


    public function detail($id)
    {
        $estate = Estate::find($id);

        return view('detail', compact('estate'));
    }

    public function code($refer)
    {

        return view('consultation', compact('refer'));
    }

    public function insertar(Request $request)
    {
        //dd($request);
        $refer = rand(1000,9999);
        $state = "Disponible";
        try {
            DB::beginTransaction();
            $estate = new Estate;
            $estate->address = $request->get('address');
            $estate->type = $request->get('type');
            $estate->country = $request->get('country');
            $estate->city = $request->get('city');
            $estate->ambients = $request->get('ambients');
            $estate->square_meters = $request->get('square_meters');
            $estate->price = $request->get('price');
            $estate->address = $request->get('address');
            $estate->operation = $request->get('operation');
            $estate->refer = $refer;
            $estate->state = $state;

            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $file->move(public_path() . '/img/', $file->getClientOriginalName());
                $estate->image = $file->getClientOriginalName();
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }


        $estate->save();

        //dd($estate);

        return back()->with('success','Inmueble agregado con exito!!!');
    }
}