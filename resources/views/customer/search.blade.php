@forelse ($pets as $pet)
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
@empty
<tr>
    <td class="text-center py-10 font-bold text-xl" colspan="8">
        No results found
    </td>
</tr>

@endforelse