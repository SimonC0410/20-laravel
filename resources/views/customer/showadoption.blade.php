@extends('layouts.dashboard')

@section('title', 'Show Adoptions: Larapets 🦧')

@section('content')
<h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-white">Show adoption
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
            <a href="{{ url('myadoptions') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="white" viewBox="0 0 256 256">
                    <path
                        d="M32,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H40A8,8,0,0,1,32,64Zm8,72h64a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16Zm80,48H40a8,8,0,0,0,0,16h80a8,8,0,0,0,0-16Zm128-40c0,36.52-50.28,62.08-52.42,63.16a8,8,0,0,1-7.16,0C186.28,206.08,136,180.52,136,144a32,32,0,0,1,56-21.14A32,32,0,0,1,248,144Zm-16,0a16,16,0,0,0-32,0,8,8,0,0,1-16,0,16,16,0,0,0-32,0c0,20.18,26.21,39.14,40,46.93C205.79,183.15,232,164.19,232,144Z">
                    </path>
                </svg>
                My Adoptions
            </a>
        </li>
        <li>
            <span class="inline-flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                    </path>
                </svg>
                Show adoption
            </span>
        </li>
    </ul>
</div>

{{-- Card --}}

<div class="bg-[#00000099] p-10 rounded-sm flex justify-center items-center flex-col">
    <div class="avatar-group m-8 -space-x-6">
        <div class="avatar border-black">
            <div class="w-36">
                <img src="{{ asset('images/' . $adopt->user->photo) }}" />
            </div>
        </div>
        <div class="avatar border-black">
            <div class="w-36">
                <img src="{{ asset('images/' . $adopt->pet->image) }}" />
            </div>
        </div>
    </div>
    <div class="flex gap-2 flex-col md:flex-row">
        <ul class="list bg-[#ffffff18] mt-4 text-white text-center rounded-box shadow-md w-64">
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Document:</span><span>{{ $adopt->user->document }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">FullName:</span><span>{{ $adopt->user->fullname }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Gender:</span><span>{{ $adopt->user->gender }}</span>
            </li>
            <li class="list-row">
                <span
                    class="text-[#ffffffe1] font-semibold">Age:</span><span>{{Carbon\Carbon::parse($adopt->user->birthdate)->age}}
                    Years Old</span>
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Phone:</span><span>{{ $adopt->user->phone }}</span>
            </li>

            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Email:</span><span>{{ $adopt->user->email }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Active:</span>
                <span>
                    @if ($adopt->user->active == 1)
                    <div class="badge badge-outline badge-success">Active</div>
                    @else
                    <div class="badge badge-outline badge-error">Inactive</div>
                    @endif
                </span>
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Role:</span>
                <span>
                    @if ($adopt->user->role == 'Administrator')
                    <div class="badge badge-outline badge-warning">Admin</div>
                    @else
                    <div class="badge badge-outline badge-default">Customer</div>
                    @endif
                </span>
            </li>

        </ul>
        <ul class="list bg-[#ffffff18] mt-4 text-white text-center rounded-box shadow-md w-64">
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Name:</span> <span>{{ $adopt->pet->name }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Kind:</span> <span>{{ $adopt->pet->kind }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Weight:</span> <span>{{ $adopt->pet->weight }} kg</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Age:</span> <span>{{ $adopt->pet->age }} Years</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Breed:</span> <span>{{ $adopt->pet->breed }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Location:</span> <span>{{ $adopt->pet->location }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Status:</span> <span>@if($adopt->pet->active == 1)
                    <div class="badge badge-soft badge-accent w-full">Active</div>
                    @else
                    <div class="badge badge-soft badge-error w-full">Inactive</div>
                    @endif
                </span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Adoption:</span> <span>@if($adopt->pet->status == '1')
                    <div class="badge badge-soft badge-warning w-full">Adopted</div>
                    @else
                    <div class="badge badge-soft badge-primary w-full">No Adopted</div>
                    @endif
                </span>
            </li>
        </ul>
    </div>
</div>
@endsection