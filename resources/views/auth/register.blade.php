@extends('layouts.guest')

@section('title', 'Registro')

@section('content')
    <div class="py-8 min-h-screen flex flex-col items-center justify-center dark:bg-neutral light:bg-base-100">
        <div class="flex flex-col dark:bg-gray-900 light:bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">

            <div class="font-medium self-center text-xl sm:text-3xl dark:text-gray-300 light:text-gray-800">
                Regístrate y únete
            </div>

            <div class="mt-4 self-center text-xl sm:text-sm dark:text-gray-300 light:text-gray-800">
                Registra tus datos para obtener acceso a la cuenta
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

              
                <div class="flex flex-col mb-5">
                    <label for="name" class="mb-1 text-xs tracking-wide dark:text-gray-300 light:text-gray-600">Nombre:</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="block mt-1 w-full">
                    @error('name') <div class="text-red-600 mt-1">{{ $message }}</div> @enderror
                </div>

              
                <div class="flex flex-col mb-5">
                    <label for="email" class="mb-1 text-xs tracking-wide dark:text-gray-300 light:text-gray-600">Correo electrónico:</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required class="block mt-1 w-full">
                    @error('email') <div class="text-red-600 mt-1">{{ $message }}</div> @enderror
                </div>

              
                <div class="flex flex-col mb-5">
                    <label for="password" class="mb-1 text-xs tracking-wide dark:text-gray-300 light:text-gray-600">Contraseña:</label>
                    <input id="password" type="password" name="password" required class="block mt-1 w-full">
                    @error('password') <div class="text-red-600 mt-1">{{ $message }}</div> @enderror
                </div>

               
                <div class="flex flex-col mb-5">
                    <label for="password_confirmation" class="mb-1 text-xs tracking-wide dark:text-gray-300 light:text-gray-600">Confirmar contraseña:</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required class="block mt-1 w-full">
                </div>

               
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </form>

        </div>
    </div>
@endsection
