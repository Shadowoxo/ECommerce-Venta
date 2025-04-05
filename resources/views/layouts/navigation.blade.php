<nav class="bg-gray-900 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
           
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-pink-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M16 6V4a4 4 0 00-8 0v2H5a1 1 0 000 2h1v8a2 2 0 002 2h4a2 2 0 002-2V8h1a1 1 0 100-2h-1zM10 2a2 2 0 012 2v2H8V4a2 2 0 012-2z" />
                </svg>
                <a href="{{ route('products.index') }}" class="text-xl font-bold text-white">Mi<span class="text-pink-400">Tienda</span></a>
            </div>

          
            <div class="flex-1 flex justify-center items-center">
                <div class="flex space-x-8 text-sm font-semibold text-white">
                    <a href="{{ url('/') }}" class="hover:text-pink-400 transition duration-200">Inicio</a>
                    <a href="{{ route('products.index') }}" class="hover:text-pink-400 transition duration-200">Productos</a>
                    <a href="{{ route('cart.index') }}" class="hover:text-pink-400 transition duration-200">Carrito</a>
                    @if(auth()->user()->is_admin)
                        <a href="{{ route('products.create') }}" class="hover:text-pink-400 transition duration-200">Crear Producto</a>
                    @endif
                    <a href="{{ route('profile.edit') }}" class="text-sm text-white hover:text-pink-400 transition duration-200">Perfil</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-sm text-white hover:text-red-400 transition duration-200" type="submit">Cerrar sesión</button>
                </form>
                </div>
            </div>


        </div>
    </div>
</nav>
