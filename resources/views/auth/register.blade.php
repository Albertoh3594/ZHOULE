<x-guest-layout>

    <div class="container-link-home">
        <a class="link-home" href="{{ route('index') }}">{{-- <span class="zmdi zmdi-home"></span> --}}HOME</a>
    </div>
        {{-- <x-jet-validation-errors class="mb-3" /> --}}


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
                            <x-jet-input-error for="password"></x-jet-input-error>
                        </div>
                        <div class="form-group">
                            <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password" />
                            <span toggle="#password_confirmation" class="zmdi zmdi-eye field-icon toggle-password-confirmation"></span>
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <x-jet-checkbox id="terms" name="terms" />
                                <label class="custom-control-label" for="terms">
                                    {!! __('He leído los :terms_of_service y :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terminos') . '</a>',
                                        'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Condiciones') . '</a>',
                                    ]) !!}
                                </label>
                            @endif
                            {{-- <input type="checkbox" id="terms" name="terms" required />
                            <label for="terms" class="label-terms"><span><span></span></span>No los he leido, pero acepto los  <a href="{{ route('index') }}" class="terms-policy-link">Terminos</a> y la <a href="{{ route('index') }}" class="terms-policy-link">Política de privacidad.</a></label>
                        --}} </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="submit-link-register submit" value="{{ __('Registrarse') }}"/>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</x-guest-layout>
