<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Property;
use App\Models\CustomFields;




class CustomFieldsController extends Controller
{
    public function index(){

        $custom_fields = CustomFields::where('user_id', '=', auth()->id())->get();

        return Inertia::render('CustomFields/Index', [
            'custom_fields' => $custom_fields,
        ]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:25',
            'slug' => 'required|unique:custom_fields',
        ]);

        $properties = Property::where('user_id', '=', auth()->id())->get();

        foreach($properties as $row){
            $row->updateCustomFields($request->input('slug'), '');
        }

        $cf = new CustomFields();
        $cf->name = $request->input('name');
        $cf->slug = $request->input('slug');
        $cf->color = $request->input('color');
        $cf->value = $request->input('value');
        $cf->type = $request->input('type');

        $cf->user_id = auth()->id();
        $cf->save();

        $custom_fields = CustomFields::where('user_id', '=', auth()->id())->get();

        return Inertia::render('CustomFields/Index', [
            'custom_fields' => $custom_fields
        ]);
    }
}
