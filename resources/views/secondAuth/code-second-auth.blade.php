<x-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->has('g-recaptcha-response'))
        <span class="help-block">
            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
        </span>
    @endif

    <div class="container">
        <h2>Ingresa el código que se te envió a tu correo electrónico</h2>

        <form method="post" action="{{ route('set_second_auth') }}" class="mt-4">
        {{ csrf_field() }}
                    <div class="mb-3">
                <label for="campo" class="form-label">Código:</label>
                <input type="text" id="campo" name="campo" class="block mt-1 w-full" required autofocus>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-3" id="btnEnviar" onclick="validateButton()">
                    {{ __('Ingresar') }}
                </x-primary-button>
             </div>
       
        </form>
    </div>

    <script>
        function validationButton() {
            document.getElementById("btnEnviar").disabled = true;
            document.querySelector('form').submit();
            setTimeout(function() {document.getElementById("btnEnviar").disabled = false;}, 2000);
        }
    </script>
</x-guest-layout>
