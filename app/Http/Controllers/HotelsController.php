<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotels;

class HotelsController extends Controller
{
    public function Crear()
    {
        return view('CRUD.crear');
    }

    public function Consultar()
    {
        $hotels = hotels::all();
        return view('CRUD.consultar', compact('hotels'));
    }

    public function eliminar()
    {
        $hotels = hotels::all();
        return view('CRUD.eliminar', compact('hotels'));
    }

    public function update(Request $request, hotels $hotel)
    {
        $request->validate([
            'name' => 'string',
            'address' => 'string',
            'number_rooms' => 'integer',
            'phone_number' => 'string',
            'qualification' => 'string',
        ]);

        $hotel->update($request->all());
        return redirect()->back()->with('success','Hotel actualizado con exito!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string',
            'address' => 'string',
            'number_rooms' => 'integer',
            'phone_number' => 'string',
            'qualification' => 'string',
        ]);

        $hotels = new hotels();
        $hotels->name = $request->name;
        $hotels->address = $request->address;
        $hotels->number_rooms = $request->number_rooms;
        $hotels->phone_number = $request->phone_number;
        $hotels->qualification = $request->qualification;

        $hotels->save();

        return redirect()->back()->with('success','Hotel agregado con exito!');
    }

    public function destroy(hotels $hotel)
    {
        $hotel->delete();

        return redirect()->back()->with('success', 'Hotel eliminado correctamente.');
    }
}
