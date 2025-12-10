@extends('layouts.dashboard')
@section('title', 'My Profile: Larapets 🦧')

@section('content')
<h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-white">My Profile
    <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
        <path
            d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
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
            <span class="inline-flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
                    </path>
                </svg>
                My Profile
            </span>
        </li>
    </ul>
</div>
{{-- Form --}}
<div class="card text-white md:w-[720px] w-[320px] p-[20px]">
    <form method="POST" action="{{ url('myprofile/'.$user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-col md:flex-row gap-4 mt-4">
            <div class="w-full md:w-[320px]">
                <div
                    class="avatar flex flex-col gap-2 cursor-pointer justify-center items-center hover:scale-110 transition ease-in">
                    <div id="upload" class="mask mask-squircle w-48 bg-white">
                        <img id="preview" src="{{asset('images/'. $user->photo)}}" />
                    </div>
                    <small class="pb-0 border-white border-b flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,16V152h-28.7A15.86,15.86,0,0,0,168,156.69L148.69,176H107.31L88,156.69A15.86,15.86,0,0,0,76.69,152H48V48Zm0,160H48V168H76.69L96,187.31A15.86,15.86,0,0,0,107.31,192h41.38A15.86,15.86,0,0,0,160,187.31L179.31,168H208v40ZM90.34,109.66a8,8,0,0,1,0-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32L136,91.31V152a8,8,0,0,1-16,0V91.31l-18.34,18.35A8,8,0,0,1,90.34,109.66Z">
                            </path>
                        </svg>
                        Upload Photo
                    </small>
                    @error('photo') <small class="badge badge-outline badge-error w-full py-4">{{ $message }}</small>
                    @enderror

                </div>
                <input type="file" id="photo" name="photo" class="hidden" accept="images/*">
                <input type="hidden" name="originPhoto" value="{{ $user->photo }}">
            </div>

            <div class="w-full md:w-[320px]">
                <label class="label text-white">Document</label>
                <input type="text" class="input bg-[#0006]" name="document" placeholder="1054123123"
                    value="{{ $user->document }}" />
                @error('document') <small class="badge badge-outline badge-error w-full py-4">{{ $message }}</small>
                @enderror

                <label class="label text-white">Full Name</label>
                <input type="text" class="input bg-[#0006]" name="fullname" placeholder="Jeremias Springfield"
                    value="{{ $user->fullname }}" />
                @error('fullname') <small class="badge badge-outline badge-error w-full py-4">{{ $message }}</small>
                @enderror

                <label class="label text-white">Gender</label>
                <select name="gender" class="select bg-[#0006] w-full">
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male" @selected($user->gender =='male' )>Male</option>
                    <option value="female" @selected($user->gender =='female' )>Female</option>
                    <option value="other" @selected($user->gender =='other' )>Other</option>
                </select>
                @error('gender') <small class="badge badge-outline badge-error w-full py-4">{{ $message }}</small>
                @enderror
            </div>

            <div class="w-full md:w-[320px]">
                <label class="label text-white">Phone</label>
                <input type="text" class="input bg-[#0006]" name="phone" placeholder="3051231234"
                    value="{{ $user->phone }}" />
                @error('phone') <small class="badge badge-outline badge-error w-full py-4">{{ $message }}</small>
                @enderror

                <label class="label text-white">Email</label>
                <input type="text" class="input bg-[#0006]" name="email" placeholder="Email"
                    value="{{ $user->email }}" />
                @error('email') <small class="badge badge-outline badge-error w-full py-4">{{ $message }}</small>
                @enderror
                <label class="label text-white">Birthdate</label>
                <input type="date" class="input bg-[#0006]" name="birthdate" value="{{ $user->birthdate }}" />
                @error('birthdate') <small class="badge badge-outline badge-error w-full py-4">{{ $message }}</small>
                @enderror
            </div>

        </div>

        <div class="flex flex-wrap justify-center items-center mt-4">
            <button class="btn btn-info w-full">Edit</button>
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
           $('#preview').attr('src', window.URL.createObjectURL($(this).prop('files')[0]));
        })
    })
</script>
@endsection