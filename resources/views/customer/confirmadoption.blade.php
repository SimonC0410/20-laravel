@extends('layouts.dashboard')

@section('title', 'Show Pets: LaraPets 🐒')

@section('content')
<h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-white">Show Pet
    <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
        <path
            d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
        </path>
    </svg>
</h1>

{{-- breadcrums --}}
<div class="breadcrumbs text-sm flex justify-center text-white">
    <ul>
        <li>
            <a href="{{ url('dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="white" viewBox="0 0 256 256">
                    <path
                        d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z">
                    </path>
                </svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ url('makeadoption') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="white" viewBox="0 0 256 256">
                    <path
                        d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z">
                    </path>
                </svg>
                Make Adoption
            </a>
        </li>
        <li>
            <span class="inline-flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                    </path>
                </svg>
                Show Pet
            </span>
        </li>
    </ul>
</div>

{{-- Card --}}

<div class="bg-[#0009] p-10 rounded-sm">
    <div class="avatar flex flex-col gap-2 justify-center items-center hover:scale-110 transition ease-in">
        <div class="mask mask-squircle w-48">
            <img src="{{ asset ('images/'.$pet->image)}}" />
        </div>
    </div>
    <div class="flex gap-2 flex-col md:flex-row">
        <ul class="list bg-[#5a5a5a99] mt-4 text-white text-center rounded-box shadow-md w-64">
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Name:</span> <span>{{ $pet->name }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Kind:</span> <span>{{ $pet->kind }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Weight:</span> <span>{{ $pet->weight }} kg</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Age:</span> <span>{{ $pet->age }} Years</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Breed:</span> <span>{{ $pet->breed }}</span>
            </li>
        </ul>
        <ul class="list bg-[#5a5a5a99] mt-4 text-white text-center rounded-box shadow-md w-64">
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Location:</span> <span>{{ $pet->location }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Status:</span> <span>@if($pet->active == 1)
                    <div class="badge badge-soft badge-accent w-full">Active</div>
                    @else
                    <div class="badge badge-soft badge-error w-full">Inactive</div>
                    @endif
                </span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Adoption:</span> <span>@if($pet->status == '1')
                    <div class="badge badge-soft badge-warning w-full">Adopted</div>
                    @else
                    <div class="badge badge-soft badge-primary w-full">No Adopted</div>
                    @endif
                </span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Created At:</span> <span>{{
                    $pet->created_at->diffForHumans()}}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Updated At:</span> <span>{{
                    $pet->updated_at->diffForHumans()}}</span>
            </li>
        </ul>
    </div>
    {{-- boton adoptar --}}
    <div class="flex justify-center mt-6">
        <form action="{{ url('makeadoption/'.$pet->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary btn-lg">Adopt {{ $pet->name }}</button>
        </form>
    </div>

</div>
@endsection