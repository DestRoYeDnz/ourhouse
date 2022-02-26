<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Property;


class CustomFieldsController extends Controller
{
    public function index(){

        $properties = Property::where('user_id', '=', auth()->id())->get();

        return Inertia::render('CustomFields/Index', [
            'properties' => $properties
        ]);
    }
}
