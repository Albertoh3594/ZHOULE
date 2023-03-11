<x-guest-layout>
    <x-jet-authentication-card>

        <div class="main-login">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="container-login">
                <div class="login-content">
                    <form method="POST" id="login-form" class="login-form" action="{{ route('login') }}">
                        @csrf
                        <h2>INICIAR SESION</h2>
                        <p class="desc">¿Nuevo en ZHOULE TEAM?<span><a href="#" class="link-registro"> Registrate</a></span></p>
                        <div class="form-group">
                            <x-jet-input type="email" class="form-input {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Email"/>
                            <x-jet-input-error for="email"></x-jet-input-error>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" type="password" name="password" value="{{ __('password') }}" required placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <x-jet-input-error for="password"></x-jet-input-error>
                        </div>
                        <div class="form-group">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="link-registro"> ¿Olvidaste tu contraseña?</a>
                            @endif
                        </div>
                        <div class="form-group">
                            <x-jet-input type="submit" name="submit" id="submit" class="submit-link submit" value="Iniciar Sesión"/>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </x-jet-authentication-card>
</x-guest-layout>
