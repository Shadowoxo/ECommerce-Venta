@extends('layouts.guest')

@section('title', 'Login')

@section('content')
   
    @if (session('status'))
        <div class="mb-4 text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="py-8 min-h-screen flex flex-col items-center justify-center dark:bg-neutral light:bg-base-100">
        <div class="flex flex-col dark:bg-gray-900 light:bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
            <div class="font-medium self-center text-xl sm:text-3xl dark:text-gray-300 light:text-gray-800">
                Loguéate y únete
            </div>

            <div class="mt-4 self-center text-xl sm:text-sm dark:text-gray-300 light:text-gray-800">
                Ingresa tus credenciales para obtener acceso a la cuenta
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

              
                <div class="mt-4">
                    <label for="email" class="block text-sm text-gray-700">Correo electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="block mt-1 w-full">
                    @error('email') <div class="text-red-600 mt-1">{{ $message }}</div> @enderror
                </div>

               
                <div class="mt-4">
                    <label for="password" class="block text-sm text-gray-700">Contraseña</label>
                    <input id="password" type="password" name="password" required class="block mt-1 w-full">
                    @error('password') <div class="text-red-600 mt-1">{{ $message }}</div> @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
@endsection
