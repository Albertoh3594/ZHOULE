<x-guest-layout>

        <div class="main-login">

            <a class="link-home" href="{{ route('welcome') }}">HOME</a>

            {{-- <x-jet-validation-errors class="mb-3 rounded-0" /> --}}

           {{--  @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif --}}

            <div class="container-login">
                <div class="login-content">
                    <form method="POST" id="login-form" class="login-form" action="{{ route('login') }}">
                        @csrf
                        <h2 class="titulo-login">INICIAR SESION</h2>
                        <p class="desc">¿Nuevo en ZHOULE TEAM? <span><a href="{{ route('register') }}" class="link-login">Registrate</a></span></p>
                        <div class="form-group">
                            <input type="email" class="form-input {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" type="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Email"/>
                            <x-jet-input-error for="email"></x-jet-input-error>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-input {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" type="password"  required placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <x-jet-input-error for="password"></x-jet-input-error>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="link-login"> ¿Olvidaste tu contraseña?</a>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="submit-link submit" value="Iniciar Sesión"/>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</x-guest-layout>
