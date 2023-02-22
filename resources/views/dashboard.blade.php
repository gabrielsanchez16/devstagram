@extends('layouts.app')

@section('titulo')
    Perfil: {{$user->username}}
@endsection

@section('contenido')


    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 w-6/12 m-auto px-5">
                <img src="{{asset('img/usuario.svg')}}" alt="">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 ">

                <p class="text-gray-700 text-2xl mb-5">{{$user->username}}</p>
                <p class="text-gray-800  text-sm mb-3 font-bold">
                    0 <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-gray-800  text-sm mb-3 font-bold">
                    0 <span class="font-normal">Seguiendo</span>
                </p>
                <p class="text-gray-800  text-sm mb-3 font-bold">
                    0 <span class="font-normal">Posts</span>
                </p>
            </div>
        </div>

    </div>



@endsection
