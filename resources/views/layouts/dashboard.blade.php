<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
@php
if(Auth::user()->role == 'Administrator'){
$image = "images/admin.jpg";
}
else{
$image = "images/customers.jpg";
}
@endphp

<body
    class="min-h-[100dvh] bg-[url({{ asset($image) }})] bg-center bg-cover bg-fixed w-full flex flex-col gap-4 items-center justify-center p-8 pt-20">
    @include('layouts.navbar')
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" referrerpolicy="no-referrer"></script>
    @yield('js')
</body>

</html>