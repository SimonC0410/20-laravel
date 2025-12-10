@extends('layouts.dashboard')
@section('title', 'Make Adoption: Larapets 🐕‍🦺 ')

@section('content')
<h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-neutral-50 mb-5">
    <svg xmlns="http://www.w3.org/2000/svg" class="size-10" fill="currentColor" viewBox="0 0 256 256">
        <path
            d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z">
        </path>
    </svg>
    Make Adoption
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
    </ul>
</div>

    <div class="overflow-x-auto rounded-box text-white bg-[#0009]">
    <table class="table">
        <!-- head -->
        <thead class="bg-[#113a85e0] text-white">
            <tr>
                <th class="hidden md:table-cell">Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Kind</th>
                <th class="hidden md:table-cell">age</th>
                <th class="hidden md:table-cell">Active</th>
                <th class="hidden md:table-cell">status</th>
                <th>
                    {{-- buscar --}}
                    <label class="input bg-white/30 rounded-full flex items-center gap-2 px-3 py-1">
                        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                stroke="currentColor">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </g>
                        </svg>
                        <input type="search" placeholder="Search..." name="qsearch" id="qsearch" />
                    </label>
                </th>
            </tr>
        </thead>
        <tbody class="datalist">
            @foreach ($pets as $pet)
            <!-- row 1 -->
            <tr @if($pet->id % 2 == 0) class="bg-[#fff3]" @endif>
                <td class="hidden md:table-cell">{{ $pet->id }}</td>
                <td>
                    <div class="avatar">
                        <div class="mask mask-squircle w-12">
                            <img src="{{ asset('images/'.$pet->image) }}" />
                        </div>
                    </div>
                </td>
                <td>{{ $pet->name }}</td>
                <td>
                    @if($pet->kind == 'Dog')
                    <span class="badge badge-soft badge-accent">Dog</span>
                    @elseif(($pet->kind == 'Cat'))
                    <span class="badge badge-soft badge-warning">Cat</span>
                    @elseif(($pet->kind == 'Bird'))
                    <span class="badge badge-soft badge-info">Bird</span>
                    @elseif($pet->kind == 'Pig')
                    <span class="badge badge-soft badge-error">Pig</span>
                    @else
                    <span class="badge badge-soft badge-default">{{ $pet->kind }}</span>
                    @endif
                </td>
                <td class="hidden md:table-cell">{{ $pet->age }}</td>
                <td class="hidden md:table-cell text-center">
                    @if($pet->active == 1)
                    <span class="badge badge-soft badge-success">Yes</span>
                    @else
                    <span class="badge badge-soft badge-error">No</span>
                    @endif
                </td>
                <td class="hidden md:table-cell">
                    @if($pet->status == '1')
                    <span class="badge badge-soft badge-warning w-full">Adopted</span>
                    @else
                    <span class="badge badge-soft badge-default w-full">
                        not adopted</span>
                    @endif
                </td>
                <td>
                    <div class="flex gap-4 justify-center">
                        <a href="{{ url('makeadoption/'.$pet->id) }}" class="group badge badge-outline badge-secondary flex">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="size-7 hover:scale-120 group-hover:text-red-500 transition" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            <tr class="bg-[#0009]">
                <td colspan="8 text">
                    {{ $pets->links('layouts.pagination') }}
                </td>
            </tr>
        </tbody>
    </table>
</div>

{{-- Modal --}}
<dialog id="success_modal" class="modal">
    <div class="modal-box bg-sucess">
        <h3 class="text-lg font-bold">Congrats!</h3>
        <div role="alert" class="alert alert-soft alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{session('success')}}</span>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>



<dialog id="delete_modal" class="modal">

    <div class="modal-box bg-sucess">

        <div class="flex justify-between">
            <h3 class="text-lg font-bold">Are you sure?</h3>
            <form method="dialog">
                <button class="btn btn-soft btn-error w-8 h-8">
                    x
                </button>
            </form>
        </div>
        <div role="alert"
            class="alert alert-soft alert-info mt-4 flex flex-col md:flex-row gap-4 md:gap-2 justify-between items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="h-6 w-6 shrink-0 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>You want to deleted: <strong class="name"></strong></span>
            <button class="btn btn-soft btn-error btn-confirm">Confirm</button>

        </div>

    </div>
    <form method="dialog" class="modal-backdrop">
        <button>Cancel</button>
    </form>
</dialog>


@endsection

@section('js')
<script>
    // Modal success
    @if(session('success'))
    const success_modal = document.getElementById('success_modal');
    success_modal.showModal();
    @endif

    // Module Delete
    $('table').on('click', '.btn-delete', function(){
        $name = $(this).data('name')
        $('.name').text($name)
        $frm = $(this).next()
        delete_modal.showModal()
    })
    $('.btn-confirm').click(function(e){
        e.preventDefault()
            $frm.submit()
    })

    // Search
    function debounce(func, wait) {
        let timeout
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout)
                func(...args)
            };
            clearTimeout(timeout)
            timeout = setTimeout(later, wait)
        }
    }
    const search = debounce(function(query) {
        
        $token = $('input[name=_token]').val()
        
        $.post("search/makeadoption", {'q': query, '_token': $token},
            function (data) {
                $('.datalist').html(data).hide().fadeIn(1000)
            }
        )
    }, 500)
    $('body').on('input', '#qsearch', function(event) {
        event.preventDefault()
        const query = $(this).val()
        
        $('.datalist').html(`<tr>
                                <td colspan="8" class="text-center py-18">
                                    <span class="loading loading-spinner loading-xl"></span>
                                </td>
                            </tr>`)
        
        if(query != ''){
            search(query)
        }else{
            setTimeout(() => {
                window.location.replace('makeadoption')
            }, 500);
        }
    })



</script>

@endsection