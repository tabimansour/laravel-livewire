<!doctype html>
<html lang="en">
<head>
    <!-- ... --->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <title>Laravel Livewire</title>
</head>
<body>
    <div class="flex m-3">
        <livewire:comments />
    </div>

    @livewireScripts
</body>
</html>
