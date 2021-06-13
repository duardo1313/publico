<x-guest-layout>
    <x-auth-card3>
        <x-slot name="logo">
            <a href="/index">
                <img src="img/Logo azul.png" alt="logo_helado" class="w-20 h-40 fill-current">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? No te preocupes. Simplemente escribe tu correo electronico y te enviaremos un correo con un enlace para reestablecer la contraseña y poder elegir una nueva.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="http://127.0.0.1:8000/login" class="mr-4 text-sm text-gray-700 underline">¿Ya tienes cuenta?</a>

                <x-button>
                    {{ __('Reestablecer contraseña') }}
                </x-button>
            </div>
        </form>
    </x-auth-card3>
</x-guest-layout>
