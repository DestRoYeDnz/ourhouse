<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Property;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // $faker = Faker::factory::create();

        // $regions = ['Northland', 'Auckland','Waikato','Bay of Plenty','Gisbourne','Hawkes Bay','Taranaki','	Manawatu-Whanganui','Wellington','Tasman','Nelson','Marlborough','West Coast','Canterbury','Otago','Southland'];
        // $vendors = ['Ray White', 'Barfoot & Thompson','Harcourts'];

        // for ($x = 0; $x <= 10; $x++) {

        //     $prop = new Property();
        //     $prop->user_id = $user->id;
        //     $prop->unique_id =  sha1(time());
        //     $prop->source_url = $faker->url();
        //     $prop->source = 'trademe';
        //     $prop->title = $faker->company();
        //     $prop->address =  $faker->address();
        //     $prop->lat =  $faker->latitude();
        //     $prop->long = $faker->longitude();
        //     $prop->region =  array_rand($regions, 1);
        //     $prop->price = rand(120000, 500000);
        //     $prop->bedrooms = rand(1,6);
        //     $prop->bathrooms = rand(1,4);
        //     $prop->house_area = rand(75,300);
        //     $prop->land_area = rand(200, 1800);
        //     $prop->vendor = array_rand($vendors, 1);
        //     $prop->agent_name = $faker->name();
        //     $prop->agent_phone = $faker->phoneNumber();
        //     $prop->agent_email = $faker->email();
        //     $prop->save();
        //   }

        $user->newSubscription('default', 0);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
