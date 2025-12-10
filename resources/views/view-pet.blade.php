<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Only pet 🦇



    </title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-teal-900 p-10 min-h-[100dvh]">
    <h1 class="text-white text-center text-4xl border-b-2 pb-4">Only Pet</h1>
    <section class="p-10 flex gap-4 flex-wrap justify-center">
        <div class="card bg-base-100 w-96 shadow-sm">
            <figure class="px-10 pt-10">
                <img
                    src="{{asset('images/'.$pet->image)}}"
                    alt="Shoes" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title">{{$pet->name}}</h2>
                <div class="card-body">
                    <ul class="list bg-base-100 rounded-box shadow-md">
                        <li class="list-row">
                            <div>
                                <div>Kind:</div>
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">{{$pet->kind}}</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-row">
                            <div>
                                <div>Weight:</div>
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">{{$pet->weight}}</div>
                                </div>

                            </div>
                        </li>
                        <li class="list-row">
                            <div>
                                <div>age:</div>
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">{{$pet->age}}</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-row" >
                            <div>
                                <div>breed:</div>
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">{{$pet->breed}}</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-row">
                            <div>

                                <div>location:</div>
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">{{$pet->breed}}</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-row">
                            <div>

                                <div>active:</div>
                                @if($pet->active == 1)

                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Yes</div>
                                </div>

                                @else
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">No</div>
                                </div>

                                @endif
                            </div>
                        </li>
                        <li class="list-row">
                            <div>
                                <div>Description:</div>
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">{{$pet->description}}</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-row">
                            <div>

                                <div>status:</div>
                                @if($pet->status == 1)
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Adopted</div>
                                </div>

                                @else
                                <div class="flex items-center gap-2">
                                    <div class="status status-info animate-bounce"></div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Avalible</div>
                                </div>

                                @endif
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>