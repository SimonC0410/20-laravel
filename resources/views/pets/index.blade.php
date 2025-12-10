@extends('layouts.dashboard')

@section('tittle', 'Module Pets: Larapets 🪿')

@section('content')
    <h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-neutra-50 mb-10">
    <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256"><path d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z"></path></svg>        Module Pets
    </h1>

    {{--  Options --}}
    <div class="join">
        <a class="btn btn-outline btn-success join-item bg-[#0006] hover:bg-[#00d390]" href="{{ url('pets/create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z">
                </path>
            </svg>
            <span class="hidden md:inline">
                Add Pet
            </span> 
        </a>
        <a class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-item" href="{{ url('export/pets/pdf') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z"></path></svg>
            <span class="hidden md:inline">
                Export
            </span>
        </a>
        <a class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-item" href="{{ url('export/pets/excel') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M200,24H72A16,16,0,0,0,56,40V64H40A16,16,0,0,0,24,80v96a16,16,0,0,0,16,16H56v24a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V40A16,16,0,0,0,200,24Zm-40,80h40v48H160Zm40-16H160V80a16,16,0,0,0-16-16V40h56ZM72,40h56V64H72ZM40,80H144v79.83c0,.06,0,.11,0,.17s0,.11,0,.17V176H40ZM72,192h56v24H72Zm72,24V192a16,16,0,0,0,16-16v-8h40v48ZM65.85,146.88,81.59,128,65.85,109.12a8,8,0,0,1,12.3-10.24L92,115.5l13.85-16.62a8,8,0,1,1,12.3,10.24L102.41,128l15.74,18.88a8,8,0,0,1-12.3,10.24L92,140.5,78.15,157.12a8,8,0,0,1-12.3-10.24Z"></path></svg>
            <span class="hidden md:inline">
                Export
            </span>
        </a>

        <form class="join-item" action="{{ url('import/pets') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" id="file" class="hidden" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
            <button type="button" class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white btn-import">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Zm-42.34-77.66a8,8,0,0,1-11.32,11.32L136,139.31V184a8,8,0,0,1-16,0V139.31l-10.34,10.35a8,8,0,0,1-11.32-11.32l24-24a8,8,0,0,1,11.32,0Z"></path>
                </svg>
                <span class="hidden md:inline">Import</span> 
            </button>
        </form>
    </div>
    {{-- Buscar --}}

    <label class="input text-white bg-[#000000e8] outline-none mb-10">
        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g
            stroke-linejoin="round"
            stroke-linecap="round"
            stroke-width="2.5"
            fill="none"
            stroke="currentColor"
            >
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.3-4.3"></path>
            </g>
        </svg>
        <input type="search" required placeholder="qsearch" id="qsearch"/>
    </label>






    <div class="overflow-x-auto rounded-box text-white bg-[#0009]">
        <table class="table">
            <!-- head -->
            <thead>
                <tr class=" bg-black text-white">
                    <th class="hidden md:table-cell">Id</th>
                    <th>image</th>
                    <th>name</th>
                    <th class="hidden md:table-cell">kind</th>
                    <th>breed</th>
                    <th class="hidden md:table-cell">active</th>
                    <th class="hidden md:table-cell">status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="datalist">
                @foreach($pets as $pet)
                    <tr @if($pet->id % 2 == 0) class="bg-[#0000007c]" @endif>
                        <th class="hidden md:table-cell">{{ $pet->id }}</th>
                        <td>
                            <div class="avatar">
                                <div class="mask mask-squircle w-16">
                                    <img src="{{ asset('images/'.$pet->image) }}"/>
                                </div>
                            </div>
                        </td>
                        <td class="hidden md:table-cell">{{ $pet->name }}</td>
                        <td class="hidden md:table-cell">{{ $pet->kind }}</td>
                        <td class="hidden md:table-cell">{{ $pet->breed }}</td>
                        <td>
                            @if ($pet->active == 1)
                                <div class="badge badge-outline badge-success">Active</div>
                            @else
                                <div class="badge badge-outline badge-error">Inactive</div>
                            @endif
                        </td>
                        <td>
                            @if ($pet->status == 1)
                                <div class="badge badge-outline badge-error">Adopted</div>
                            @else
                                <div class="badge badge-outline badge-success">in adoption</div>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-outline btn-xs" href="{{ url('pets/'.$pet->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                                </svg>
                            </a>
                            <a class="btn btn-outline btn-xs" href="{{ url('pets/'.$pet->id.'/edit') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path>
                                </svg>
                            </a>
                            <a class="btn btn-outline btn-error btn-xs btn-delete" href="javascript:;" data-name="{{ $pet->name }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path>
                                </svg>
                            </a>
                            <form class="hidden" method="POST" action="{{ url('pets/'.$pet->id) }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr class="bg-[#0009]">
                    <td colspan="8">{{ $pets->links('layouts.pagination') }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <dialog id="modal_message" class="modal">
        <div class="modal-box bg-[#1e856bf5] text-black">
            <h3 class="text-lg font-bold">Congratulations!</h3>
            <div role="alert" class="alert bg-[#ffffffc9]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{session('message')}}</span>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <dialog id="modal_delete" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold mb-4">
                Are you sure?
            </h3>
            <div role="alert" class="alert alert-error alert-soft" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6 shrink-0 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>You want to delete: <strong class="name"></strong></span>
            </div>
            <div class="flex gap-4 mt-4">
                <button class="btn btn-outline btn-error btn-sm btn-confirm">Confirm</button>
                <form method="dialog">
                    <button class="btn btn-default btn-outline btn-sm">Cancel</button>
                </form>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button class="btn-btn default">Cancel</button>
        </form>
    </dialog>
@endsection

@section('js')
    <script>
        $(document).ready(function(){

            //Modal ------------
            const modal_message = document.getElementById('modal_message')
            @if(session('message'))
                modal_message.showModal();
            @endif
            
            //Delete User ------
            $('table').on('click','.btn-delete',function(){
                $name = $(this).data('name')
                $('.name').text($name)
                $frm = $(this).next()
                modal_delete.showModal()
            })
            $('.btn-confirm').click(function (e){
                e.preventDefault()
                $frm.submit()
            })
            // Serach ----------
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
                
                $.post("search/pets", {'q': query, '_token': $token},
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
                                            <span class="loading loading-dots loading-xl"></span>
                                        </td>
                                    </tr>`)
                
                if(query != ''){
                    search(query)
                } else {
                    setTimeout(()=>{
                        window.location.replace('pets')
                    },500)
                }
            })
            //Import
            $('.btn-import').click(function(e){
                $('#file').click()
            })
            $('#file').change(function(e){
                $(this).parent().submit()
            })
        })
    </script>
@endsection