<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSettings;

class UserSettingsController extends Controller
{
    public function store(Request $request)
    {
        $UserSettings = UserSettings::firstOrNew(['user_id' => auth()->id()]);
        $UserSettings->deposit = $request->input('deposit');
        $UserSettings->interest_rate = $request->input('interest_rate');
        $UserSettings->loan_period = $request->input('loan_period');
        $UserSettings->save();



        $request->session()->flash('success', 'Your Mortgage credentials are updated');
        return back();
    }
}
