<x-guest-layout>

    <div class="container-link-home">
        <a class="link-home" href="{{ route('index') }}">{{-- <span class="zmdi zmdi-home"></span> --}}HOME</a>
    </div>
        <x-jet-validation-errors class="mb-3" />


        <div class="main-login-register">

            <div class="container-register">
                <div class="register-content">
                    <form method="POST" id="register-form" class="register-form" action="{{ route('register') }}">
                        @csrf
                        <h2 class="titulo-login-register">REGISTRARSE</h2>
                        <p class="desc">¿Ya tienes una cuenta? <span><a href="{{ route('login') }}" class="link-login-register">Inicia sesión</a></span></p>
                        <div class="form-group">
                            <input id="email" class="form-input" type="email" name="email" value="{{old('email')}}" placeholder="Email" required autofocus autocomplete="email"/>
                            <x-jet-input-error for="email"></x-jet-input-error>
                        </div>
                        <div class="form-group">
                            <input id="nombre" class="form-input" type="text" name="nombre" value="{{old('nombre')}}" placeholder="Nombre" required  autocomplete="nombre" />
                            <x-jet-input-error for="nombre"></x-jet-input-error>
                        </div>
                        <div class="form-group">
                            <input id="apellidos" class="form-input" type="text" name="apellidos" value="{{old('apellidos')}}" placeholder="Apellidos" required  autocomplete="apellidos" />
                            <x-jet-input-error for="apellidos"></x-jet-input-error>
                        </div>
                        <div class="form-group">
                            <input id="password" class="form-input" type="password" name="password" placeholder="Contraseña" required autocomplete="new-password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                         </div>
                        <div class="form-group">
                            <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password" />
                            <span toggle="#password_confirmation" class="zmdi zmdi-eye field-icon toggle-password-confirmation"></span>
                        </div>
                        <div class="form-group">
                                <input type="checkbox" name="terms" id="terms" required/>
                                <label for="terms" class="label-terms"><span><span></span></span>No me los he leido, pero acepto los  <a href="{{ route('welcome') }}" class="terms-policy-link">Terminos</a> y la <a href="{{ route('welcome') }}" class="terms-policy-link">Política de privacidad.</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="submit-link-register submit" value="{{ __('Registrarse') }}"/>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</x-guest-layout>

                {{-- <div class="mb-4">
                    <x-jet-label for="apellido2" value="{{ __('apellido2') }}" />
                    <x-jet-input id="apellido2" class="block mt-1 w-full" type="text" name="apellido2" :value="old('apellido2')" autofocus autocomplete="apellido2" />
                </div> --}}

               {{--  <div class="mb-4">
                    <x-jet-label for="f_nacimiento" value="{{ __('f_nacimiento') }}" />
                    <x-jet-input id="f_nacimiento" class="block mt-1 w-full" type="date" name="f_nacimiento" :value="old('f_nacimiento')" required autofocus autocomplete="f_nacimiento" />
                </div> --}}

                {{-- <div class="mb-4">
                    <x-jet-label for="tlf_movil" value="{{ __('tlf_movil') }}" />
                    <x-jet-input id="tlf_movil" class="block mt-1 w-full" type="text" name="tlf_movil" :value="old('tlf_movil')" autofocus autocomplete="tlf_movil" />
                </div> --}}
