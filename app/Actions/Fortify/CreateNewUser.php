<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string'],
            'surname' => ['required', 'string', 'max:80'],
            /* 'apellido2' => ['string', 'max:80'],
            'f_nacimiento' => ['required', 'date'],
            'tlf_movil' => ['numeric'], */
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'email' => $input['email'],
            'name' => $input['name'],
            'surname' => $input['surname'],
            /* 'apellido2' => $input['apellido2'],
            'f_nacimiento' => $input['f_nacimiento'],
            'tlf_movil' => $input['tlf_movil'], */
            'password' => Hash::make($input['password']),
        ]);
    }
}
