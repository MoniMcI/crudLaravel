<x-guest-layout>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <!-- Nombre -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Apellido -->
        <div class="mt-2">
            <x-input-label for="last_name" :value="__('Apellido')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="$user->last_name" required autofocus />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Correo Electrónico -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Correo Electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Teléfono -->
        <div class="mt-2">
            <x-input-label for="phone_number" :value="__('Teléfono')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="$user->phone_number" required />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Nueva Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Actualizar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
