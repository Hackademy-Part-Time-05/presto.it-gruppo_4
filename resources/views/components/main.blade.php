<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="container-fluid d-flex flex-column justify-content-between m-0 p-0">

    @if (session()->has('access.denied'))
    <div class="flex flex-row justify-center my 2 alert alert-danger">
        {{session('access.denied')}}
    </div>
    @endif

    @if (session()->has('message'))
        <div class="flex flex-row justify-center my 2 alert alert-success">
            {{session('message')}}
        </div>
    @endif

        <x-navbar/>
        {{$slot}}
        <x-footer/>
    @livewireScripts
</body>
</html>