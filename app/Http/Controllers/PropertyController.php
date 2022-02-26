<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {

        $properties = Property::where('user_id', '=', auth()->id())->get();
        
        return Inertia::render('Properties/Index', [
            'properties' => $properties
        ]);
    }
    
    public function destroy(Request $request){
        $property = Property::find($request->input('id'));
        $property->delete();

        return redirect()->route('properties.index');
    }
}
