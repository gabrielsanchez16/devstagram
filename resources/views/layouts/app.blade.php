<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DevStagram - @yield('titulo')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-3xl font-black">
                    <h1>
                        DevStagram
                    </h1>
                    
                </a>


               
                @auth
                    <nav class="flex gap-2 items-center">
                        <a href="{{route('post.create')}}" class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" />
                                <path fill-rule="evenodd" d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                              </svg>
                              
                                Crear
                        </a>
                        <a class="font-bold text-gray-600 text-sm" href="{{route('post.index',auth()->user()->username)}}">
                            Hola: <span class="font-normal">{{auth()->user()->username}}</span>
                        </a>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm" >
                                Cerrar Sesion
                            </button>
                        </form>
                       
                    </nav>
                @endauth
                       
               
                @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('login')}}">Login</a>
                        <a href="{{route("register")}}" class="font-bold uppercase text-gray-600 text-sm" >
                            Crear Cuenta
                        </a>
                    </nav>
                @endguest
                
                    
             



            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center  text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            DevStagram - Todos los derechos reservados 
            {{ now()->year }}
        </footer>

       
    </body>
</html>