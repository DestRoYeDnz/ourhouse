<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Illuminate\Support\Facades\Auth;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function share(Request $request)
    {
        $plan = 'free';
        
        if(null != $request->user()){   
            if ($request->user()->subscribed('prod_J1nC6riA5YJtVm')) {
                $plan = 'free';
            } else if ($request->user()->subscribed('prod_J1nC5GU1aX7bjh')) {
                $plan = 'pro';
            }
        }

        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
                'subscription' => $plan,
            ],
            'loggedIn' => Auth::check(),
            'flash' => function () use ($request) {
                return [
                    'success' => $request->session()->get('success'),
                    'failure' => $request->session()->get('failure'),
                ];
            },
            'showingMobileMenu' => false,
        ]);
    }
}
