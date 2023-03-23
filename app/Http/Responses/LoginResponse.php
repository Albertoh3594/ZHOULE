<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $role = auth()->user()->role;
        $url = route('voyager.dashboard');
        switch ($role) {
            case 'admin':
                return redirect()->intended($url);
                break;
            case 'usuario':
                return redirect()->intended(config('fortify.home'));
                break;
            default:
                return redirect('/');
                break;
        }
    }
}
