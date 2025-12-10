@extends('layouts.home')

@section('tittle', 'Welcome: Larapets')

@section('content')
    <section class="bg-[#0009] rounded-lg w-96 p-8 flex flex-col gap-4 items-center justify-center">
        <img src="{{ asset('images/logo.png') }}" width="260" alt="logo">
        <p class="text-white ">
            Larapets es una plataforma dedicada a conectar personas y familias con mascotas que buscan un hogar 
            lleno de amor. En nuestra página, puedes encontrar perros, gatos y otros animales en adopción, conocer 
            su historia, características y necesidades, y ponerte en contacto directamente con refugios o dueños 
            responsables. Nuestro objetivo es fomentar la adopción responsable y reducir el abandono animal, 
            creando un espacio seguro y confiable para quienes desean darle una segunda oportunidad a una mascota. 
            En Larapets, creemos que cada animal merece un hogar y cada hogar puede encontrar a su compañero ideal.
        </p>
        <div class="flex gap-2 mt-8" text-white>
            @guest()
                <a class="btn btn-primary w-[160px]" href="{{ url('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M208,80H96V56a32,32,0,0,1,32-32c15.37,0,29.2,11,32.16,25.59a8,8,0,0,0,15.68-3.18C171.32,24.15,151.2,8,128,8A48.05,48.05,0,0,0,80,56V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80Zm0,128H48V96H208V208Zm-68-56a12,12,0,1,1-12-12A12,12,0,0,1,140,152Z"></path></svg>
                    Login
                </a>
                <a class="btn btn-primary w-[160px]" href="{{ url('register') }}">
                    <svg xmlns="http://www.w3.org/2000/svg"class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136Zm-57.87,58.85a8,8,0,0,1-12.26,10.3C165.75,181.19,138.09,168,108,168s-57.75,13.19-77.87,37.15a8,8,0,0,1-12.25-10.3c14.94-17.78,33.52-30.41,54.17-37.17a68,68,0,1,1,71.9,0C164.6,164.44,183.18,177.07,198.13,194.85ZM108,152a52,52,0,1,0-52-52A52.06,52.06,0,0,0,108,152Z"></path></svg>
                    Register
                </a>
            @endguest
            @auth()
                <a class="btn btn-primary w-[160px]" href="{{ url('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M195.88,96c.07-1.31.12-2.63.12-4A68,68,0,0,0,60,92c0,1.33,0,2.65.12,4A68,68,0,1,0,128,213.65,68,68,0,1,0,195.88,96ZM128,193.47a51.89,51.89,0,0,1-16-35.38,67.55,67.55,0,0,0,31.9,0A51.89,51.89,0,0,1,128,193.47ZM128,144a51.93,51.93,0,0,1-14.08-1.95A52.06,52.06,0,0,1,128,118.53a52.06,52.06,0,0,1,14.08,23.52A51.93,51.93,0,0,1,128,144Zm-28.77-8.71A52.19,52.19,0,0,1,77.92,106a51.88,51.88,0,0,1,36.79,3.28A68.17,68.17,0,0,0,99.23,135.29Zm42.06-26.06A51.88,51.88,0,0,1,178.08,106a52.19,52.19,0,0,1-21.31,29.34A68.17,68.17,0,0,0,141.29,109.23ZM128,40A52.06,52.06,0,0,1,180,89.91,67.72,67.72,0,0,0,128,98.35a67.72,67.72,0,0,0-51.95-8.44A52.06,52.06,0,0,1,128,40ZM40,156a52,52,0,0,1,23.23-43.29A68.36,68.36,0,0,0,96.12,152c-.07,1.31-.12,2.63-.12,4a67.74,67.74,0,0,0,18.71,46.77A52,52,0,0,1,40,156Zm124,52a51.65,51.65,0,0,1-22.71-5.23A67.74,67.74,0,0,0,160,156c0-1.33-.05-2.65-.12-4a68.36,68.36,0,0,0,32.89-39.33A52,52,0,0,1,164,208Z"></path></svg>
                    Dashboard
                </a>
            @endauth
        </div>
    </section>

@endsection