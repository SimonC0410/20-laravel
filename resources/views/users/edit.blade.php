@extends('layouts.dashboard')

@section('titule','Edit User: Larapets 🪰')

@section('content')
    <h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
            <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path>
        </svg>
        Edit User
    </h1>

    {{-- Breadcrumbs --}}
    <div class="breadcrumbs text-sm text-white">
        <ul>
            <li>
                <a href="{{ url('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('users') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path>
                    </svg>
                    User Module
                </a>
            </li>
            <li>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path>
                    </svg>
                    Edit User
                </a>
            </li>
        </ul>
    </div>

    {{-- Form --}}
    <div class="card text-white md:w-[720px] w-[320px] border border-white p-[20px]">
        <form method="POST" action="{{ url('users/'.$user->id) }}" class="flex flex-col md:flex-row gap-4 mt-4 " enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-full md:w-[320px]">
                <div class="avatar flex flex-col gap-2 items-center justify-center cursor-pointer hover:scale-105 transition ease-in">
                    <div id="upload" class="mask mask-squircle w-48 ">
                        <img id="preview" src="{{asset('images/'.$user->photo)}}" />
                    </div>
                    <small class="pb-1 border-b-white border-b flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M208,40H48A24,24,0,0,0,24,64V176a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V64A24,24,0,0,0,208,40Zm8,136a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V64a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8Zm-48,48a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,224ZM157.66,106.34a8,8,0,0,1-11.32,11.32L136,107.31V152a8,8,0,0,1-16,0V107.31l-10.34,10.35a8,8,0,0,1-11.32-11.32l24-24a8,8,0,0,1,11.32,0Z"></path>
                        </svg>
                        Upload Photo
                    </small>
                    @error('photo')
                        <div>
                            <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <input type="file" name="photo" id="photo" class="hidden" accept="image/*" >
                <input type="hidden" name="originphoto" value="{{ $user->photo }}">
            </div>

            <div class="w-full md:w-[320px]">
                {{-- Document --}}
                <label class="label">Document</label>
                <input type="number" class="input bg-[#0009]" name="document" placeholder="123456789"
                    value="{{ old('document', $user->document) }}" />
                @error('document')
                    <small class="badge badge-error w-full mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Fullname --}}
                <label class="label">Full Name</label>
                <input type="text" class="input bg-[#0009]" name="fullname" placeholder="Jeremias Springfield"
                    value="{{ old('fullname', $user->fullname) }}" />
                @error('fullname')
                    <small class="badge badge-error w-full mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Gender --}}
                <label class="label">Gender</label>
                <select name="gender" class="select bg-[#0009] outline-0">
                    <option value="">Select...</option>
                    <option value="Female" @if (old('gender', $user->gender) == 'female') selected @endif>Female</option>
                    <option value="Male" @if (old('gender', $user->gender) == 'male') selected @endif>Male</option>
                </select>
                @error('gender')
                    <small class="badge badge-error w-full mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

            </div>

            <div class="w-full md:w-[320px]">

                {{-- Birthdate --}}
                <label class="label">Birthdate</label>
                <input type="date" class="input bg-[#0009]" name="birthdate" placeholder="1983-06-16"
                    value="{{ old('birthdate', $user->birthdate) }}" />
                @error('birthdate')
                    <small class="badge badge-error w-full mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- phone --}}
                <label class="label">Phone</label>
                <input type="number" class="input bg-[#0009]" name="phone" placeholder="3204456321"
                    value="{{ old('phone', $user->phone) }}" />
                @error('phone')
                    <small class="badge badge-error w-full mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Email --}}
                <label class="label">Email</label>
                <input type="text" class="input bg-[#0009]" name="email" placeholder="Email"
                    value="{{ old('email', $user->email) }}" />
                @error('email')
                    <small class="badge badge-error w-full mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                <button class="btn btn-outline hover:bg-[#fff6] hover:text-white mt-4 w-full">Add</button>
            </div>


        </form>
    </div>
  
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#upload').click(function(e){
            e.preventDefault()
            $('#photo').click()
        })
        $('#photo').change(function(e){
            e.preventDefault()
            $('#preview').attr('src', window.URL.createObjectURL($(this).prop('files')[0]))
        })
    })
</script>
@endsection